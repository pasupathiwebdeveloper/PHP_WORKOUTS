<?php 
// header("Content-Type:application/json");
$data = file_get_contents("http://localhost/php/REST_API2/users");

$array = json_decode($data,true);

foreach($array as $val) {
  echo $val['name']."<br>";
}

