<?php

// connection creation
try {
    $pdo = new PDO("mysql:host=localhost;dbname=oops_concepts","root","");
    echo "connected";
}
catch(PDOException $e) {
    echo $e->getMessage();
}

echo "<br>";

// create 

// $sql = "INSERT INTO account (name,balance) VALUES (?,?)";

// $stmt = $pdo->prepare($sql);

// $name = "Karthi";
// $balance = 2000;

// $stmt->execute([$name,$balance]);

// Read

$sql = "SELECT * FROM account";
$id = 1;
$stmt  = $pdo->query($sql);
$stmt->execute();

while($row= $stmt->fetch(PDO::FETCH_ASSOC)) {
echo $row['name']." ".$row['balance']."<br>";
}

//update 
$sql = "UPDATE account SET balance = ? WHERE acc_id= ?";

$stmt = $pdo->prepare($sql);

$bal = 2500;
$id = 9;

$stmt->execute([$bal,$id]);

// Delete

$sql = "DELETE FROM account WHERE acc_id = ?";

$stmt = $pdo->prepare($sql);

$stmt->execute([$id]);

$id = 9;