<?php

// PHP Arithmetic Operators------------------------
$x = 10;
$y = 6;

//Addition
echo $x + $y;

//Subtraction
echo $x - $y;

//Multiplication
echo $x * $y;

//Division
echo $x / $y;

//Modulus
echo $x % $y;

//Exponentiation
echo $x ** $y;



// PHP Assignment Operators------------------------
$x = 10;
$y = 6;

echo $x = $y;

//Addition
$x = $x + $y;
echo $x += $y;  // x = x + y

//Subtraction
echo $x -= $y;  // x = x - y

//Multiplication
echo $x *= $y;  // x = x * y

//Division
echo $x /= $y;  // x = x / y

//Modulus
echo $x %= $y;  // x = x % y



// PHP Comparison Operators------------------------
$x = 10;
$y = 6;

//Equal
echo $x == $y; //false

//Identical
echo $x === $y; //false

//Not equal
echo $x != $y; //true

//Not identical
echo $x !== $y; //true

//Not equal
echo $x <> $y; //true


//Greater than
echo $x > $y; //true

//Less than
echo $x < $y; //false

//Greater than or equal to
echo $x >= $y; //true

//Less than or equal to
echo $x <= $y; //false


// PHP  Operators------------------------


//Pre-increment
$i = 5;
echo ++$i; // 5
echo $i; // 6

//Post-increment
$i = 5;
echo $i++; // 6
echo $i; // 6

//Pre-decrement
$i = 5;
echo --$i; // 5
echo $i; // 4

//Post-decrement
$i = 5;
echo $i--; // 4
echo $i; //4