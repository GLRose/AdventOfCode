<?php
// Algorithm for fuel calculation when given the mass
// $mass = 100756;
// $first = $mass / 3;
// echo floor($first) -2;

// Now that we have an algorithm we need to figure out how to get the amount of fuel for each input then add all the total fuel to get the final answer
$ans;
$finalAns = 0;
// Setup the input file to be accessed
$file = "input.txt";
$lines = file($file);
// echo $lines[0];

// Count the number of inputs in the file
$num = count($lines);

// Loop through the inputs array indexes
for ($i = 0; $i < $num; $i++) {
    // echo $lines[$i];
    $count = ($lines[$i] / 3) - 2;
    $ans = floor($count);
    $finalAns = $finalAns + $ans;
}

echo $finalAns;

// The sum of all fuels comes to 3420719
