<?php
try{
    $pdo = new PDO("mysql:host=localhost;dbname=php_crud_app","root","");
}
catch(PDOException $e) {
echo $e->getMessage();
}
