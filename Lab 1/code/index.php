<?php


// Task 1 "Доступ по ссылке"

echo "Task 1 <br /> <br />";

/* Imagine a lot of code here */ 
 $very_bad_unclear_name = "15 chicken wings"; // А в лекции Вы говорили что так не стоит обозначать переменные;)


// Write your code here:
$order = &$very_bad_unclear_name;
$order .= ' queue';


 // Don't change the line below
 echo "\nYour order is: $very_bad_unclear_name.";
 echo "<br /> <br />";
 

 // Task 2 "Числа"

echo "Task 2 <br /> <br />";

$temp1 = 7;
echo $temp1;
echo "<br />";

$temp2 = 4.3;
echo $temp2;
echo "<br />";

echo (10 + 2);
echo "<br />";

$last_month = 1187.23;
$this_month = 1089.98;
echo ($last_month - $this_month) . "<br /> <br />";