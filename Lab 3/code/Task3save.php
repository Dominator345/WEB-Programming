<?php
if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description']))
{
    redirectToHome();
}

$category = $_POST['category'];
$description = $_POST['description'];
$title = $_POST['title'];
$email = $_POST['email'];

$filePath = "categories/{$category}/{$email}";
mkdir($filePath);
$filePath .= "/{$title}.txt";

if (false === file_put_contents($filePath, $description))
{
    throw new Exception('oh blin, here we go again...');
}

redirectToHome();

function redirectToHome() : void
{
    header("location: /Task3.php");
    exit();
}
?>