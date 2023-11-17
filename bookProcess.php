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
    $title = $_POST['bookTitle'];
    $authour = $_POST['bookAuth'];
    $category = $_POST['bookCategory'];
    $description = $_POST['bookDescribe'];
    $pages = $_POST['bookPages'];
    $sql = "INSERT INTO books (title, authour, genre, description, pages) 
    VALUES ('$title', '$author', '$category', '$description', '$pages')";
    mysqli_query($data, $sql);
 }
?>

    
    <h1>Book Information Saved</h1>
    <hr>
    <div class='container'>
        <p><b>Title:</b> <?php echo $_POST['bookTitle']; ?></p> 
        <p><b>Authour:</b> <?php echo $_POST['bookAuth']; ?></p>
        <p><b>Category:</b> <?php echo $_POST['bookCategory']; ?></p>
        <p><b>Description:</b> <?php echo $_POST['bookDescribe']; ?></p> 
        <p><b>Page-count:</b> <?php echo $_POST['bookPages']; ?></p> 
    </div>

    <?php include 'partials/footer.php';?> 
</body>
</html>
