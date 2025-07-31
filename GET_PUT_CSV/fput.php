<?php
// $data = ["Name","age"];
// $data = [["name","age"],["pasupathi",2]];
$data = [["name"=>"pasupathi","age"=>29],["name"=>"pasupathy","age"=>29]];
// $keys= array_keys($data);
// print_r($keys);
$keys = array_keys($data[0]);
$array = [$keys[0],$keys[1]];

$handle = fopen("data4.csv","w");
fputcsv($handle,$array);
foreach($data as $key=>$val) {
    fputcsv($handle,$val);
}

