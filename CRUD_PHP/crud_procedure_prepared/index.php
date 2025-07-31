<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
    <h3>User Management <a href='create.php'>Create</a></h3>
    <hr>

    <?php
     include("db.php");
     if(isset($_REQUEST['del'])) {
       $id = $_REQUEST['del'];
       $del = "DELETE FROM usernames WHERE id=?";
       $stmt = mysqli_prepare($con,$del);
       mysqli_stmt_bind_param($stmt,'i',$id);
       mysqli_stmt_execute($stmt);
     }
     $sql = "SELECT * FROM usernames";
     $stmt = mysqli_prepare($con,$sql);
     mysqli_stmt_execute($stmt);
     $run = mysqli_stmt_get_result($stmt);
     while($val = mysqli_fetch_assoc($run)) {
     echo $val['username']." ".' <a href="view.php?id='.$val['id'].'">View</a> <a href="update.php?id='.$val['id'].'">Edit</a> <a href="?del='.$val['id'].'">Delete</a><br>';
     }
    ?>
        
        <script src="" async defer></script>
    </body>
</html>