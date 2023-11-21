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

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['gameTitle'];
    $genre = $_POST['gameGenre'];
    $rating = $_POST['gameRating'];
    $description = $_POST['gameDescribe'];
    $publisher = $_POST['gamePublisher'];
    $sql = "INSERT INTO games (title, genre, rating, description, publisher) 
    VALUES ('$title', '$genre', '$rating', '$description', '$publisher')";
    mysqli_query($data, $sql);
 }
?>

    
    <h1>Game Information Saved</h1>
    <hr>
    <div class='container'>
        <p><b>Title:</b> <?php echo $_POST['gameTitle']; ?></p> 
        <p><b>Genre:</b> <?php echo $_POST['gameGenre']; ?></p>
        <p><b>Rating:</b> <?php echo $_POST['gameRating']; ?></p>
        <p><b>Description:</b> <?php echo $_POST['gameDescribe']; ?></p> 
        <p><b>Publisher:</b> <?php echo $_POST['gamePublisher']; ?></p> 
    </div>

    <?php include 'partials/footer.php';?> 
</body>
</html>