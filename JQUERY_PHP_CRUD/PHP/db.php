<?php

$conn = new mysqli("localhost","root","","testt");

if($conn->connect_error) {
    die("database error");
}