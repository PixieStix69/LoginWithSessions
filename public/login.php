<?php
require_once('../config.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <link rel="stylesheet" type="text/css" href="../css/signin.css">
    <title>Sign in</title>
</head>
<body>
    <h1>Title</h1>
    <p>This is where we will put the logout button</p>
    <form method="post">
        <input type="text" name="Username" required>
        <input type="password" name="Password" required>
        <input type="submit" name="Submit" value="Log in">
    </form>
    <?php
    if(isset($_POST['Submit'])) {
        if(($_POST['Username'] == $username) && ($_POST['Password'] == $password)) {
            $_SESSION['Username'] = $username;
            $_SESSION['Active'] = true;
            header("location:index.php");
            exit;
        } else {
            echo 'Incorrect Username or Password';
        }
    }
    ?>
</body>
</html>
