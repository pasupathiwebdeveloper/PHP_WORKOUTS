<?php
//connection

// $con = mysqli_connect("localhost","root","","oops_concepts");

//create

// $ins = "INSERT INTO account (name,balance) VALUES('Kumar',0)";

// mysqli_query($con,$ins);
// echo "<br>";

//Read

// $sel = "SELECT * FROM account";
// $run = mysqli_query($con,$sel);

// while($val= mysqli_fetch_assoc($run)) {
//   echo $val['name']. " " . $val['balance']."<br>";
// }

// // Update

// $up = "UPDATE account SET balance = 1000 WHERE acc_id=2";
// mysqli_query($con,$up);

// //Delete

// $del = "DELETE FROM account WHERE acc_id=3";
// mysqli_query($con,$del);


// prepared statements

$con = mysqli_connect("localhost","root","","oops_concepts");

//create

// $sql = "INSERT INTO account(name,balance) VALUES (?,?)";

// $stmt = mysqli_prepare($con,$sql);

// mysqli_stmt_bind_param($stmt,'si',$name,$bal);

// $name ="Dnez";
// $bal = 2000;

// mysqli_stmt_execute($stmt);

//Read

$sql = "SELECT * FROM account";

$stmt = mysqli_prepare($con,$sql);
// mysqli_stmt_bind_param($stmt,'i',$id);
$id = 2;

 mysqli_stmt_execute($stmt);
 $run = mysqli_stmt_get_result($stmt);
//  print_r($run);

while($val = mysqli_fetch_assoc($run)) {
 echo $val['name']." ".$val['balance']."<br>";
}

// Update

// $sql = "UPDATE account SET balance = ? WHERE acc_id = ?";

// $stmt = mysqli_prepare($con,$sql);

// mysqli_stmt_bind_param($stmt,'ii',$deposit,$id);

// $deposit = 4000;
// $id =2;
// mysqli_stmt_execute($stmt);

//Delete

// $sql = "DELETE FROM account WHERE name=?";

// $stmt = mysqli_prepare($con,$sql);

// mysqli_stmt_bind_param($stmt,"s",$name);

// $name = "Dnez";

// mysqli_stmt_execute($stmt);

