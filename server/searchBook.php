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
            
            <div class="book-info">
                <label for="title">Title:</label>
                <input class= "short" type="text" name="title" id="title">
            </div>
            
            <div class="book-info">
                <label for="author">Author:</label>
                <input class= "short" type="text" name="author" id="author">
            </div> 

            <div class="book-info">
                <label for="genre">Genre:</label>
                <select class= "dropdown" name="genre" id="genre">
                    <option value="nonFiction" selected>Non-fiction</option>
                    <option value="childrens">Children's Book</option>
                    <option value="fantasy">Fantasy</option>
                    <option value="scienceFiction">Science-Fiction</option>
                    <option value="romance">Romance</option>
                    <option value="thriller">Thriller</option>
                    <option value="horror">Horror</option>
                    <option value="history">History</option>
                    <option value="biography">Biography</option>
                </select>
            </div> 
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