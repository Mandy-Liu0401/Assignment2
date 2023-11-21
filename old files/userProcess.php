
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
    $email = $_POST['email'];
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $sql = "INSERT INTO users (username, email, password) VALUES ('$user', '$email', '$pass')";
    mysqli_query($data, $sql);
 }
?>

    
    <h1>Login Information Saved</h1>
    <hr>
    <div class='container'>
        <p><b>Welcome:</b> <?php echo $_POST['username']; ?>!</p> 
        <p><b>E-mail:</b> <?php echo $_POST['email'];; ?></p>

    </div>

    <?php include 'partials/footer.php';?> 
</body>
</html>
