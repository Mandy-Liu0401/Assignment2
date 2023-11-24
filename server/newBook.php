<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Mengying Liu and Wenxin Li">
    <meta name="description" content="newBook.php file for Assigbment 2">
    <meta name="keywords" content="book catelogue">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../styles.css">
    <script src="../scripts/validate.js" defer></script>
    <title>Add New Book</title>
</head>

<body>

    <?php include 'headerEm.php'; ?>

    <div class="content">

        <a class="back-link" href="index.php">&laquo; Back to My Book Collection</a>

        <h2>Add New Book</h2>

        <div class="new_record">
            <form id="myForm" name="form" action='create.php' method="POST" enctype="multipart/form-data"
                onsubmit="return validate();">

                <div class="book-info">
                    <label for="title">Title</label>
                    <input class="short" type="text" name="title" id="title" placeholder="Mandatory info"
                        style="margin-top: 15px;" />
                </div>

                <div class="book-info">
                    <label for="author">Author</label>
                    <input class="short" type="text" name="author" id="author" placeholder="Mandatory info"
                        style="margin-top: 15px;" />
                </div>

                <div class="book-info">
                    <label for="genre">Select Genre</label>
                    <select class="dropdown" name="genre" id="genre">
                        <option value="" disabled selected>Please select genre</option>
                        <option value="nonFiction">Non-fiction</option>
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
                    <label for="description">Enter Description</label>
                    <textarea class="tall" name="description" id="description" placeholder="Optional"></textarea>
                </div>
                <br>
                <div class="book-info">
                    <label for="comment">Comments</label>
                    <textarea class="tall" name="comment" id="comment" placeholder="Optional"></textarea>
                </div>
                <br>
                <div class="book-info">
                    <label for="imagePath">Upload a Cover</label>
                    <input id="imagePath" type="file" name="imagePath" style="margin-top: 15px;" />
                </div>

                <div class="button">
                    <input id="new" type="submit" value="Create new book">
                    <button id="reset" type="reset">Reset</button>
                </div>
            </form>
        </div>
    </div>

    <?php include 'footerEm.php'; ?>
</body>

</html>