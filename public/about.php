<?php require_once('../template/header.php'); ?>

<h1>Status: You are logged in <?php echo $_SESSION['Username']; ?></h1>
<p>This is where we will put the logout button</p>
<form action="logout.php" method="post" name="Logout_Form">
    <input type="submit" name="Submit" value="Log out">
</form>

<h2>About page</h2>
<div class="content">
    <p>Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here. Some content goes here.</p>
</div>

<p>Web dev serverside</p>
