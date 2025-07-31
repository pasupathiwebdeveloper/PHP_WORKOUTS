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
<?php include 'db.php'; 
$id =$_REQUEST['id'];
$sel = "SELECT * FROM usernames WHERE id=?";
$stmt = mysqli_prepare($con,$sel);
mysqli_stmt_bind_param($stmt,'i',$id);
mysqli_stmt_execute($stmt);
$run = mysqli_stmt_get_result($stmt);
$val = mysqli_fetch_assoc($run);
?>

    <form method="POST">
       <input type="text" name="name" value="<?php echo $val['username']; ?>"><br>
       <input type="submit" name="sub">
     </form>

     <?php

if(isset($_REQUEST['sub'])) {
    
    $name = $_REQUEST['name'];
    $sql = "UPDATE usernames SET username=? WHERE id=?";
    $stmt = mysqli_prepare($con,$sql);
    mysqli_stmt_bind_param($stmt,'si',$name,$id);
    mysqli_stmt_execute($stmt);
}
     ?>
        
        <script src="" async defer></script>
    </body>
</html>