<?php

include 'db.php';
if(isset($_REQUEST['id'])) {
    $id = $_REQUEST['id'];
    $sql = "SELECT * FROM usernames WHERE id=?";
    $stmt = mysqli_prepare($con,$sql);
    mysqli_stmt_bind_param($stmt,'i',$id);
    mysqli_stmt_execute($stmt);
    $run = mysqli_stmt_get_result($stmt);
    $val = mysqli_fetch_assoc($run);
    echo $val['username'];
}
