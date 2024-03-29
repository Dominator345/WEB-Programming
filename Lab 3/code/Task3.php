<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="form">
        <form action="Task3save.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" required>
            <label for="category">Category</label>
            <select name="category" required>
            <?php
                $categoriesList = array_diff(scandir('./Categories'), [".", ".."]);
                foreach ($categoriesList as $category) 
                {
                    echo "<option value=\"$category\">$category</option>";
                }
                ?>
            </select>
            <label for="title">Title</label>
            <input type="text" name="title" required>
            <label for="description">Description</label>
            <textarea rows="4" name="description"></textarea>
            <input type="submit" value="save">
        </form>
    </div>
    <div id="table">
        <table>
            <thead>
                <th>Category</th>
                <th>Email</th>
                <th>Title</th>
                <th>Description</th>
            </thead>
            <tbody>
            <?php
            for($i = 2; $i < (count($categoriesList) + 2); $i++)
            {
                $category=$categoriesList[$i];
                $userList = array_diff(scandir("./Categories/{$category}"), [".", ".."]);
                for($j = 2; $j < (count($userList) + 2); $j++)
                {
                    $user = $userList[$j];
                    $titleList = array_diff(scandir("./Categories/{$category}/{$user}"), [".", ".."]);
                    for($k = 2; $k < (count($titleList) + 2); $k++)
                    {
                        $title = $titleList[$k];
                        $description = file_get_contents("./categories/{$category}/{$user}/{$title}");
                        


                        echo "<tr>";
                        echo "<td>$category</td>";
                        echo "<td>$user</td>";
                        echo "<td>$title</td>";
                        echo "<td>$description</td>";
                        echo "</tr>";
                    }
                }
            }
            ?>
                <tr>
                    <td>Videocard</td>
                    <td>1@1.ru</td>
                    <td>gtx4090</td>
                    <td>2 ядра 3 гига игровая видеокарта</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>