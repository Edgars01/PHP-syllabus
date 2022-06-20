<?php

# Exercise #3

//Write a program to produce the sum of 1, 2, 3, ..., to 100.
//Store 1 and 100 in variables lower bound and upper bound, so that we can change their values easily.
//Also compute and display the average. The output shall look like:
//
//```
//The sum of 1 to 100 is 5050
//The average is 50.5
//```

$sum = 0;

for ($i = 0; $i <= 100; $i++)
{
    print_r($sum . ' + ' . $i);
    $sum += $i;
    echo "<br/>";
}

echo "<br/>";
print_r($sum);
echo "<br/>";
print_r($sum / 100);