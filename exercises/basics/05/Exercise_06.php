<?php

##### Exercise 6

##### Create an non-associative array with 5 elements where 3 are integers,
# 1 float and 1 string. Create a for loop that iterates non-associative array using php
# in-built function that determines count of elements in the array. Create a function that doubles the integer number.
# Within the loop using php in-built function print out the double of the number value (using your custom function).


function ifIntDoubleIt($value)
{
    return is_int($value) ? $value * 2 : $value;
}

$elements = [1, 2, 3, 1.1, '1'];

for ($i = 0; $i < count($elements); $i++)
{
    print_r(ifIntDoubleIt($elements[$i]));
    echo "<br>";
}

