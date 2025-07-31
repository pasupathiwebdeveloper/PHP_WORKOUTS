<?php
// require 'vendor/autoload.php';

// use GuzzleHttp\Client;

// $client = new Client();

// // $res = $client->request("GET","http://localhost/PHP/REST_API/users/6");

// // $json = $res->getBody();

// // $array = json_decode($json,true);

// // echo $array['name'];

// require 'vendor/autoload.php';
// use GuzzleHttp\Client;

// $client = new Client();

// $res = $client->post("http://localhost/PHP/REST_API/users",["json"=>['name'=>"test","age"=>29]]);

// $json = $res->getBody();

// $array = json_decode($json,true);

// echo $array['message'];



// require 'vendor/autoload.php';

// use GuzzleHttp\Client;

// $client = new Client();

// $res = $client->put("http://localhost/PHP/REST_API/users/6",["json"=>[
//     "name"=>"test",
//     "age"=>29
// ]]);

// $json = $res->getBody();

// $array = json_decode($json,true);

// echo $array['message'];


require 'vendor/autoload.php';

use GuzzleHttp\Client;

$client = new Client();

$res = $client->delete("http://localhost/PHP/REST_API/users/6");

$json = $res->getBody();

$array =  json_decode($json,true);

echo $array['message'];