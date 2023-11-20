<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styles.css">
    <title>Input Games</title>
</head>



<body>
<?php include 'partials/header.php';?>
<form action="gameProcess.php" method="post">
        <div class="container">
            <div class="headreg">
                <h2>Enter Game Information</h2>
            </div>

            <div class="regItem">
                <label for="gameTitle" class="aaa">Enter Title</label>
                <input type="text" name="gameTitle" id="gameTitle" placeholder="Enter game title">
            </div>

            <div class="regItem">
                <label for="gameGenre" class="aaa">Select Genre</label>
                <select name="gameGenre" id="gameGenre">
                    <option value="actionAdventure" selected>Action/Adventure</option>
                    <option value="sandbox">Sandbox</option>
                    <option value="realTimeStrategy">Real Time Strategy</option>
                    <option value="shooter">Shooter</option>
                    <option value="mmo">MMO</option>
                    <option value="rolePlayingGame">Role Playing Game</option>
                    <option value="simSport">Simulation/Sport</option>
                    <option value="puzzle">Puzzle</option>
                    <option value="party">Party</option>
                </select>
            </div>

            <div class="regItem">
                <label for="gameRating" class="aaa">Select Rating</label>
                <select name="gameRating" id="gameRating">
                    <option value="everyone" selected>E - Everyone</option>
                    <option value="everyplus10">E+10 - Everyone 10 & up</option>
                    <option value="teen">T - Teen</option>
                    <option value="mature">M - Mature</option>
                    <option value="ratingPending">Rating Pending</option>
                </select>
            </div>

            <div class="regItem">
                <label for="gameDescribe" class="aaa">Enter Description</label>
                <input type="textarea" name="gameDescribe" id="gameDescribe" placeholder="Enter game description">
            </div>

            <div class="regItem">
                <label for="gamePublisher" class="aaa">Enter Publisher</label>
                <input type="text" name="gamePublisher" id="gamePublisher" placeholder="Enter game publisher">
            </div>


            <button type="submit" class="submit">Submit</button>
        </div>
    </form>

        <?php include 'partials/footer.php';?>

</body>



</html>