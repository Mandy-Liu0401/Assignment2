<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styles.css" />
</head>

<body>
<?php
include "headerEm.php";
?>

<div class="container">
    <h2>Filter Books</h2>
    
    <form action="filterDisplay.php" method="get">
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