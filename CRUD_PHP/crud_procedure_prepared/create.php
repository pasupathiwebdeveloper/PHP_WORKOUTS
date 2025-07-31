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

    <form method="POST">
       <input type="text" name="name"><br>
       <input type="submit" name="sub">
     </form>

     <?php
include 'db.php';
if(isset($_REQUEST['sub'])) {
    $name = $_REQUEST['name'];
    $sql = "INSERT INTO usernames (username) VALUES (?)";
    $stmt = mysqli_prepare($con,$sql);
    mysqli_stmt_bind_param($stmt,'s',$name);
    mysqli_stmt_execute($stmt);
}
     ?>
        
        <script src="" async defer></script>
    </body>
</html>