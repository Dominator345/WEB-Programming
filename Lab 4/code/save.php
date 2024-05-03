<?php
if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description']))
{
    redirectToHome();
}

$category = $_POST['category'];
$description = $_POST['description'];
$title = $_POST['title'];
$email = $_POST['email'];



redirectToHome();

function redirectToHome() : void
{
    header("location: /Task3.php");
    exit();
}
?>