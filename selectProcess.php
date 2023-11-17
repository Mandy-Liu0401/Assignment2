<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles/styles.css" />
    <title>Medialogue</title>
</head>
<body>
<?php include 'partials/header.php';
require_once 'database.php'; ?>


<?php    
$data = data_connect();


    $table = $_GET['mediaSelect'];
    $genre = $_GET['anyGenre'];

    $sql = "SELECT * FROM $table WHERE genre = '$genre' ";

    $result_set = mysqli_query($data, $sql);

    $result = mysqli_fetch_assoc($result_set);

?>

    
    <h1>Your catalogue</h1>
    <hr>
    <div class="container">
    <?php foreach($result as $val) {
    echo "<p>", $val, "</p>";  }?>

        <h2>Delete item?</h2>
            <hr>

                    <form action="deleteProcess.php" method="get" onsubmit="">
                    <div class="regItem">
                        <label for="mediaDelete" class="aaa">Select Media Type</label>
                            <select name="mediaDelete" id="mediaDelete">
                            <option value="none">Select an option</option>
                            <option value="movies">Movies</option>
                            <option value="books">Books</option>
                            <option value="games">Games</option>
                            </select>
                    </div>

                    <div class="regItem">
                        <label for="idDelete" class="aaa">Enter ID</label>
                        <input type="text" name="idDelete" id="idDelete" placeholder="Enter ID of item to delete">
                    </div>

         

                    <button type="submit" class="submit">Delete item</button>
                    </form>
    </div>
    <?php include 'partials/footer.php';?> 
</body>
</html>