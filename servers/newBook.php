<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" media="all" href="styles.css" />
</head>

<body>

    <?php include 'headerEm.php'; ?>

    <div id="content">

        <a class="back-link" href="index.php"> Back to book collection</a>

        <div class="new_record">

            <h1>Add new book to the collection</h1>

            <form action='create.php' method="POST">

                <dl>
                    <dt>Book Title</dt>
                    <dd><input type="text" name="title" /></dd>
                </dl>
                <dl>
                    <dt>Author</dt>
                    <dd><input type="text" name="author" /></dd>

                </dl>

                <label for="genre" class="aaa">Select Genre</label>
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


                <label for="description" class="aaa">Enter Description</label>
                <input type="textarea" name="description" id="description" placeholder="Enter book description.">

                <label for="comment" class="aaa">Comments</label>
                <input type="textarea" name="comment" id="comment" placeholder="Enter your comments.">

                <div class = button>
                    <input type="submit" value="Create new book">
                    <input type="reset" value="Reset">
                </div>
            </form>


        </div>

    </div>

    <?php include 'footerEm.php'; ?>