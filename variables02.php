<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //what is a variable
        /*It is a container that stores a value.In PHP variables dont have types.So PHP is a loosely typed language.When we declare variables we dont specify the type.The variable has dynamic types.It changes dynamically based on the value assigned to it.
        */

        //Variable Types

        /*INorder to declare variable we need to the $ symbol then the variable name
        variable must start with letter or _
        it can contain digits after that
        cannot contain special characters.
        */

        $name = 'nisha';
        $age = 23;

        /*
        integer
        string
        boolean
        array
        object
        resource
        null
        */
//Print variables
        $name = 'Athira';
        $age = 23;
        $isPass = true;
        $cgpa = 3.7;
        $salary = null;

        echo $name."<br>";
        echo $age."<br>";
        echo $isPass."<br>";
        echo $cgpa."<br>";
        echo $salary."<br>";

//print type of variables

echo gettype($name)."<br>";
echo gettype($age)."<br>";
echo gettype($isPass)."<br>";
echo gettype($cgpa)."<br>";
echo gettype($salary)."<br>";

//Print the whole variable
/* Using the var_dumb.It is useful with arrays , objects ..
It prints all the information*/

var_dump($name, $age, $isPass, $cgpa,$salary);
        

//variable checking functions

echo is_string($name)."<br>";
echo is_int($age)."<br>";
echo is_bool($isPass)."<br>";
echo is_double($cgpa)."<br>";
echo is_null($salary)."<br>";

//check if variable is defined
echo isset($name)."name set<br>";

//constants

/* to define a constant in PHP we have to use the define function */

define('PI',3.14);
echo PI;

//buit in constants in php

echo SORT_ASC;
echo PHP_INT_MAX;
    ?>
</body>
</html>