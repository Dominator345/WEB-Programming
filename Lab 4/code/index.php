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
            <tbody>
                <?php
                require_once __DIR__."/vendor/autoload.php";
                
                $client = new \Google_Client();
                $client->setApplicationName('Google Sheets API');
                $client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
                $client->setAccessType('offline');
                $path = 'googleAPI.json';
                $client->setAuthConfig($path);
                
                $service = new \Google_Service_Sheets($client);
                $range = 'A1:D20';
                
                $spreadsheetId = "1_gX7ZgUKcoog_dYvWZ4o6XdeaUtWqdlhI_FMYhk_Cp4";
                $spreadsheet = $service->spreadsheets_values->get($spreadsheetId, $range);
                
                $values = $spreadsheet->getValues();
                
                if (!empty($values)) {
                    foreach ($values as $row) {
                        echo "<tr>";
                        echo "<td>{$row[0]}</td>";
                        echo "<td>{$row[1]}</td>";
                        echo "<td>{$row[2]}</td>";
                        echo "<td>{$row[3]}</td>";
                        echo "</tr>";
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>