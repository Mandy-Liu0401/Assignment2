<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" media="all" href="../styles.css" />
</head>

<body> 
    <?php
    require_once('db_credentials.php');
    require_once('database.php');
    include "headerEm.php";
    $db = db_connect();

    // Handle form values sent by searchBook.php
    if ($_SERVER['REQUEST_METHOD'] == 'GET') {

        $title = $_GET['title'];
        $author = $_GET['author'];
        $genre = $_GET['genre'];

        $sql = "SELECT * FROM books WHERE ";
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
            $conditions[] = "genre LIKE '%$genre%'";
        }

        if (!empty($conditions)) {
            // implode function with " AND " as the separator. 
            //This creates a valid SQL WHERE clause that includes all the conditions joined by "AND."
            $sql .= implode(" AND ", $conditions);
        } 

        $sql .= " ORDER BY title ASC";

        $result_set = mysqli_query($db, $sql);
        }

    else{
        $sql = "SELECT * FROM books";

        $result_set = mysqli_query($db, $sql);

        $result = mysqli_fetch_assoc($result_set);
    }
    ?>

    <!-- Display the search results -->
    <div id="content">
        <a class="back-link" href="index.php">&laquo; Back to book collection</a>
        <h2>Search Results</h2>
        <div class="attributes">
            <table class ="view_list">
                <!-- Table header -->
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Genre</th>
                    <th>Description</th>
                    <th>Comment</th>
                </tr>
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
            </table>
        </div>
    </div>

    <?php include('footerEM.php'); ?>

    
</body>

</html>
