<?php

// function

function hello() {
    echo "sd";
}

//function with argument

function hi($name) {
    echo $name;
    return $name;
}
echo hi('ammu');


//create sum of two functions

function sum($a,$b) {
    return $a + $b;
}

echo sum(23,2);


//create function to sum all using ...$nums

function sums(...$nums) {
    var_dump($nums);

}

sums(1,3,5,6,6,6);


function add(...$nums) {
    $sum = 0;
    foreach ($nums as $n) {
        $sum += $n;
    }
}

echo add(1,67,5);

//arrow functions


?>