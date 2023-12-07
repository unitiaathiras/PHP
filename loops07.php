<?php

//while

// while(true)
// {
//     #infinite loops
// }

$counter = 0;

while ($counter < 10){
    echo $counter.'<br>';
    $counter++;
}

//do while

do{
    echo $counter;
    $counter++;
}
while($counter<10);

//for

for ($i=0;$i<10; $i++) {
    echo $i.'<br>';
}

//foreach

$fruits = [1,2,4,4,5,6,8];

foreach ($fruits as $f) {
    echo $f;
}

foreach ($fruits as $i => $f) {
    echo $f;
}

//iterate over associative array

$person = [
    'name' => 'athira',
    'surname' => 'Shibu',
    'age' => 23,
    'hobbies' => ['reading', 'browsing', 'travelling']
];

foreach ($person as $key => $value) {
    if (is_array($value)) {
        echo $key.' '.implode(",", $value);
    }
    echo $key.' '.$value;
}
?>