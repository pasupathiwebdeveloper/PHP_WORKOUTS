<?php
session_start();
// function greet($name="Guest") {
//     return "Welcome ".$name;
// }
// echo greet("Pasupathi")."<br>";
// echo greet()."<br>";

// function add(int $a, int $b):int {
// return ($a+$b);
// }
// echo add(3,4);
// $a = "b";
// $b =100;
// echo $$a;
// $a=& $b;
// $b = 10;
// echo $a;

// $welcome = function($name) {
//  echo "Welcome ". $name;
// };

// echo $welcome('pasupathi');

// $square = fn($n) => $n*$n;


// echo $square(4);

// function changeVal(&$a){
// $a = 200;
// }
// $a = 100;
// changeVal($a);

// echo $a;

echo $_SESSION['username'];