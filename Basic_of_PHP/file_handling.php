<?php

// $handle ="file.txt";

// $file = fopen($handle,"r");
// $size = filesize($handle);

// // // echo fread($file,$size);
// // $write = fopen($handle,"w");
// // fwrite($write,"pasupathi");

// // $append = fopen($handle,"a");
// // fwrite($write,"\n pasupathi thangavel \n new line \n test");

// // echo file_get_contents($handle);

// // file_put_contents("file.txt","test");

// $files = scandir(__DIR__);

// foreach($files as $file) {
//   if($file !="." && $file!="..") {
//       echo $file."<br>";
//   }
// }

// $folder = is_dir("uploads");
// echo $folder;
// if(!$folder) {
// mkdir("uploads",0755);
// }
// rmdir("uploads");

// // unlink("file.txt");

$file = fopen("data.csv","r");

while(($val = fgetcsv($file)) !==false) {
    echo $val[0]." ".$val[1],"<br>";
    // print_r($val);
}
fclose($file);

$file = fopen("data.csv","a");
$dat = ["guru","guru@gmail.com"];

fputcsv($file,$dat);