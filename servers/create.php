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

    $sql = "INSERT INTO books (title, author, genre, description, comment) 
        VALUES ('$title','$author','$genre', '$description', '$comment')";
    $result = mysqli_query($db, $sql);
    // For INSERT statements, $result is true/false


    $id = mysqli_insert_id($db);
    //redirect to show page
    header("Location: viewBook.php?id=  $id");


} else {
    header("Location: newBook.php");
}

?>