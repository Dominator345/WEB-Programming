<?php

// Part a.

$str = 'ahb acb aeb aeeb adcb axeb';
$wantedString = '/a..b/u';
$matches = [];
preg_match_all($wantedString, $str, $matches);
foreach($matches[0] as $match)
{
    echo $match . '<br />';
}
echo '<br />';
