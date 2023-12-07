<?php

    //declaring numbers

    $a = 10;
    $b = 7;
    $c = 1;

//arithmatic operations

echo ($a + $b) * $c;

echo $a + $b."<br>";
echo $a - $b."<br>";
echo $a * $b."<br>";
echo $a / $b."<br>";
echo $a % $b."<br>";

//assignment with math operators
$a += $b;

//increment and decrement operator
$a++;
++$a;
--$a;
$a--;
$num1 = 123.56;
//number checking functions
is_float($num1);
is_double($num1);
is_numeric('123'); //true
is_numeric('12we45');//false

//type conversion

$number = '123456';
$number = (float)$number;
var_dump($number);

//other method

$number = '34';
$number = floatval($number);
var_dump($number);

//number functions

echo abs(-2);
echo pow(2, 3);
echo sqrt(16);
echo max(2,1,3);
echo min(21,3,2);
echo round(2.3);
echo round(2.7);
echo floor(2.6);
echo ceil(2.4);

//formatting numbers

$number = 1234524457135.34676768;
echo number_format($number,3,',',' ');
?>