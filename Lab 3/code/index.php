<?php

// Part a.

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


// Part b.

echo 'Task 2 (b)' . '<br />';

function replaceCube($match) : string
{
    return $match[0] ** 3;
}

$str = 'a1b2c3';
$wantedString = '/[0-9]/';
$result = preg_replace_callback($wantedString, 'replaceCube', $str);
echo 'Result: ' . '<br />' . $result;