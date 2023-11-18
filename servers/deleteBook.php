<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" media="all" href="styles.css" />
</head>

<body>
    <?php
    require_once('db_credentials.php');
    require_once('database.php');
    include "headerEm.php";
    $db = db_connect();

    if (!isset($_GET['id'])) {//check if we got the id
        header("Location:  index.php");//if not, stay in the index page
    }

    $id = $_GET['id'];

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $sql = "DELETE FROM books WHERE id ='$id'";
        $result = mysqli_query($db, $sql);

        header("Location: index.php");

    } else {
        $sql = "SELECT * FROM books WHERE id= '$id' ";

        $result_set = mysqli_query($db, $sql);

        $result = mysqli_fetch_assoc($result_set);//it is an array holds all info for this id

    }

    ?>

    <?php $page_title = 'Delete Book'; ?>


    <div id="content">

        <a class="back-link" href="index.php">&laquo; Back to book collection</a>

        <div class="page delete">
            <h1>Delete the Book</h1>
            <p>Are you sure you want to delete this book?</p>
            <p class="item">
                <?php echo $result['title']; ?>
            </p>

            <form form action="<?php echo 'deleteBook.php?id=' . $result['id']; ?>" method="post">
                <div class="Button">
                    <input type="submit" name="commit" value="Delete Book" />
                </div>
            </form>
        </div>
        <?php include 'footerEm.php'; ?>
    </div>