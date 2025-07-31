<?php

// $curl = curl_init();
// curl_setopt_array($curl,[
//     CURLOPT_URL => "http://localhost/php/REST_API2/users/3",
//     CURLOPT_RETURNTRANSFER => true
// ]);
// $json = curl_exec($curl);

// curl_close($curl);

// $array = json_decode($json,true);

// print_r($array);
// echo "<br>";
// // foreach($array as $data) {
//     echo $array['name']." ".$array['age']."<br>";
// // }

// $curl  = curl_init();
// $arr = ["name"=>"kumar","age"=>29];
// curl_setopt_array($curl,[
//     CURLOPT_URL =>"http://localhost/php/REST_API2/users/",
//     CURLOPT_RETURNTRANSFER => true,
//     CURLOPT_POST=>true,
//     CURLOPT_POSTFIELDS=>json_encode($arr),
//     CURLOPT_HTTPHEADER => [
//         "Content-Type:application/json"
//     ]
// ]);
// $res = curl_exec($curl);

// // echo $res;

// $data  = json_decode($res,true);

// print_r($data);
// echo $data['message'];


// $curl = curl_init();
// $data  = ["name"=>"test","age"=>29];
// curl_setopt_array($curl,[
//     CURLOPT_URL => "http://localhost/php/REST_API2/users/4",
//     CURLOPT_RETURNTRANSFER =>true,
//     CURLOPT_CUSTOMREQUEST=>"PUT",
//     CURLOPT_POSTFIELDS=>json_encode($data),
//     CURLOPT_HTTPHEADER =>[
//         "Content-Type:application/json"
//     ]
// ]);
// $res = curl_exec($curl);
// curl_close($curl);
// $mes = json_decode($res,true);

// echo $mes['message'];

// $curl = curl_init();
// curl_setopt_array($curl,[
// CURLOPT_URL =>"http://localhost/php/REST_API2/users/5",
// CURLOPT_RETURNTRANSFER=>true,
// CURLOPT_CUSTOMREQUEST=>"DELETE"
// ]);
// $res = curl_exec($curl);

// $data = json_decode($res,true);

// echo $data['message'];