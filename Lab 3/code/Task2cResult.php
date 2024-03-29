<?php
session_start();
if(false === isset($_POST['name'], $_POST['age'], $_POST['salary'], $_POST['city'])) 
{
    header('Location: /Task2c.php');
    exit();
}
$user = [
    'name' => $_POST['name'],
    'age' => $_POST['age'],
    'salary' => $_POST['salary'],
    'city' => $_POST['city']
];

$_SESSION['user'] = $user;

echo '<ul>';
foreach ($user as $key => $value) 
{
    echo '<li>' . $key . ' - ' . $value . '</li>';
}
echo '</ul>';

?>