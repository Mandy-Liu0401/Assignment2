<?php
require_once('db_credentials.php');
require_once('database.php');
$db = db_connect();


if (!isset($_GET['id'])) { //check if we got the id
    header("Location:  index.php"); //if not, stay in the index page
}
$id = $_GET['id'];

$page_title = 'Edit Book';

// Handle form values sent by newBook.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //access the existing book information
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $description = $_POST['description'];
    $comment = $_POST['comment'];

    //update the table with new information
    $sql = "UPDATE books set title = '$title' , author = '$author' , 
    genre = '$genre' , description = '$description', comment = '$comment'where id = '$id' ";
    $result = mysqli_query($db, $sql);

    //redirect to viewBook page
    header("Location: viewBook.php?id=  $id");
}
// display the employee information
else {
    $sql = "SELECT * FROM books WHERE id= '$id' ";

    $result_set = mysqli_query($db, $sql);

    $result = mysqli_fetch_assoc($result_set); //it is an array holds all info for this id
}
?>

<?php include 'headerEm.php' ?>;

<div id="content">

    <a class="back-link" href="index.php"> Back to book collection</a>

    <div class="page edit">

        <h1>Edit Book Info</h1>

        <!-- point to the same page, and fill in the array content to a form -->
        <form form action="<?php echo 'editBook.php?id=' . $result['id']; ?>" method="post">
            <dl>
                <dt>ID</dt>
                <dd><input type="text" name="id" value="<?php echo $result['id']; ?>" /></dd>
                </dd>
            </dl>
            <dl>
                <dt>Title</dt>
                <dd><input type="text" name="title" value="<?php echo $result['title']; ?>" /></dd>
            </dl>
            <dl>
                <dt>Author</dt>
                <dd><input type="text" name="author" value="<?php echo $result['author']; ?>" /></dd>
                </dd>
            </dl>
            <dl>
                <dt>Book Genre</dt>
                <dd><input type="text" name="genre" value="<?php echo $result['salary']; ?>" /></dd>
            </dl>
            <dl>
                <dt>Description</dt>
                <dd><input type="text" name="description" value="<?php echo $result['description']; ?>" /></dd>
            </dl>
            <dl>
                <dt>Comment</dt>
                <dd><input type="text" name="comment" value="<?php echo $result['comment']; ?>" /></dd>
            </dl>

            <div class = button>
                    <input type="submit" value="Edit Book">
                    <input type="reset" value="Reset">
                </div>
        </form>

    </div>

</div>

<?php include 'footerEm.php'; ?>