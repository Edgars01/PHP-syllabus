<?php

# Exercise #4

# Write a program to compute the product of integers from 1 to 10 (i.e., 1×2×3×...×10), as an int. Take note that it is the same as factorial of N.

$num = 10;

$factorial = 1;

for ($x = $num; $x >= 1; $x--) $factorial = $factorial * $x;

echo $factorial;
