
<!DOCTYPE html>
<html>
    <head>
<?php  include 'Components/metadata.php'; ?>
    </head>
    <body>
    <?php  include 'Components/header.php'; ?> 
    <?php
if(isset($_REQUEST['del'])) {
    $del = $_REQUEST['del'];
    $delte = "DELETE FROM users WHERE id ='$del'";
    if(mysqli_query($con,$delte)) {
     echo "<script>alert('deleted');window.location.href='index.php';</script>";
    }
}
?>
    <div class="container">
        <table class="table table-striped table-hover">
        <tr><th>ID</th><th>Photo</th><th>Gender</th><th>First Name</th><th>Last Name</th><th>Username</th><th>skills</th><th>Action</th></tr>
    <?php
    $sel = "SELECT * FROM users";
    $run = mysqli_query($con,$sel);
    while($val  = mysqli_fetch_assoc($run)) {
        ?>
        <tr><td><?php echo $val['id']; ?></td><td><img src="<?php echo $val['photo']; ?>" style="width:50px;height:50px;" /></td><td><?php echo $val['gender']; ?></td><td><?php echo $val['firstname']; ?></td><td><?php echo $val['lastname']; ?></td><td><?php echo $val['username']; ?></td><td><?php echo $val['skills']; ?></td>
        <td style="vertical-align:middle;">
            <a href="view.php?id=<?php echo $val['id'];  ?>" class="btn btn-primary">View</a> 
            <a href="update.php?id=<?php echo $val['id'];  ?>" class="btn btn-success">Edit</a>
            <a href="?del=<?php echo $val['id'];  ?>" class="btn btn-danger">Delete</a> 
        </td>
    </tr>

     <?php
    }
    ?>
       </table> 
       </div>
        <script src="" async defer></script>
    </body>
</html>