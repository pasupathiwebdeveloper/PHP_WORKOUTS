<?php
include 'db.php';

$id = $_REQUEST['id'];

$sql ="SELECT * FROM usernames WHERE id = ?";

$stmt = $pdo->prepare($sql);
$stmt->execute([$id]);
$val = $stmt->fetch(PDO::FETCH_ASSOC);

echo $val['username'];