<?php

if($_SERVER['REQUEST_METHOD']=="POST") {
    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    echo $name."<br>";
    echo $email."<br>";
}