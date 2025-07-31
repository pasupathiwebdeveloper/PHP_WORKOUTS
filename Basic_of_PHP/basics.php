<?php
// echo "<h2>Testing Environment</h2>";
// $name = "pasupathi";
// $age = 29;
// $salary = 23500.00;
// echo "my name is : ".$name." and my age is :".$age." and my salary is :".$salary."<br><br>";
// echo "============================================================<br>";
// define("NAME","Pasupathi");
// const test = "working";
// // const test = "not going to work.once declared it wont change";
// echo test."<br>";
// echo NAME;
// echo "============================================================<br>";
// function mytest() {
//     // global $name;
//     $GLOBALS['name']= "changed pasupathi";
// echo $GLOBALS['name'];
//     // $name ="test";
//     // echo $name;
// }

// mytest();

// echo "<br>".$name;
// echo "============================================================<br>";
// $fname = "Pasupathi";
// $lname = "Thangavel";
// $fullname = "Pasupathi Thangavel";
// echo "My full name is : $fname $lname<br>";

// $name = "pasupathi";

// echo strlen($name)."<br>";
// echo ucfirst($name)."<br>";
// echo strtoupper($name)."<br>";
// echo strtolower($name)."<br>";
// echo substr($name,4,4)."<br>";

// $find = strpos($fullname,"Thangavel");

// echo $find."<br>";

// echo substr($fullname,$find)."<br>";

// echo str_replace("Pasupathi","Pasupathy",$fullname);

// $date = "2025-07-21";

// $exp  = explode("-",$date);
// echo "<br>";
// print_r($exp);
// echo "<br>";
// $newDate = implode("/",array_reverse($exp));

// echo $newDate."<br>";

// $alpha = "ABCD";

// $strsplit = str_split($alpha);
// print_r($strsplit);
// echo "<br>";

// foreach($strsplit as $str) {
// echo $str."<br>";
// }
// echo "============================================================<br>";

$arr = ["apple","orange","banana"];

// print_r(array_reverse($arr));

// foreach($arr as $str) {
// echo $str ."<br>";
// }

// echo $arr[1];

// $userRecord = ["user"=>"pasupathi","password"=>"1234"];
// $inputuser = "pasupathi";
// $inputpass ="1234";

// if($userRecord['user']==$inputuser && $userRecord['password']==$inputpass) {
//     echo "user logged in";
// }
// else {
//     echo "invalid user";
// }

// $user = ["pasupathi","kumar","hari","Raja"];

// $len = array_map("strlen",$user);

// $names_list = array_combine($user,$len);

// foreach($names_list as $names=>$values) {
//     // echo $keys."<br>";
//     if($values==4) {
// echo $names."<br>";
//     }
// }

// print_r(array_combine($user,$len));

// $numbers = [1,2,3,4,5,6];
// $filter = array_filter($numbers,function($n) {
//     return $n%2==0;
// });
// print_r($filter);

// $a = [1,2];
// $b = [3,4];

// print_r(array_merge($a,$b));

// $studentMarks = [["Board"=>"SSLC- STATE BOARD","School"=>"K.A.N School","Name"=>"Pasupathi","Tamil"=>95,"Eng"=>95,"Maths"=>95,"Science"=>95,"SS"=>95],["Board"=>"SSLC- STATE BOARD","School"=>"K.A.N School","Name"=>"Kumar","Tamil"=>90,"Eng"=>95,"Maths"=>95,"Science"=>95,"SS"=>95],["Board"=>"SSLC- STATE BOARD","School"=>"K.A.N School","Name"=>"Karthi","Tamil"=>84,"Eng"=>95,"Maths"=>95,"Science"=>95,"SS"=>95]];
// echo "<pre>";
// print_r($studentMarks);
// echo "</pre>";
// echo "<br>";

// foreach($studentMarks as $marks) {
//    echo $marks['Name']." ".$marks['Tamil']."<br>";
// }

// $a = 10;
// $b = 12;
// echo ($a>=18) ? "Adult":"Minor";
// echo $a+$b;

?>