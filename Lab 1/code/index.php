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