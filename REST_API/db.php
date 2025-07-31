<?php

try {
    $pdo = new PDO("mysql:host=localhost;dbname=rest_api","root","");
}
catch(PDOException $e) {
echo $e->getMessage();
}