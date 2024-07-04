<?php


//ARRAY DECLARATION AND ADDING
$nums = [6, 10, 16, 20];

//ANOTHER WAY OF ADDING INTO A ARRAY
$nums[] = 8;

//BORING WAY TO SHOW ARRAY
// echo $nums[0] . "<br>";
// echo $nums[1] . "<br>";
// echo $nums[2] . "<br>";
// echo $nums[3] . "<br>";
// echo $nums[4] . "<br>";


//USING FOREACH TO PRINT ALL NUMBERS
foreach($nums as $num){
    echo $num . "<br>";
}