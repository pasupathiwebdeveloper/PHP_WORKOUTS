<!DOCTYPE html>
<html>
    <head>
     <?php  include 'Components/metadata.php'; ?>
    </head>
    <body>
    <?php  include 'Components/header.php'; ?>  
    <div class="container">
    <div class="row">
       <?php
    if(isset($_REQUEST['id'])) {
        $id= $_REQUEST['id'];
        $sel = "SELECT * FROM users WHERE id='$id'";
        $run = mysqli_query($con,$sel);
        $val = mysqli_fetch_assoc($run);

       ?>
        <div class="col-md-5">
        <h4 style="color:red;">User Registeration</h4>
        <form method="POST" enctype="multipart/form-data">
        <table class="table">
            <tr>
                <th>First Name </th>
                <td><input type="text" name="fname" value="<?php echo $val['firstname'] ?>" class="form-control" /></td>
            </tr>
            <tr>
                <th>Last Name </th>
                <td><input type="text" name="lname" value="<?php echo $val['lastname'] ?>" class="form-control" /></td>
            </tr>
            <tr>
                <th>Gender</th>
                <td><input type="text" class="form-control" name="gender" value="<?php echo $val['gender'] ?>"/>
            </td>
            </tr>
            <tr>
                <th>Username</th>
                <td><input type="text" name="uname" class="form-control" value="<?php echo $val['username'] ?>" /></td>
            </tr>
            <!-- <tr>
                <th>Password </th>
                <td><input type="password" name="pass" class="form-control" /></td>
            </tr>
            <tr>
                <th>Re-enter Password </th>
                <td><input type="password" name="rpass" class="form-control" /></td>
            </tr> -->
            <!-- <tr>
                <th>Photo </th>
                <td><input type="file" name="file" class="form-control" /></td>
            </tr> -->
            <!-- <tr>
                <th>Skills</th>
                <td>
                    <input type="checkbox" name="skills[]" value="HTML"/> HTML <br>
                    <input type="checkbox" name="skills[]" value="CSS"/> CSS <br>
                    <input type="checkbox" name="skills[]" value="JS"/> JAVASCRIPT <br>
                    <input type="checkbox" name="skills[]" value="PHP"/> PHP <br>
                    <input type="checkbox" name="skills[]" value="LARAVEL"/> LARAVEL <br>
                 </td>
            </tr> -->
            <tr>
                <td colspan=2><input type="submit" name="register" value="Register" class="btn btn-primary" style="font-weight:bold;" /></td>
            </tr>
        </table>
         </form>
       </div>  
  
    </div>
    </div>
    
    <?php
       
        if(isset($_REQUEST['register'])) {
            $fname = $_REQUEST['fname'];
            $lname = $_REQUEST['lname'];
            $uname = $_REQUEST['uname'];
            $gender = $_REQUEST['gender'];
           
            $up = "UPDATE users SET firstname ='$fname', lastname='$lname',username='$uname',gender='$gender' WHERE id='$id'";
            if(mysqli_query($con,$up)) {
                echo "<center><h4 style='color:green;font-weight:bold;'>Updated</h4></center>";
            }

        }
    }
    ?>

        <script src="" async defer></script>
    </body>
</html>