<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
    <script src="js/show.js" defer></script>
    <title>My Catalogue</title>
</head>

<body>
<?php include 'partials/header.php';
      require_once 'database.php';
?>

<div class="container">

    <h2>What would you like to see?</h2>

    <form action="selectProcess.php" method="get" onsubmit="">
    
    <div class="regItem">
        <label for="mediaSelect" class="aaa">Select Media Type</label>
        <select name="mediaSelect" id="mediaSelect">
            <option value="none">Select an option</option>
            <option value="movies">Movies</option>
            <option value="books">Books</option>
            <option value="games">Games</option>
        </select>
    </div>

        <div class="regItem">
            <label for="anyGenre" class="aaa">Select Genre</label>
            <select name="anyGenre" id="anyGenre">
                <option value="none" selected>Select an option</option>
                <option value="none">--Game genres--</option>
                    <option value="actionAdventure" class="mediaGenre" class="gameGenre">Action/Adventure</option>
                    <option value="sandbox" class="mediaGenre" class="gameGenre">Sandbox</option>
                    <option value="realTimeStrategy" class="mediaGenre" class="gameGenre">Real Time Strategy</option>
                    <option value="shooter" class="mediaGenre" class="gameGenre">Shooter</option>
                    <option value="mmo" class="mediaGenre" class="gameGenre">MMO</option>
                    <option value="rolePlayingGame" class="mediaGenre" class="gameGenre">Role Playing Game</option>
                    <option value="simSport" class="mediaGenre" class="gameGenre">Simulation/Sport</option>
                    <option value="puzzle" class="mediaGenre" class="gameGenre">Puzzle</option>
                    <option value="party" class="mediaGenre" class="gameGenre">Party</option>

                <option value="none">--Book genres--</option>
                    <option value="nonFiction" class="mediaGenre" class="bookCategory">Non-fiction</option>
                    <option value="childrens" class="mediaGenre" class="bookCategory">Children's Book</option>
                    <option value="fantasy" class="mediaGenre" class="bookCategory">Fantasy</option>
                    <option value="scienceFiction" class="mediaGenre" class="bookCategory">Science-Fiction</option>
                    <option value="romance" class="mediaGenre" class="bookCategory">Romance</option>
                    <option value="thriller" class="mediaGenre" class="bookCategory">Thriller</option>
                    <option value="horror" class="mediaGenre" class="bookCategory">Horror</option>
                    <option value="history" class="mediaGenre" class="bookCategory">History</option>
                    <option value="biography" class="mediaGenre" class="bookCategory">Biography</option>

                <option value="none">--Movie genres--</option>
                    <option value="action" class="mediaGenre" class="movieGenre">Action</option>
                    <option value="comedy" class="mediaGenre" class="movieGenre">Comedy</option>
                    <option value="drama" class="mediaGenre" class="movieGenre">Drama</option>
                    <option value="thriller" class="mediaGenre" class="movieGenre">Thriller</option>
                    <option value="horror" class="mediaGenre" class="movieGenre">Horror</option>
                    <option value="scienceFiction" class="mediaGenre" class="movieGenre">Science-Fiction</option>
                    <option value="fantasy" class="mediaGenre" class="movieGenre">Fantasy</option>
                    <option value="western" class="mediaGenre" class="movieGenre">Western</option>
                    <option value="romance" class="mediaGenre" class="movieGenre">Romance</option>  

                             
                    </select>
                
        </div>
        <button type="submit" class="submit">Submit Query</button>
    </form>

            <h2>Update item?</h2>
            <hr>

                    <form action="updateProcess.php" method="get" onsubmit="">
                    <div class="regItem">
                        <label for="mediaUpdate" class="aaa">Select Media Type</label>
                            <select name="mediaUpdate" id="mediaUpdate">
                            <option value="none">Select an option</option>
                            <option value="movies">Movies</option>
                            <option value="books">Books</option>
                            <option value="games">Games</option>
                            </select>
                    </div>

                    <div class="regItem">
                        <label for="idUpdate" class="aaa">Enter ID</label>
                        <input type="text" name="idUpdate" id="idUpdate" placeholder="Enter ID of item to update">
                    </div>

                    <div class="regItem">
                        <label for="nameUpdate" class="aaa">Enter new title</label>
                        <input type="text" name="nameUpdate" id="nameUpdate" placeholder="Enter new title to update">
                    </div>    

                    <button type="submit" class="submit">Update item</button>
                    </form>

    </div>

    


<?php include 'partials/footer.php';?>
    
</body>
</html>