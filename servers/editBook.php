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
// display the book info by id
else {
    $sql = "SELECT * FROM books WHERE id= '$id' ";

    $result_set = mysqli_query($db, $sql);

    $result = mysqli_fetch_assoc($result_set); //it is an array holds all info for this id
}
?>

<?php include 'headerEm.php'; ?>

<div id="content">

    <a class="back-link" href="index.php">&laquo; Back to book collection</a>

    <div class="page edit">

        <h2>Edit Book Info</h2>

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
                <dd>
                    <select name="genre" id="genre" >
                    <!-- using the ternary operator (? :) to conditionally output the string 'selected' 
                    if the value of $result['genre'] is equal to 'biography', 
                    otherwise, it outputs an empty string. -->
                    <option value="nonFiction" <?php echo ($result['genre'] == 'nonFiction') ? 'selected' : ''; ?>>Non-fiction</option>
                    <option value="childrens" <?php echo ($result['genre'] == 'childrens') ? 'selected' : ''; ?>>Children's Book</option>
                    <option value="fantasy" <?php echo ($result['genre'] == 'fantasy') ? 'selected' : ''; ?>>Fantasy</option>
                    <option value="scienceFiction" <?php echo ($result['genre'] == 'scienceFiction') ? 'selected' : ''; ?>>Science-Fiction</option>
                    <option value="romance" <?php echo ($result['genre'] == 'romance') ? 'selected' : ''; ?>>Romance</option>
                    <option value="thriller" <?php echo ($result['genre'] == 'thriller') ? 'selected' : ''; ?>>Thriller</option>
                    <option value="horror" <?php echo ($result['genre'] == 'horror') ? 'selected' : ''; ?>>Horror</option>
                    <option value="history" <?php echo ($result['genre'] == 'history') ? 'selected' : ''; ?>>History</option>
                    <option value="biography" <?php echo ($result['genre'] == 'biography') ? 'selected' : ''; ?>>Biography</option>
                    </select>
            </dd>
            </dl>
            <dl>
                <dt>Description</dt>
                <dd><input type="text" name="description" value="<?php echo $result['description']; ?>" /></dd>
            </dl>
            <dl>
                <dt>Comment</dt>
                <dd><input type="text" name="comment" value="<?php echo $result['comment']; ?>" /></dd>
            </dl>

            <div class = "button">
                    <input type="submit" value="Edit Book">
                    <input type="reset" value="Reset">
                </div>
        </form>

    </div>

</div>

<?php include 'footerEm.php'; ?>