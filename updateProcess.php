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


    $table = $_GET['mediaUpdate'];
    $id = $_GET['idUpdate'];
    $title = $_GET['nameUpdate'];

    $sql = "UPDATE $table SET title = '$title' WHERE id = '$id' ";

    $result = mysqli_query($data, $sql);
?>

    
    <h1>Your catalogue</h1>
    <hr>
    <div class="container">

        <h2>Item updated</h2>
            <hr>

    </div>
    <?php include 'partials/footer.php';?> 
</body>
</html>