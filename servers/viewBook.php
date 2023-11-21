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
    //access URL parameter
    $id = $_GET['id']; //get the id value from url
    

    $sql = "SELECT * FROM books WHERE id= '$id' ";

    $result_set = mysqli_query($db, $sql);  // a pointer to the one selected record
    
    $result = mysqli_fetch_assoc($result_set); // it is an asscoaiative array now
    
    ?>

    <div class="content">

        <a class="back-link" href="index.php">&laquo; Back to book collection</a>

        <div class="container">

            <h2>Book Details</h2>

            <div class="list">
                <dl>
                    <dt>Title</dt>
                    <dd>
                        <?php echo $result['title']; ?>
                    </dd>
                </dl>

                <dl>
                    <dt>Author</dt>
                    <dd>
                        <?php echo $result['author']; ?>
                    </dd>
                </dl>
                <dl>
                    <dt>Book Genre</dt>
                    <dd>
                        <?php echo $result['genre']; ?>
                    </dd>
                </dl>
                <dl>
                <dt>Description</dt>
                    <dd>
                        <?php echo $result['description']; ?>
                    </dd>
                </dl>
                <dl>
                <dt>Comment</dt>
                    <dd>
                        <?php echo $result['comment']; ?>
                    </dd>
                </dl>
            </div>


        </div>

    </div>

    <?php include 'footerEm.php'; ?>
</body>

</html>