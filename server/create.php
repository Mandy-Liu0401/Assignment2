<?php
require_once('db_credentials.php');
require_once('database.php');
include "headerEm.php";
$db = db_connect();

// Handle form values sent by newBook.php
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //check is the data has submitted 

    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $description = $_POST['description'];
    $comment = $_POST['comment'];

     // Set a default value for $file_path
    $file_path = "../images/default.png";

    if (isset($_FILES['imagePath'])&& $_FILES['imagePath']['error'] == UPLOAD_ERR_OK) {//check if a file uploded successfully
        $file_name = $_FILES['imagePath']['name'];
        $file_tmp = $_FILES['imagePath']['tmp_name'];
        $file_path = "../images/".$file_name;
        move_uploaded_file($file_tmp, $file_path);
    } 
    
    $sql = "INSERT INTO books (title, author, genre, description, comment, imagePath) 
        VALUES ('$title','$author','$genre', '$description', '$comment','$file_path')";

    $result = mysqli_query($db, $sql);

    $id = mysqli_insert_id($db);
    //redirect to viewBook page
    header("Location: viewBook.php?id=$id");


} else {
    header("Location: newBook.php");
}

?>