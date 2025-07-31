<?php

$data = fopen("data4.csv","r");

while(!feof($data)) {
   $line = fgetcsv($data);
   if($line!==false) {
    foreach($line as $val) {
        echo $val." ";
      }
   }

   echo "<br>";
// print_r($line);
//    echo $line."<br>";
}

fclose($data);