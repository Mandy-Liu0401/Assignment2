<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <script src="scripts/script.js" defer></script>
    <script src="scripts/show.js" defer></script>
    <title>Booklogue</title>
</head>
<!---->


<body>
<?php include ("servers/headerEm.php") ?>

<?php
require_once('db_credentials.php');
require_once('database.php');

$db = db_connect();
//$page_title = 'Employee'; ?>


    <form action="userProcess.php" method="post" onsubmit="return validate()">

        <div class="container">
            <div class="headreg">
                <h2>Register here</h2>
            </div>

            <div class="regItem">
                <label for="email" class="aaa">E-mail</label>
                <input type="text" name="email" id="email" placeholder="Please enter your E-mail">
                <div class="error" id="emailError"><b>*</b>  Email address is required, with format *****@****.***</div>
            </div>

            <div class="regItem">
                <label for="" class="aaa">Username</label>
                <input type="text" name="username" id="username" placeholder="Please enter your Username">
                <div class="error" id="usernameError"><b>*</b>  Username is required, maximum 40 characters long, no special characters</div>
            </div>

            <div class="regItem">
                <label for="" class="aaa">Password</label>
                <input type="password" name="password" id="password" placeholder="Please enter your Password">
                <div class="error" id="passwordError"><b>*</b>  Password must be minimum: 6 characters long, 1 uppercase letter, 1 lowercase letter</div>
            </div>

            <div class="regItem">
                <label for="" class="aaa">Confirm Password</label>
                <input type="password" id="confirm" placeholder="Please re-enter your Password">
                <div class="error" id="confirmError"><b>*</b>  Password does not match</div>
            </div>

            <button type="submit" class="submit" id="register">Register</button>

        </div>


    </form>
    

    <?php include ('servers/footer.php');?>

</body>

</html>