<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title>Input Books</title>
</head>

<body>

<?php include 'partials/header.php';?>


    <form action="bookProcess.php" method="post" onsubmit="">
        <div class="container">
            <div class="headreg">
                <h2>Enter Book Information</h2>
            </div>

            <div class="regItem">
                <label for="bookTitle" class="aaa">Enter Title</label>
                <input type="text" name="bookTitle" id="bookTitle" placeholder="Enter book title">
            </div>

            <div class="regItem">
                <label for="bookAuth" class="aaa">Enter Authour</label>
                <input type="text" name="bookAuth" id="bookAuth" placeholder="Enter book authour">
            </div>

            <div class="regItem">
                <label for="bookCategory" class="aaa">Select Category</label>
                <select name="bookCategory" id="bookCategory">
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

            <div class="regItem">
                <label for="bookDescribe" class="aaa">Enter Description</label>
                <input type="textarea" name="bookDescribe" id="bookDescribe" placeholder="Enter book description">
            </div>

            <div class="regItem">
                <label for="bookPages" class="aaa">Enter Page-count</label>
                <input type="text" name="bookPages" id="bookPages" placeholder="Enter page count">
            </div>
            
            <button type="submit" class="submit">Submit</button>
        </div>
    </form>

    <?php include 'partials/footer.php';?>

</body>



</html>