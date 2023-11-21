<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="../styles.css" />
</head>

<body>
<?php
include "headerEm.php";
?>

<div class="content">
    <a class="back-link" href="index.php">&laquo; Back to book collection</a>
    <h2>Search Books</h2>
    <div class="new_record">
        <form action="searchResults.php" method="get">
            <label for="title">Title:</label>
            <input type="text" name="title" id="title">

            <label for="author">Author:</label>
            <input type="text" name="author" id="author">

            <label for="genre">Genre:</label>
            <input type="text" name="genre" id="genre">
            <div class = "button">
                <input type="submit" value="Search">
                <input type="reset" value="Reset">
            </div>
        </form>
    </div>    


</div>
<?php include('footerEM.php'); ?>
</body>

</html>