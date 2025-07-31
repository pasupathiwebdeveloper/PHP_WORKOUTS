<?php

// $names = ['ajith','vijay','surya'];

// $upper_name = array_map('strtoupper',$names);

// // print_r($upper_name);

// $numbers = [1,2,3,4,5,6];

// $square = array_map(function($n) {
// return $n*$n;
// },$numbers);

// print_r($square);

// $numbers = [1,2,3,4,5,6];
// $even = array_filter($numbers,function($n) {
//     return $n%2==0;
// });

// print_r($even);

// $name = ["pasupathi"];

// array_push($name,"kumar");

// print_r($name);

// array_pop($name);

// print_r($name);

// array_unshift($name,"kumar");

// print_r($name);
// array_shift($name);

// print_r($name);

// $mimes = ['jpeg','jpg','png'];

// $format = 'xlsx';

// if(in_array($format,$mimes)) {
//     echo "okay execute";
// }
// else {
//     echo "not okay stop";
// }

$num = [1,2,3,4];

$num2 = [3,4,5,6];

// print_r(array_unique($num));

// echo array_sum($num);

// echo count($num);

// print_r(array_diff($num,$num2));

print_r(array_intersect($num,$num2));

print_r(array_combine($num,$num2));
print_r(array_merge($num,$num2));


