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
    $title = $_POST['movieTitle'];
    $genre = $_POST['movieGenre'];
    $rating = $_POST['movieRating'];
    $description = $_POST['movieDescribe'];
    $runtime = $_POST['movieTime'];
    $sql = "INSERT INTO movies (title, genre, rating, description, runtime) 
    VALUES ('$title', '$genre', '$rating', '$description', '$runtime')";
    mysqli_query($data, $sql);
 }
?>

    
    <h1>Movie Information Saved</h1>
    <hr>
    <div class='container'>
        <p><b>Title:</b> <?php echo $_POST['movieTitle']; ?></p> 
        <p><b>Genre:</b> <?php echo $_POST['movieGenre']; ?></p>
        <p><b>Rating:</b> <?php echo $_POST['movieRating']; ?></p>
        <p><b>Description:</b> <?php echo $_POST['movieDescribe']; ?></p> 
        <p><b>Run-time:</b> <?php echo $_POST['movieTime']; ?></p> 
    </div>

    <?php include 'partials/footer.php';?> 
</body>
</html>