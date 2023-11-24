<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Mengying Liu and Wenxin Li">
    <meta name="description" content="serachBook.php file for Assigbment 2">
    <meta name="keywords" content="book catelogue">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../styles.css" />
    <title>Search Results</title>
</head>

<body>
    <?php
    require_once('db_credentials.php');
    require_once('database.php');
    include "headerEm.php";
    $db = db_connect();

    // Handle form values sent by searchBook.php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {

        $title = isset($_GET['title']) ? $_GET['title'] : '';
        $author = isset($_GET['author']) ? $_GET['author'] : '';
        $genre = isset($_GET['genre']) ? $_GET['genre'] : '';

        $sql = "SELECT * FROM books";
        $conditions = [];

        //checks if the user has provided a value for each field in the search form. 
        //If the field is not empty, it adds a condition to the $conditions array
        if (!empty($title)) {
            $conditions[] = "title LIKE '%$title%'";
        }

        if (!empty($author)) {
            $conditions[] = "author LIKE '%$author%'";
        }

        if (!empty($genre)) {
            $conditions[] = "genre = '$genre'";
        }

        if (!empty($conditions)) {
            // implode function with " AND " as the separator. 
            //This creates a valid SQL WHERE clause that includes all the conditions joined by "AND."
            $sql .= " WHERE " . implode(" AND ", $conditions);
        }

        $sql .= " ORDER BY title ASC";
        $result_set = mysqli_query($db, $sql);
    }
    ?>

    <!-- Display the search results -->
    <div id="content">

        <a class="back-link" href="index.php">&laquo; Back to book collection</a>

        <div class="page_view">

            <h2>Search Results</h2>

            <table class="list">
                <tr>
                    <th></th>
                    <th colspan=2>Title</th>
                    <th colspan=2>Author</th>
                    <th colspan=2>Genre</th>
                    <th colspan=2>Description</th>
                    <th colspan=2>Comment</th>
                </tr>

                <!-- Display each book row -->
                <?php while ($results = mysqli_fetch_assoc($result_set)) { ?>
                    <tr>
                        <!-- Insert image with dynamic source -->
                        <td><img src="<?php echo $results['imagePath']; ?>" alt="Book Image" width="120" height="180"></td>
                        <td>
                            <?php echo $results['title']; ?>
                        </td>
                        <td></td>
                        <td>
                            <?php echo $results['author']; ?>
                        </td>
                        <td></td>
                        <td>
                            <?php echo $results['genre']; ?>
                        </td>
                        <td></td>
                        <td class="longText">
                            <?php echo $results['description']; ?>
                        </td>
                        <td></td>
                        <td class="longText">
                            <?php echo $results['comment']; ?>
                        </td>
                        <td></td>
                    </tr>
                <?php } ?>
            </table>
        </div>

        <?php include('footerEM.php'); ?>


</body>

</html>