<?php
header("content-type:application/json");
include 'db.php';
$sel = "SELECT * FROM name";
$run = $conn->query($sel);

while($row = $run->fetch_assoc()) {
$yes[] = $row;
}

echo json_encode($yes);