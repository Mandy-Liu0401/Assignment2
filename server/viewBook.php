<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../styles.css" />
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

    //access URL parameter
    $id = $_GET['id']; //get the id value from url
    

    $sql = "SELECT * FROM books WHERE id= '$id' ";

    $result_set = mysqli_query($db, $sql);  // a pointer to the one selected record
    
    $result = mysqli_fetch_assoc($result_set); // it is an asscoaiative array now
    
    ?>

    <div class="content">

        <a class="back-link" href="index.php">&laquo; Back to book collection</a>

        <div class="page_view">

            <h2>Book Details</h2>

            <div class="view_list">
                <dl>
                    <dt>Title</dt>
                    <dd><?php echo $result['title']; ?></dd>
                </dl>

                <dl><dt>Author</dt>
                    <dd><?php echo $result['author']; ?></dd>
                </dl>
                <dl>
                    <dt>Book Genre</dt>
                    <dd ><?php echo $result['genre']; ?></dd>
                </dl>
                <dl>
                <dt>Description</dt>
                    <dd><?php echo $result['description']; ?></dd>
                </dl>
                <dl>
                <dt>Comment</dt>
                <dd><?php echo $result['comment']; ?></dd>
                </dl>
                <dl>
                <dt>Book Cover</dt>
                <dd><img src="<?php echo $result['imagePath']; ?>" alt="Book Image" width="120" height="180"></dd>
                </dl>
            </div>
            <div class="button">
                <input type="button" value="Back to My List" onclick="window.location.href='index.php';" />
            </div>
        </div>

    </div>

    <?php include 'footerEm.php'; ?>
</body>

</html>