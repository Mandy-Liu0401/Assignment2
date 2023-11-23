<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <script src="../scripts/validate.js" defer></script>
    <title>Booklogue</title>
</head>

<body>
    <?php
    require_once('db_credentials.php');
    require_once('database.php');
    include "headerEm.php";
    $db = db_connect();

    // Function to fetch distinct genres from the database
    function getDistinctGenres($db)
    {
        $sql = "SELECT DISTINCT genre FROM books";
        $result = mysqli_query($db, $sql);

        $genres = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $genres[] = $row['genre'];
        }

        return $genres;
    }

    // Modify the SQL query based on the selected genre
    $selectedGenre = isset($_GET['genre']) ? $_GET['genre'] : '';
    $sql = "SELECT * FROM books";
    if (!empty($selectedGenre)) {
        $sql .= " WHERE genre = '$selectedGenre'";
    }
    $sql .= " ORDER BY title ASC";

    $result_set = mysqli_query($db, $sql);
    ?>


    <div class="content">
        <div class="filter">
            <div id="filterContainer">
                <form id="filterForm" action="index.php" method="GET">
                    <label for="genreFilter">Filter by Genre:</label>
                    <select id="genreFilter" name="genre">
                        <option value="">All Genres</option>
                        <?php
                        // Fetch distinct genres from the database
                        $distinctGenres = getDistinctGenres($db);
                        foreach ($distinctGenres as $genre) {
                            echo "<option value='{$genre}'>{$genre}</option>";
                        }
                        ?>
                    </select>
                    <input id= "filterBtn"type="submit" value="Apply Filter">
                    
                </form>
            </div>
            <a class="action" href="newBook.php">Add A New Book</a>
        </div>

        <h2>My Book Collection</h2>

        <table class="list">
            <tr>
                <th>&nbsp</th>
                <th colspan=2>Title</th>
                <th colspan=2>Author</th>
                <th colspan=2>Genre</th>
                <th colspan=2>Description</th>
                <th colspan=2>Comment</th>
                <th>&nbsp</th>
                <th>&nbsp</th>
                <th>&nbsp</th>
            </tr>

            <!-- Display each book row -->
            <?php while ($results = mysqli_fetch_assoc($result_set)) { ?>
                <tr>
                    <!-- Insert image with dynamic source -->
                    <td ><img src="<?php echo '../images/' . $results['id'] . '.jpg'; ?>" alt="Book Image" width="120" height="180"></td>
                    <td><?php echo $results['title']; ?></td>
                    <td>&nbsp</td>
                    <td><?php echo $results['author']; ?></td>
                    <td>&nbsp</td>
                    <td><?php echo $results['genre']; ?></td>
                    <td>&nbsp</td>
                    <td class="longText"><?php echo $results['description']; ?></td>
                    <td>&nbsp</td>
                    <td class="longText"><?php echo $results['comment']; ?></td>
                    <td>&nbsp</td>
                    <td><a class="action" href="<?php echo "viewBook.php?id=" . $results['id']; ?>">View</a></td>
                    <td><a class="action" href="<?php echo "editBook.php?id=" . $results['id']; ?>">Edit</a></td>
                    <td><a class="action" href=<?php echo "deleteBook.php?id=" . $results['id']; ?>">Delete</a></td>
            </tr>
            <?php } ?>
        </table>
        <br>
        <br>
    </div>
    <?php include('footerEM.php'); ?>

</body>

</html>