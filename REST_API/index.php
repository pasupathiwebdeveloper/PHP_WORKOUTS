<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type:application/json");

include 'db.php';
$method = $_SERVER['REQUEST_METHOD'];
$uri =  $_SERVER['REQUEST_URI'];

$uri_exp = explode("/",$uri);


if(isset($uri_exp[4])) {
    $id = $uri_exp[4];
}

$input = file_get_contents("php://input");

switch($method) {
  case "GET":
    if(isset($id)) {
        $sql = "SELECT * FROM users WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $run = $stmt->execute([$id]);
        $rows = $stmt->rowCount();
        if($rows>0) {
       $val = $stmt->fetch(PDO::FETCH_ASSOC);
      
        echo json_encode($val);
       }
       else {
           echo "no values";
       }
        
    }
    else {
        $sql = "SELECT * FROM users";
        $stmt = $pdo->query($sql);
        $stmt->execute();
        while($val = $stmt->fetch(PDO::FETCH_ASSOC)) {
          $data [] = $val;
        }
        echo json_encode($data);
    }

    break;
  case "POST":
$arr = json_decode($input,true);
$name = $arr['name'];
$age = $arr['age'];
$sql = "INSERT INTO users (name,age) VALUES (?,?)";
$stmt = $pdo->prepare($sql);
$run = $stmt->execute([$name,$age]);
if($run) {
    echo json_encode(["message"=>"Success"]);
}

    break;
  case "PUT":
    if(isset($id)) {
    $arr = json_decode($input,true);
    $name = $arr['name'];
    $age = $arr['age'];
    $sql = "UPDATE users SET name = ? , age = ? WHERE id=?";
    $stmt = $pdo->prepare($sql);
    $run = $stmt->execute([$name,$age,$id]);
    if($run) {
        echo json_encode(["message"=>"Success"]);
    }
}
    break;
  case "DELETE":
    if(isset($id)) {
        $sql = "DELETE FROM users WHERE id=?";
        $stmt = $pdo->prepare($sql);
        $run = $stmt->execute([$id]);

        if($stmt->rowCount()!=0) {
            echo json_encode(["message"=>"Success"]);
        }
    }
    break;
  default:
    echo "method not valid";
   break;
    
}

