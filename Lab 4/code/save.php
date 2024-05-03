<?php
require_once __DIR__."/vendor/autoload.php";

if (false === isset($_POST['email'], $_POST['category'], $_POST['title'], $_POST['description']))
{
    redirectToHome();
}
$email = $_POST['email'];
$category = $_POST['category'];
$title = $_POST['title'];
$description = $_POST['description'];

$client = new Google_Client();
$client->setApplicationName("LabaFour");
$client->setAuthConfig('googleAPI.json');
$client->addScope(Google_Service_Sheets::SPREADSHEETS);
$client->setAccessType('offline');

$service = new Google_Service_Sheets($client);

$spreadsheetId = "1_gX7ZgUKcoog_dYvWZ4o6XdeaUtWqdlhI_FMYhk_Cp4";

$values = [[$category, $email, $title, $description]];

$range = "A1:D20";
$body = new Google_Service_Sheets_ValueRange(["values" => $values]);
$param = ["valueInputOption" => "RAW"];

$result = $service->spreadsheets_values->append($spreadsheetId, $range, $body, $param);

redirectToHome();

function redirectToHome() : void
{
    header("location: /index.php");
    exit();
}
?>