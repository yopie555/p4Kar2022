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
// $age = 20;
// $age = $age + 10;
// echo $age;
// echo "<br>";
// $age += 10;
// echo $age;
// echo "<br>";
// $age -= 10;
// echo $age;
// echo "<br>";
// $age *= 10;
// echo $age;
// echo "<br>";
// $age /= 10;
// echo $age;
// echo "<br>";
// $age %= 10;
// echo $age;
// echo "<br>";
// $age **= 10;
// echo $age;

//indexed array
// echo $people_one[0];
// echo "<br>";
// echo $people_one[2];
// echo $people_two[0];
// echo "<br>";
// echo $people_two[2];
// $people_one = ["Fitri", "Syukri", "Urmila"];
// $people_two = ["elsa", "angela", "audrik"];
// $people_three = array_merge($people_one, $people_two);
// echo "<pre>"; //preformatted text
// print_r($people_three); //print readable

// $age = [20, 30, 40, 50];
// $age[1] = 25; //overwrite
// $age[] = 60; //add new element
// $age[] = "nama pacar"; //add new element
// array_push($age, 70); //add new element
// echo "<pre>";
// print_r($age);

// associative array (key & value pair)
// $kumpulan_KA = [
//     "urmila" => "unilever",
//     "syukri" => "bukalapak",
//     "fitri" => "tokopedia"
// ];
// // echo $kumpulan_KA["urmila"];
// $kumpulan_KA["fitri"] = "shopee"; //overwrite
// $kumpulan_KA["audrik"] = "tiktok shop"; //add new element
// echo "<pre>";
// print_r($kumpulan_KA);
// echo count($kumpulan_KA); //count element

// multi-dimensional array

// $blogs = [
//     [
//         "title" => "makanan",
//         "author" => "urmila",
//         "content" => "makanan enak"
//     ],
//     [
//         "title" => "minuman",
//         "author" => "syukri",
//         "content" => "minuman enak"
//     ],
//     [
//         "title" => "cemilan",
//         "author" => "fitri",
//         "content" => "cemilan enak"
//     ]
// ];
// echo "<pre>";
// print_r($blogs);

// echo $blogs[2]["content"];

//conditional statement
// $age = 19;
// if ($age > 20) {
//     echo "you are old enough";
// } elseif ($age == 20) {
//     echo "you are 20 years old";
// } else {
//     echo "you are not old enough";
// }

//comparison & boolean (true or false)
// echo true; //1
// echo false; //0

//number
// echo 5 < 10;
// echo "<br>";
// echo 5 > 10;
// echo "<br>";
// echo 5 == 10;
// echo "<br>";
// echo 5 != 10;
// echo "<br>";
// echo 5 <= 10;
// echo "<br>";
// echo 5 >= 10;

// strings
// echo 'shaun' < 'yoshi'; //true
// echo "<br>";
// echo 'shaun' > 'yoshi'; //false
// echo "<br>";
// echo 'shaun' > 'Shaun'; //true (uppercase < lowercase)
// echo "<br>";
// echo 'mario' == 'mario'; //true
// echo "<br>";
// echo 'mario' == 'Mario'; //false
// echo "<br>";
// echo "q" > "S"; //true (alphabetical order)

// loose vs strict equal comparison
// echo 5 == "5"; //true
// echo "<br>";
// echo 5 === "5"; //false
// echo "<br>";
// echo 5 === 5; //true
//loops

//for loops
// $person = ['fitri', 'mila', 'mela', 'elsa', 'audrik', 'om syukri', 'om shala', 'angela', 'shu', 'ardi'];
// for ($i = 0; $i < count($person); $i++) {
//     echo $person[$i] . "<br>";
// } 

//nested for loops
// for ($outer = 0; $outer < 2; $outer++) {
//     for ($inner = 0; $inner < 3; $inner++) {
//         echo $outer . " - " . $inner . "<br>";
//     }
// }

//foreach loops
// $person = ['fitri', 'mila', 'mela', 'elsa', 'audrik', 'om syukri', 'om shala', 'angela', 'shu', 'ardi'];
// foreach ($person as $orang) {
//     echo $orang . "<br>";
// }

//while loops
// $students = [
//     ['name' => 'mila', 'bestie' => 'fitri'],
//     ['name' => 'shu', 'bestie' => 'audrik'],
//     ['name' => 'elsa', 'bestie' => 'angel'],
//     ['name' => 'om syukri', 'bestie' => 'om shalah'],
// ];
// $i = 0; 
// while ($i < count($students)) {
//     echo $students[$i]['name'] . " - " . $students[$i]['bestie'] . "<br>";
//     $i++;
// }
// foreach ($students as $student) {
//     echo $student['name'] . " - " . $student['bestie'] . "<br>";
// }

//do while loops
// $i = 0;
// do {
//     echo $i . "<br>";
//     $i++;
// } while ($i < 5);

//break & continue
// for ($i = 0; $i < 10; $i++) {
//     if ($i === 5) {
//         break;
//     }
//     echo $i . "<br>";
// }

for ($i = 0; $i < 10; $i++) {
    if ($i === 5) {
        continue;
    }
    echo $i . "<br>";
}