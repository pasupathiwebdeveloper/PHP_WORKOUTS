<?php
// $num = 3;

// if($num<=1) {
//     echo "Not a prime number";
// }
// else {
//     $isPrime = true;  
//     for($i=2;$i<=sqrt($num);$i++) {
//       if($num%$i==0) {
//           $isPrime = false; 
//       }
//     }
// }

// if($isPrime) {
//   echo "prime number";
// }

//swapping numbers

// $a = 10;
// $b = 20;
// $temp = $a;
// $a = $b;
// $b = $temp;
// // $a = $a+$b;
// // $b = $a-$b;
// // $a = $a-$b;
// echo "A :" .$a."<br>";
// echo "B :" .$b."<br>";

//prime numbers

// $num = 123 ;
// $isPrime =true;
// if($num<=1) {
//   echo "it is not prime number if";
// }
// else {

//   for($i=2;$i<=sqrt($num);$i++) {
//     if($num%$i==0) {
//       $isPrime=false;
//       break;
//     }
//   }
//   if($isPrime) {
//     echo "it is prime number";
//   }
//   else {
//     echo "it is not prime number else";
//   }
  
// }

//string reverse built in functions

// $str = "12s";
// $str_rev = strrev($str);

// if($str==$str_rev) {
//   echo "it is a palindrome : ".$str;
// }
// else {
//   echo "it is not a palindrome : ".$str;
// }

// $str = "pasupathi";
// // echo strrev($str);
// $len  = strlen($str);
// $rev = "";
// for($i=$len-1;$i>=0;$i--) {
//   $rev .= $str[$i];
// }
// echo $rev;

//fibonaaci series 0 1 1 2 3 5 8 13 21

// $n = 10;
// $a = 0;
// $b = 1;

// for($i=0;$i<$n;$i++) {
//   $c = $a + $b;
//   echo $c."<br>";
//   $a = $b ;
//   $b = $c ;
// }

//palindrome madam strrev madam it is palindram

// $str = "malayalam";
// $rev = strrev($str);

// echo ($str===$rev) ? "palindrome : $str":"not a palindrome : $str";


// // factorial 5*4*3*2*1 = 120
// function fact($n) {
//   if($n==0) {
//     return 1;
//   }
//   else {
//     for($i=$n;$i>=1;$i--) {
//   if($i===1) {
//     echo $i." = ";
//     break;
//   }
//   else {
//     echo $i."*";
//     break;
//   }

//     }
//      return $n * fact($n-1);
//   }
  
// }
// $n = 5 ;
// echo fact($n);

// $result = 1;
// $n = 5 ;
// for($i=$n;$i>=1;$i--) {
//  $result *= $i;
//  $arr [] = $result;
// }
// print_r($arr);
// echo $result;

//sum of numbers  12345

// $n = 12345;
// $result = 0;

// // $str = "\"".$n."\"";
// $arr = str_split((string)$n);
// // print_r($arr);

// for($i=0;$i<count($arr);$i++) {
//   // if($arr[$i]!='"') {
//    $result += (int)$arr[$i];
//   // }   
// }
// echo $result;

//print pyramid

// for($i=1;$i<=5;$i++) {
//   for($j=5;$j>=$i;$j--) {
//     echo "*";
//   }
//   echo "<br>";
// }

// for($i = 1; $i <= 5; $i++) {
//   for($k = 1; $k <= $i; $k++) {
//     echo "";
//   }
//   for($j = 5; $j >= $i; $j--) {
//     echo "*";
//   }
//   echo "<br>";
// }

// $rows = 5;

// // Upper half of the diamond
// for($i = 1; $i <= $rows; $i++) {
//   // Print spaces
//   for($j = $i; $j < $rows; $j++) {
//     echo "&nbsp;&nbsp;";
//   }

//   // Print stars
//   for($k = 1; $k <= (2 * $i - 1); $k++) {
//     echo "*";
//   }

//   echo "<br>";
// }

// // Lower half of the diamond
// for($i = $rows - 1; $i >= 1; $i--) {
//   // Print spaces
//   for($j = $rows; $j > $i; $j--) {
//     echo "&nbsp;&nbsp;";
//   }

//   // Print stars
//   for($k = 1; $k <= (2 * $i - 1); $k++) {
//     echo "*";
//   }

//   echo "<br>";
// }

// max numbers

// $a = 10;$b = 200; $c = 30;

// $max= max($a,$b,$c);

// echo $max."<br>";

// echo ($max==$c) ? "c is max":"";
// echo ($max==$b) ? "b is max":"";
// echo ($max==$a) ? "a is max":"";


// odd or even

// $number = 3;

// if($number % 2 ==0) {
// echo "even number ".$number ;
// }
// else {
//   echo "odd number ".$number ;
// }
 


// $numbers = array(1, 2, 3, 4, 5);

// foreach ($numbers as $num) {
//   if($num % 2 == 0) {
//     echo $num ." is even<br>";
// } else {
//     echo $num ." is odd<br>";
// }

// }

// function greetUser($name) {
//   echo "Hello, " . $name . "!";
// }

// $name = "Pasupathi";
// greetUser($name);

// $file = fopen("sample.txt", "r");
// while(!feof($file)) {
//     $line = fgets($file);
//     echo $line;
// }
// fclose($file);

$a = [1, 2, 3];
$b = [4, 5, 6];

$c = $a + $b;

print_r($c);





















