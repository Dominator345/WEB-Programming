<?php
$db_host = 'db';
$db_user = 'root';
$db_password = 'helloworld';
$db_name = 'web';

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_name);

if (mysqli_connect_errno()) {
printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
exit;
}

// Обработка формы
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
$category = $mysqli->real_escape_string($_POST['category']);
$title = $mysqli->real_escape_string($_POST['title']);
$description = $mysqli->real_escape_string($_POST['description']);
$email = $mysqli->real_escape_string($_POST['email']);


$mysqli->query("INSERT INTO ad (category, title, description, email) VALUES ('$category', '$title', '$description', '$email')");
}

$mas = [];
if ($result = $mysqli->query('SELECT * FROM ad ORDER BY created DESC')) {
while ($row = $result->fetch_assoc()) {
$mas[] = $row;
}
$result->close();
}
$mysqli->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertisement Form</title>
</head>
<body>
<form action="" method="post">
    <label for="category">Category:</label><br>
    <select id="category" name="category">
        <option value="Cars">Cars</option>
        <option value="Bicycles">Bicycles</option>
        <option value="Samokats">Samokats</option>
        <option value="Sheeps">Sheeps</option>
        <option value="Aboba">Aboba</option>
    </select><br><br>

    <label for="title">Title:</label><br>
    <input type="text" id="title" name="title" required><br><br>

    <label for="description">Description:</label><br>
    <textarea id="description" name="description" required></textarea><br><br>

    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>

<h2>Список объявлений</h2>
<table border="1">
    <tr>
        <th>Категория</th>
        <th>Название</th>
        <th>Описание</th>
        <th>Почта</th>
    </tr>
    <?php foreach ($mas as $ad):
        echo "<tr>";
        echo "<td>" . ($ad['category']) . "</td>";
        echo "<td>" . ($ad['title']) . "</td>";
        echo "<td>" . ($ad['description']) . "</td>";
        echo "<td>" . ($ad['email']) . "</td>";
        echo "</tr>";
    endforeach; ?>
</table>
</body>
</html>