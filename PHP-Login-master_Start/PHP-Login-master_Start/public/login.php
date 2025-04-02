<?php 
require_once('config.php'); 

if(isset($_POST['Submit']))
{
    //debugging test pls work
    echo "Form submitted!<br>";
    echo "Username submitted: " . $_POST['Username'] . "<br>";
    echo "Password submitted: " . $_POST['Password'] . "<br>";
    echo "Expected Username: " . $Username . "<br>";
    echo "Expected Password: " . $Password . "<br>";

    if( ($_POST['Username'] == $Username) && ($_POST['Password'] == $Password) )
    {
        echo '<div style="color: green;">Success</div>';//adding colours to make it easier to see 
    }
    else
    {
        echo '<div style="color: red;">Incorrect Username or Password</div>';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="../css/signin.css">
    <title>Sign in</title>
</head>

<body>
<div class="container">
    <form action="login.php" method="post" name="Login_Form" class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputUsername">Username</label>
        <input name="Username" type="text" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="button" type="submit">Sign in</button>
    </form>
</div>
</body>
</html>