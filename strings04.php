<?php

//create simple string

$string = 'Hello';
$name = 'Athira';
echo "$string$name";
echo "Hello $name";

//string concatenation

echo 'Hello'.'World';
echo 'hello'.$name;


//string functioons

/*

strlen($string)
trim($string)
ltrim($string)
rtrim($string); -removes white spaces on right side
str_word_count($string);
strrev($string);
strtoupper($string);
strtolower($string);
ucfirst($string);
lcfirst($string);
ucwords($string);
strpos($string,'hello');
stripos($string,"ho");
substr($string,8);
substr($string,8,10);
str_replace('hello','hi',$string);
str_ireplace('hello','hi',$string);

*/

//multiline text and line breaks

$longText = "hello this is good
            this is good
            good";
echo nl2br($longText);

//multiline text and reserve html tags
echo nl2br(htmlentities($longText));
// html_entity_decode()
?>