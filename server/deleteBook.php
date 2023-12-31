<!DOCTYPE html>
<html lang="en">

<head>
    <title>Delete The Book</title>
    <meta charset="UTF-8">
    <meta name="author" content="Mengying Liu and Wenxin Li">
    <meta name="description" content="deleteBook.php file for Assigbment 2">
    <meta name="keywords" content="book catelogue">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="all" href="../styles.css" />
</head>

<body>
    <?php
    require_once('db_credentials.php');
    require_once('database.php');
    include "headerEm.php";
    $db = db_connect();

    if (!isset($_GET['id'])) { //check if we got the id
        header("Location:  index.php"); //if not, stay in the index page
    }

    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $sql = "DELETE FROM books WHERE id ='$id'";
        $result_set = mysqli_query($db, $sql);

        header("Location: index.php");

    } else {
        $sql = "SELECT * FROM books WHERE id= '$id' ";

        $result_set = mysqli_query($db, $sql);

        $result = mysqli_fetch_assoc($result_set); //it is an array holds all info for this id
    
    }

    ?>

    <?php $page_title = 'Delete Book'; ?>


    <div class="content">

        <a class="back-link" href="index.php">&laquo; Back to book collection</a>

        <div class="page_delete">
            <h2>Delete The Book</h2>
            <p class="item">Are you sure you want to delete this book?</p>
            <p class="item"><em>
                    <?php echo $result['title']; ?> by
                    <?php echo $result['author']; ?>
                </em>
            </p>

            <form form action="<?php echo 'deleteBook.php?id=' . $result['id']; ?>" method="post">
                <div class="button">
                    <input type="submit" name="commit" value="Delete Book" />
                    <input type="button" value="Cancel" onclick="window.location.href='index.php';" />
                </div>
            </form>
        </div>
        <?php include 'footerEm.php'; ?>
    </div>

</body>

</html>