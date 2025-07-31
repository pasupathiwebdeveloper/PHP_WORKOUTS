<?php
header("Content-Type: text/csv");
header('Content-Disposition: attachment; filename="down.csv"');

$output = fopen("php://output","w");

$data = [["name","age"],[
    "pasupathi",29
],[
    "test",29
]];

foreach($data as $val) {
    fputcsv($output,$val);
}

fclose($output);