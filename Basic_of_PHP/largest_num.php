<?php
// $a = 70;
// $b = 80;
// $c = 90;
// $d = 40;

// echo "A = $a <br> B = $b <br> C = $c <br> D = $d <br>";

// if($a>$b && $a>$c && $a>$d) {
//   echo "A is greater : " . $a;
// }
// elseif($b>$a && $b>$c && $b>$d) {
//     echo "B is greater : " . $b;
// }
// elseif($c>$a && $c>$b && $c>$d) {
//     echo "c is greater : " . $c;
// }
// else {
//     echo "D is greater :" . $d;
// }
// $a = 20;
// $b = 10;
// $operand = "*";

// switch($operand) {
//     case "+":
//         echo $a+$b;
//         break;
//         case "-";
//         echo $a-$b;
//         break;
//         case "*":
//             echo $a*$b;
//             break;
//     default:
//     echo "invalid operator";

// }

// $i = 1;

// while($i<=5) {
// echo $i."<br>";
// $i++;
// }
// echo "<br><br>";
// $i = 1;
// do {
//     echo $i."<br>";
//     $i++;
// } while($i<=10);


// $method = $_SERVER['REQUEST_METHOD'];

// switch($method) {
//   case "GET":
// echo "GET Request";
// $a =[1,2,3];
// print_r($a);
//     break;
//     case "POST":
//         echo "POST Request \n";
//         $data = file_get_contents("php://input");
//         // $data1 = json_encode($data);
//         // echo $data1;
//         $arr = json_decode($data);

//         if ($arr && isset($arr->name)) {
//             echo "Name: " . $arr->name;
//         } else {
//             echo "Invalid JSON or 'name' not set.";
//         }
//             break;
//     case "PUT":
//         echo "PUT Request";
//         break;
//    case "DELETE":
//             echo "DELETE Request";
//             break;
//     default:
//     echo "methods not fount";
// }

// $json = '{"name":"pasupathi"}';

// $data = json_decode($json);

// echo $data->name;

// echo "<br>";
// $data = json_decode($json,true);

// echo $data['name'];

// for($i=1;$i<=10;$i++) {
//     if($i===5) {
//         continue;
//     }
// echo $i."<br>";
// }