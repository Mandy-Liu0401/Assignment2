<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" media="all" href="styles.css" />
    <script src="scripts/script.js" defer></script>
</head>

<body>

    <?php include 'headerEm.php'; ?>

    <div class="content">

        <a class="back-link" href="index.php">&laquo; Back to book collection</a>

        <div class="new_record">

            <h2>Add new book to the collection</h2>

            <form name="form" action='create.php' method="POST" onsubmit="return validate()">

            <label for="title" class="book-info">Title</label>
            <input type="text" name="title" id="title" />
            <br>

            <label for="author" class="book-info">Author</label>
            <input type="text" name="author" id="author" /> 
            <br>
            
            <label for="genre" class="book-info">Select Genre</label>
                <select name="genre" id="genre">
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


                <label for="description" class="book-info">Enter Description</label>
                <input type="textarea" name="description" id="description" placeholder="Enter book description.">

                <label for="comment" class="book-info">Comments</label>
                <input type="textarea" name="comment" id="comment" placeholder="Enter your comments.">

                <div class = "button">
                    <input type="submit" value="Create new book">
                    <input type="reset" value="Reset">
                </div>
            </form>


        </div>

    </div>

    <?php include 'footerEm.php'; ?>