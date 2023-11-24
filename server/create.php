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
    
    if(isset($_FILES['imagePath'])){
        $file_name = $_FILES['imagePath']['name'];
        $file_tmp = $_FILES['imagePath']['tmp_name'];
        move_uploaded_file($file_tmp,"../images/".$file_name);
    }

    else{
        $file_name = 'default.png';
    }
    $sql = "INSERT INTO books (title, author, genre, description, comment, imagePath) 
        VALUES ('$title','$author','$genre', '$description', '$comment','../images/$file_name')";
    
    $result = mysqli_query($db, $sql);

    $id = mysqli_insert_id($db);
    //redirect to show page
    header("Location: viewBook.php?id=$id");


} else {
    header("Location: newBook.php");
}

?>