<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title>Input Movies</title>
</head>

<body>

<?php include 'partials/header.php';?>

<form action="movieProcess.php" method="post" onsubmit="">
        <div class="container">
            <div class="headreg">
                <h2>Enter Movie Information</h2>
            </div>

            <div class="regItem">
                <label for="movieTitle" class="aaa">Enter Title</label>
                <input type="text" name="movieTitle" id="movieTitle" placeholder="Enter movie title">
            </div>

            <div class="regItem">
                <label for="movieGenre" class="aaa">Select Genre</label>
                <select name="movieGenre" id="movieGenre">
                    <option value="action" selected>Action</option>
                    <option value="comedy">Comedy</option>
                    <option value="drama">Drama</option>
                    <option value="thriller">Thriller</option>
                    <option value="horror">Horror</option>
                    <option value="scienceFiction">Science-Fiction</option>
                    <option value="fantasy">Fantasy</option>
                    <option value="western">Western</option>
                    <option value="romance">Romance</option>
                </select>
            </div>

            <div class="regItem">
                <label for="movieRating" class="aaa">Select Rating</label>
                <select name="movieRating" id="movieRating">
                    <option value="general" selected>G - General audience</option>
                    <option value="parentalGuidance">PG - Parental Guidance Suggested</option>
                    <option value="parentalGuidance13">PG13 - Parental Guidance Strongly Advised</option>
                    <option value="restriced">R - Restriced</option>
                </select>
            </div>

            <div class="regItem">
                <label for="movieDescribe" class="aaa">Enter Description</label>
                <input type="textarea" name="movieDescribe" id="movieDescribe" placeholder="Enter movie description">
            </div>

            <div class="regItem">
                <label for="movieTime" class="aaa">Enter Run-time</label>
                <input type="text" name="movieTime" id="movieTime" placeholder="Enter movie run-time">
            </div>


            <button type="submit" class="submit">Submit</button>
        </div>
    </form>
        <?php include 'partials/footer.php';?>
</body>



</html>