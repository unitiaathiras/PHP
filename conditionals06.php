<?php
//simple if

$age = 23;

if ($age ===23){
    echo "qweeeery";
}


//if else

if($age !=23){
    echo "hi";
}
else{
    echo "hey";
}

//difference between == and ===
$age = 20;
if($age == 20)
{
    echo "hh";#true
}

if($age == '20'){
    echo "jj";#true
}

$age === 20;
$age === '20';#types also checked
// if AND
if ($age <20 && $salary === 2000){
    echo "soething";
}

//if or

// ||

// ternary if



echo $age <25 ? 'young': 'Old';

// null coalescing operator
$name = 'aqq';
$myname = isset($name) ? $name : 'athira';

$myname = $name ? : 'athira';   #takes name if else athira


//switch

$userRole = 'admin';
switch($userRole){
    case 'admin':
        echo 'admin';
        break;
    case 'editor':
        echo 'editor';
        break;
    default:
    echo 'iam default';

}

?>