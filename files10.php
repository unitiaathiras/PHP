<?php

//magic constants

#which change value based on value

echo __DIR__."<br>";
echo __FILE__."<br>";
echo __LINE__."<br>";


//create directory

mkdir('newdir');

//rename directory

rename('test','dhdh');

//delete directory

rmdir('tedr');

//read file and folders inside directorty

$files = scandir('./');

file_get_contents('lorem.txt');


//write content inside file

file_put_contents('filename',"content to write");
?>