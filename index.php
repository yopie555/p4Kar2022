<?php
// echo "milala";

//variables
// echo $name;
// echo "<br>";
$age = 20; //integer
// echo $age;
// echo "<br>";
$jomblo = true; //boolean
// echo $jomblo;
// echo "<br>";
$height = 1.55; //float
// echo $height;
// echo "<br>";
$kosong = null; //null
// echo $kosong;

// echo "<br>";
// echo "My name is $name, I am $age years old";

//overwriting variable
// $name = "Milala"; //string
// $name = "Urmila";
// echo $name;

//constant variable
// define("NAME", "Milala"); //define(name, value)
// echo NAME;

//string
// $string_one = "My Email is ";
// $string_two = "urmila@email.com";

// echo $string_one . $string_two; //concatenation

// $name = "Milala";
// echo "hey, my name is $name";

// echo "<br>";
// echo "<br>";

// echo "hey, my name is " . $name; //concatenation

// urmila berteriak "kyaaaa!!!"
// echo "urmila berteriak \"kyaaaa!!!\""; //escape character

//string built in function
// $name = "Muhammad Syukri";
// echo $name[20]; //string index
// echo "<br>";
// echo strlen($name); //string length
// echo "<br>";
// echo strtoupper($name); //string to uppercase
// echo "<br>";
// echo strtolower($name); //string to lowercase
// echo "<br>";
// echo str_replace("Syukri", "Milala", $name); //string replace
// echo "<br>";
// echo substr($name, 9, 5); //string substring

//number
//basic operator + - * / %
//order of operation ( B I D M A S )
// echo 5 + 5;
// echo "<br>";
// echo 5 - 5;
// echo "<br>";
// echo 5 * 5;
// echo "<br>";
// echo 5 / 5;
// echo "<br>";
// echo 5 % 5;
// echo "<br>";
// echo 5 + 5 * 10;

// echo 2 * (4 + 9) / 3;

// $radius = 25;
// echo 3.14 * $radius ** 2; //pi() = 3.14

//number built in function
// $number = 3.14;
// echo floor($number); //round down
// echo "<br>";
// echo ceil($number); //round up

//short hand operator
$age = 20;
$age = $age + 10;
echo $age;
echo "<br>";
$age += 10;
echo $age;
echo "<br>";
$age -= 10;
echo $age;
echo "<br>";
$age *= 10;
echo $age;
echo "<br>";
$age /= 10;
echo $age;
echo "<br>";
$age %= 10;
echo $age;
echo "<br>";
$age **= 10;
echo $age;
