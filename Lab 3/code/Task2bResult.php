<?php
session_start();
if(false === isset($_POST['surname'], $_POST['name'], $_POST['age'])) {
    header('Location: /Task2a.php');
    exit();
}
$name = $_POST['name'];
$surname = $_POST['surname'];
$age = $_POST['age'];
echo 'Имя: ' . $name . '<br /> Фамилия: ' . $surname . '<br /> Возраст: ' . $age . '<br />';
?>
<!DOCTYPE html>
<p>
  <a href="Task2c.php">Task 2 Part c</a>.
</p>