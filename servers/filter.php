<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../styles.css" />
</head>

<body>
<?php
// filter.php
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

    <div class="filter">
        <form id="genreFilterForm" action="filter.php" method="GET">
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
            <input type="submit" value="Apply Filter">
        </form>
    </div>


    <!-- Output the filtered results  -->
    <?php while ($results = mysqli_fetch_assoc($result_set)) { ?>
        <!-- Display each book row -->
        <tr>
            <td><?php echo $results['id']; ?></td>
            <td><?php echo $results['title']; ?></td>
            <td><?php echo $results['author']; ?></td>
            <td><?php echo $results['genre']; ?></td>
            <td><?php echo $results['description']; ?></td>
            <td><?php echo $results['comment']; ?></td>
        </tr>
    <?php } ?>

    <?php include('footerEM.php'); ?>


</body>

</html>