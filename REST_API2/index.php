<?php
header("Access-Control-Allow-Origin:*");
header("Content-Type: application/json");
include 'db.php';
$method = $_SERVER['REQUEST_METHOD'];

$uri = $_SERVER['REQUEST_URI'];

$exp_url = explode("/",$uri);

if(!empty($exp_url[4])) {
   $id = $exp_url[4];
}

$input = file_get_contents("php://input");

switch($method) {
    case "GET":
        if(!empty($id)) {
            $stmt = mysqli_prepare($con,"SELECT * FROM users WHERE id= ?");
            mysqli_stmt_bind_param($stmt,'i',$id);
            mysqli_stmt_execute($stmt);
            $run = mysqli_stmt_get_result($stmt);
            $val = mysqli_fetch_assoc($run);
            $name = $val['name'];
            $age  =$val['age'];
            $data = ["name"=>$name,"age"=>$age];
            echo json_encode($data);
        }
        else {
            $stmt = mysqli_prepare($con,"SELECT * FROM users");
            mysqli_stmt_execute($stmt);
            $run = mysqli_stmt_get_result($stmt);
            while($val = mysqli_fetch_assoc($run)) {
                $data[] = $val;
            }
            echo json_encode($data);
        }

    break;
    case "POST":
       $data = json_decode($input,true);
       $name = $data['name'];
       $age = $data['age'];
       $stmt = mysqli_prepare($con,"INSERT INTO users (name,age) VALUES (?,?)");
       mysqli_stmt_bind_param($stmt,'si',$name,$age);
       if(mysqli_stmt_execute($stmt)) {
        $message = ["message"=>"Success"];
        echo json_encode($message);
       }
    break;
    case "PUT":
        if(!empty($id)) {
            $data  = json_decode($input,true);
            $name = $data['name'];
            $age = $data['age'];
            $stmt = mysqli_prepare($con,"UPDATE users SET name = ? , age = ? WHERE id=?");
            mysqli_stmt_bind_param($stmt,'sii',$name,$age,$id);
           if(mysqli_stmt_execute($stmt)) {
               $message = ["message"=>"success"];
               echo json_encode($message);
           }

        }

    break;
    case "DELETE":
        if(!empty($id)) {
           $stmt = mysqli_prepare($con,"DELETE FROM users WHERE id=?");
           mysqli_stmt_bind_param($stmt,'i',$id);
           if(mysqli_stmt_execute($stmt)) {
               $message = ["message"=>"success"];
               echo json_encode($message);
           }
        }
    break;
    default:
    return ["message"=>"Not a valid Method"];
}
