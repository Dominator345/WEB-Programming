<?php

session_start();

// Task 1 Part a.

echo 'Task 1 (a)' . '<br />';

$str = 'ahb acb aeb aeeb adcb axeb';
$wantedString = '/a..b/u';
$matches = [];
preg_match_all($wantedString, $str, $matches);
echo 'Result: ' . '<br />';
foreach($matches[0] as $match)
{
    echo $match . '<br />';
}
echo '<br />';


// Task 1 Part b.

echo 'Task 2 (b)' . '<br />';

function replaceCube($match) : string
{
    return $match[0] ** 3;
}

$str = 'a1b2c3';
$wantedString = '/[0-9]/';
$result = preg_replace_callback($wantedString, 'replaceCube', $str);
echo 'Result: ' . '<br />' . $result . '<br /><br />';

echo 'Task 2 (a)' . '<br />';

// Task 2 Part a
?>


<!DOCTYPE html>
<head>
    <title>Task 2 Part a</title>
</head>
<body>
    <form method = 'Post'>
        <br>
        <textarea name='inputText' rows='7' cols='70'></textarea>
        <br><br>
        <button type='submit' name='submit'>Подсчитать</button>
    </form>
</body>

<?php
    if ('POST' === $_SERVER['REQUEST_METHOD']) {
        if(isset($_POST['submit'])){
            $text = $_POST['inputText'];
            
            $wordCount = str_word_count($text);
            $charCount = strlen($text);

            echo 'Количество слов = ' . $wordCount . '<br />';
            echo 'Количество символов = ' . $charCount . '<br /';
        }
    }
    echo '<br />' . '<br />';
?>

<html lang="en">
<body>
    <form method='post'>
        
    <a href="Task2b.php">Task 2.</a>
    </form>
</body>