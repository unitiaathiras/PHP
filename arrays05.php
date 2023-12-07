 <?php

    //create array

//     $fruits = [];
//     $fruits1 = array();
//     $fruits2 = ["mango","apple"];

//     //print the whole array

//     var_dump($fruits2);

//     //get element by index

//     echo $fruits2[0];
// //set element by index

// $fruits2[1] = 'cherry';

// var_dump($fruits2);

// //check if array has element at index

// echo "checks".isset($fruits2[1])."hello";

// //append element

// $fruits2[]= 'banana';
// var_dump($fruits2);

// //print count of arry

// echo count($fruits2);

// //add element at the end of the array

// array_push($fruits2,'jackfruit');
// var_dump($fruits2);

// //remove element from the end of the array

// array_pop($fruits);

// //add element at the beginning of the array
// array_unshift($fruits2,'magenta');
// var_dump($fruits2);

// //remove element from the beginning

// array_shift($fruits2);
// var_dump($fruits2);

// //split the string into an array

// $string = "apple,banana,cherry";
// var_dump(explode(',',$string));

// //combine array elements into string

// echo implode('*',$fruits2);

// var_dump($fruits2);

// //check if element exist in the array
// var_dump(in_array('apple',$fruits2));

// //search element index in the array

// var_dump(array_search('qqq',$fruits));

// //merge two arrays

// $vegitables = ['potato', 'carrot'];

// var_dump(array_merge($vegitables,$fruits2));

// var_dump([...$fruits2, ...$vegitables]);

//sorting arrays

// $ss = sort($vegitables);
// var_dump($ss);

//rsort -sorts in reverse order


//associative arrays

#associative array are key value pairs 
//create an associative array

$person = [
    'name' => 'athira',
    'surname' => 'Shibu',
    'age' => 23,
    'hobbies' => ['reading', 'browsing', 'travelling']
];

var_dump($person);
echo $person['name'];

//set element by key

$person['address'] = 'attappadi';
var_dump($person);

//null coalescing assignment operator

// if (!isset($person['phno'])){
//     $person['phno'] = 9048171743;
// }

// $person['phno'] = $person['phno'] ??= '9048171743';

// var_dump($person);

$person['phno'] ??= '9048171743';

var_dump($person);

//check if array has a specific key



//print the keys of the array

var_dump(array_keys($person));

//print values of the array

var_dump(array_values($person));

//sorting associative array by value

ksort($person); #sort on keys

asort($person); #sort on values

//two dimentional arrays

$todos = [
    ['title' => 'Todo Title 1', 'completed' => True],
    ['title' => 'Todo Title 2', 'completed' => false]
];

var_dump($todos);
?>