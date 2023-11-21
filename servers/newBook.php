<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" media="all" href="../styles.css" />
    <script type="text/javascript" src="../scripts/script.js" defer></script>
</head>

<body>

    <?php include 'headerEm.php'; ?>

    <div id="content">

        <a class="back-link" href="index.php">&laquo; Back to book collection</a>

        <div class="new_record">

            <h2>Add new book to the collection</h2>

            <form name="form" action='create.php' method="POST" onsubmit="return validate()">

            <div class="book-info">
            <label for="title" >Title</label>
            <input type="text" name="title" id="title" placeholder="Enter title here."/>
            </div>
             
            <div class="book-info">
            <label for="author" >Author</label>
            <input type="text" name="author" id="author" placeholder="Enter author name."/> 
            </div>

            <div class="book-info">
            <label for="genre" >Select Genre</label>
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
               </div>

               <div class="book-info">
                <label for="description" >Enter Description</label>
                <input type="textarea" name="description" id="description" placeholder="Enter book description.">
               </div>

                <div class="book-info">
                   <label for="comment" >Comments</label>
                   <input type="textarea" name="comment" id="comment" placeholder="Enter your comments.">
                </div>

                <div class = "button">
                    <input type="submit" id="submit" value="Create new book">
                    <input type="reset" id="reset" value="Reset">
                </div>
            </form>


        </div>

    </div>

    <?php include 'footerEm.php'; ?>