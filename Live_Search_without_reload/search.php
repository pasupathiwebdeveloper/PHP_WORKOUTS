<?php

if($_SERVER['REQUEST_METHOD']=="POST") {
    if(isset($_REQUEST['query'])) {
        $val = $_REQUEST['query'];

        $conn = new mysqli("localhost","root","","testt");
        if($conn->connect_error) {
            die("not connected");
        }
        $stmt = $conn->prepare("SELECT * FROM salary WHERE name LIKE  ?");
        $val1 = '%'.$val.'%';
        $stmt->bind_param("s",$val1);
        $stmt->execute();
        $result = $stmt->get_result();
       echo "<br><br><br>";
        while($row = $result->fetch_assoc()) {
         echo $row['name']." ".$row['salary']."<br>";
        }
    }
}