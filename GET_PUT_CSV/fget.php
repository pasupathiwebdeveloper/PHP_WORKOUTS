<?php

$handle = fopen("data.csv","r");

fgetcsv($handle);

while(($data=fgetcsv($handle))!==FALSE) {
    echo $data[0]."<br>";
}