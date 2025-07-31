<?php

// $curl = curl_init();

// curl_setopt_array($curl,[
//     CURLOPT_URL=>"http://localhost/PHP/REST_API/users",
//     CURLOPT_RETURNTRANSFER=>true
// ]);

// $response = curl_exec($curl);
// curl_close($curl);

// $arr = json_decode($response,true);

// echo "<br><br>";

// echo $arr[0]['name'];

// foreach($arr as $data) {
//   echo $data['name']."<br>";
// }

// $curl = curl_init();
// $data = ["name"=>"pasupathi","age"=>26];
// curl_setopt_array($curl,[
//     CURLOPT_URL=>"http://localhost/PHP/REST_API/users",
//     CURLOPT_RETURNTRANSFER =>true,
//     CURLOPT_POST=>true,
//     CURLOPT_POSTFIELDS =>json_encode($data),
//     CURLOPT_HTTPHEADER => [
//         "Content-Type:application/json"
//     ]
    
// ]);

// $response = curl_exec($curl);

// curl_close($curl);

// $mes = json_decode($response,true);

// echo $mes['message'];



// $curl = curl_init();
// $data = ["name"=>"pasupathi","age"=>29];
// curl_setopt_array($curl,[
// CURLOPT_URL=>"http://localhost/PHP/REST_API/users/5",
// CURLOPT_RETURNTRANSFER =>true,
// CURLOPT_CUSTOMREQUEST =>"PUT",
// CURLOPT_POSTFIELDS=>json_encode($data),
// CURLOPT_HTTPHEADER=>[
//     "Content-Type:application/json"
// ]
// ]);

// $res = curl_exec($curl);

// curl_close($curl);

// $mes = json_decode($res,true);

// echo $mes['message'];

// $curl = curl_init();
// curl_setopt_array($curl,[
// CURLOPT_URL =>"http://localhost/PHP/REST_API/users/5",
// CURLOPT_RETURNTRANSFER =>true,
// CURLOPT_CUSTOMREQUEST=>"DELETE"
// ]);
// $res = curl_exec($curl);

// curl_close($curl);

// $mes = json_decode($res,true);

// echo $mes['message'];

