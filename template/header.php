<?php
session_start();
if($_SESSION['Active'] == false) {
    header("location:login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/stylesheet.css">
    <title>PHP Login exercise - Home page</title>
</head>
<body>
    <div class="nav">
        <a href="index.php">Home</a>
        <a href="about.php">About</a>
        <a href="contact.php">Contact</a>
    </div>
    <div class="header">
        <h1>PHP Login exercise - Home page</h1>
    </div>
