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


// Task 11 "Умножение и деление"

echo "Task 11 <br /> <br />";

$num_languages = 4;
$month = 11;
$days = $month * 16;
$days_per_language = $days / $num_languages;

echo $days_per_language;
echo "<br /> <br />";


// Task 12 "Степень"

echo "Task 12 <br />";

echo (8**2);
echo "<br /><br />";


// Task 13 "Операторы присвоения"

echo "Task 13 <br />";

$my_num = 4;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;
echo "<br /> <br />";


// Task 14 "Математические функции"

echo "Task 14 <br />";

$temp1 = 10;
$temp2 = 3;
echo ($temp1 % $temp2);
echo "<br />";

if (0 === ($temp1 % $temp2))
{
    echo 'Делится ' .($temp1 / $temp2);
}
else
{
    echo 'Делится с остатком ' . ($temp1 % $temp2);
}
echo "<br />";

$st = pow(2, 10);
echo $st . "<br />";
$root = sqrt(245);
echo $root . "<br />";
$array = [4, 2, 5, 19, 13, 0, 10];
$result = 0;
foreach ($array as $elem)
{
    $result += pow($elem,2);
}
$root = sqrt($result);
echo $root;

$temp = 379;
$root = sqrt($temp);
echo $root . "<br />";

echo round($root) . "<br />";
echo round($root, 1) . "<br />";
echo round($root, 2) . "<br />";

$temp = 587;
$root = sqrt($temp);
$array = 
[
    'floor' => floor($root),
    'ceil' => ceil($root)
];

echo $array['floor'] . " " . $array['ceil'] . "<br />";

$array = [4, -2, 5, 19, -130, 0, 10];
$min_num = min($array);
echo $min_num . "<br />";
$max_num = max($array);
echo $max_num . "<br />";

$rand_num = rand(1, 100);
echo $rand_num . "<br />";
$rand_arr = [];
for ($i=0; $i<10; $i++);
{
    $rand_arr[$i] = rand(1, 100);
}
print_r($rand_arr);
echo "<br />";

$temp1 = -3;
$temp2 = 7;
$abs_dif = abs($temp1 - $temp2);
echo $abs_dif . "<br />";
$array = [1, 2, -1, -2, 3, -3];
foreach($array as $elem)
{
    $array[$i] = abs($elem);
}
print_r($array);
echo "<br />";

$temp = 42;
$arr_div = "";
for ($i=1; $i<$temp; $i++){
    if (0 === ($temp  % $i))
    {
        $arr_div .= " ".$i;
    }
}
echo $arr_div;
echo "<br />";

$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$counter = 0;
foreach ($array as $elem){
    if (10 < $sum){
        break;
    }
    else{
        $sum += $elem;
        $counter += 1;
    }
}
echo $counter;
echo "<br /><br />";


// Task 15 "Функции"

echo "Task 15 <br />";

function printStringReturnNumber($str)
{
    echo $str . "<br />";
    return strlen($str);
}

$my_num = printStringReturnNumber("123456");
echo $my_num . "<br /><br />";


// Task 16 "Функции"

echo "Task 16 <br />";

function increaseEnthusiasm($str)
{
    return $str . "!";
}

echo increaseEnthusiasm("Hello, world") . "<br />";

function repeatThreeTimes($str)
{
    return $str . $str . $str;
}

echo repeatThreeTimes("abc d") . "<br />";

echo increaseEnthusiasm(repeatThreeTimes("Queue")) . "<br />";

function cut($str, $num = 10)
{
    return substr($str, 0, $num);
}

echo cut("abcdefg", 3) . "<br />";

function recursivePrint($array, $index = 0) {
    if ($index < count($array)) {
        echo $array[$index] . ' ';
        recursivePrint($array, $index + 1);
    }
}

echo recursivePrint([1,2,3,4,5]) . "<br />";

function sumNum($num)
{
    $count = 0;
    while ($num) {
        $count += $num % 10;
        $num = (int)($num / 10);
    }
    if (9 < $count)
    {
        return sumNum($count);
    }
    return $count;
}
echo sumNum(123457) . "<br /> <br />";


// Task 17 "Массивы"

echo "Task 17 <br />";

$array = [];
for ($i=0; $i<10;$i++)
{
    $temp = '';
    for ($j=-1;$j<$i;$j++)
    {
        $temp .= 'x';
    }
    $array[$i] = $temp;
}
print_r($array);
echo "<br />";

function arrayFill($temp, $count)
{
    for($i=0;$i<$count;$i++)
    {
        $array[$i] = $temp;
    }
    return $array;
}
print_r(arrayFill('r', 8));
echo "<br />";

$array = [[1, 2, 3], [4, 5], [6]];
$temp = 0;
foreach($array as $miniArray)
{
    foreach($miniArray as $elem)
    {
        $temp += $elem;
    }
}
echo $temp .= "<br />";

$temp = 1;
$array = [];
for($i=0;$i<3;$i++)
{
    $miniArray = [];
    for($j=0;$j<(3-$i);$j++)
    {
        $miniArray[$j] = $temp;
        $temp++;
    }
    $array[$i] = $miniArray;
}
print_r($array);
echo "<br />";

$array = [2,5,3,9];
$result = (($array[0] * $array[1]) + ($array[2] * $array[3]));
echo $result .= "<br />";

$user = 
[
    'name' => 'Dmitriy',
    'surname' => 'Rudenko',
    'patronymic' => 'Romanovich'
];
echo $user['name'] . " " . $user['surname'] . " " . $user['patronymic'] . "<br />";

$year = 
[
    'year' => '2024',
    'month' => '03',
    'day' => '12'
];
echo $year['year'] . "-" . $year['month'] . "-" . $year['day'] . "<br />"; 

$arr = ['a', 'b', 'c', 'd', 'e'];
$temp = 0;
foreach($arr as $elem)
{
    $temp++;
}
echo $temp . "<br />";
echo $arr[$temp - 1] . "<br />";
echo $arr[$temp - 2] . "<br /> <br />";


// Task 18 "Конструкция if else"

echo "Task 18 <br />";

function funcSum($temp1, $temp2)
{
    if (10 < ($temp1 + $temp2))
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}

function funcEqual($temp1, $temp2)
{
    if ($temp1 === $temp2)
    {
        return TRUE;
    }
    if ($temp1 !== $temp2)
    {
        return FALSE;
    }
}

$test = 1;
echo $test == 0 ? 'верно' : '';

$age = 58;
if ((10 > $age) or (99 < $age))
{
    echo "Число не входит в диапазон от 10 до 99 <br />";
}
else
{
    if (10 < (($age % 10) + floor($age / 10)))
    {
        echo "Сумма цифр однозначна";
    }
    else
    {
        echo "Сумма цифр двузначна <br />";
    }
}

$arr = [1, 2, 3];
$count = 0;
foreach($arr as $elem)
{
    $count++;
}
if(3 === $count)
{
    $sum = 0;
    foreach($arr as $elem)
    {
        $sum += $elem;
    }
    echo $sum . "<br /><br />";
}


//Task 19 "Циклы"

echo "Task 19 <br />";

for ($i=0;$i<21;$i++)
{
    for($j=0;$j<$i;$j++)
    {
        echo 'x';
    }
    echo "<br />";
}
echo "<br />";


// Task 20 "Комбинация функций"

echo "Task 20 <br />";

$array = [1, 2, 3, 4];
echo (array_sum($array) / count($array)) . "<br />";

$temp = 100;
echo ($temp * ($temp + 1)) / 2 . "<br />";

$array = [1, 4, 9, 16];
print_r(array_map("sqrt", $array));
echo "<br />";

$numbers = range(1, 26);
$keys = range('a', 'z');
$array = array_combine($keys, $numbers);
print_r($array);
echo "<br />";

$numbers = '1234567890';
$temp = str_split($numbers, 2);
$sum = array_sum($temp);
echo $sum;