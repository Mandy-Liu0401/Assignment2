<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="scripts/script.js" defer></script>
    <script src="scripts/show.js" defer></script>
    <title>Booklogue</title>
</head>



<body>
    <?php include("headerEm.php") ?>

    <?php
    require_once('db_credentials.php');
    require_once('database.php');

    $db = db_connect();
    //$page_title = 'Employee'; ?>


    <?php

    $sql = "SELECT * FROM books ";
    $sql .= "ORDER BY title ASC";
    //echo $sql;
    $result_set = mysqli_query($db, $sql);

    ?>



    <div id="content">
        <div class="subjects listing">
            <h1>Book Collection</h1>

            <div class="actions">
                <a class="action" href="newBook.php">Add new book to your collection</a>
            </div>

            <table class="list">
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Genre</th>
                    <th>&nbsp</th>
                    <th>&nbsp</th>
                    <th>&nbsp</th>
                </tr>

                <?php while ($results = mysqli_fetch_assoc($result_set)) { ?>
                    <tr>
                        <td>
                            <?php echo $results['id']; ?>
                        </td>
                        <td>
                            <?php echo $results['name']; ?>
                        </td>
                        <td>
                            <?php echo $results['address']; ?>
                        </td>
                        <td>
                            <?php echo $results['salary']; ?>
                        </td>
                        <td><a class="action" href="<?php echo "show.php?id=" . $results['id']; ?>">View</a></td>
                        <td><a class="action" href="<?php echo "edit.php?id=" . $results['id']; ?>">Edit</a></td>
                        <td><a class="action" href=<?php echo "delete.php?id=" . $results['id']; ?>">delete</a></td>

                </tr>
                <?php } ?>
            </table>
            <br>
            <br>




            <?php include('server/footer.php'); ?>

</body>

</html>