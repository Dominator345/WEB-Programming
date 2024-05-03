<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="form">
        <form action="save.php" method="post">
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
        </table>
    </div>
</body>
</html>