<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
<?php
require_once('db_credentials.php');
require_once('database.php');
include "headerEm.php";
$db = db_connect();


?>

<div class="content">
    <h1>Search Books</h1>
    
    <form action="searchResults.php" method="get">
    <label for="title">Title:</label>
    <input type="text" name="title" id="title">

    <label for="author">Author:</label>
    <input type="text" name="author" id="author">

    <label for="genre">Genre:</label>
    <input type="text" name="genre" id="genre">

    <input type="submit" value="Search">
</form>


</div>
<?php include('footerEM.php'); ?>
</body>

</html>