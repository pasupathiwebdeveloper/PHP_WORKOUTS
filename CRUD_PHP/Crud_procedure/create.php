<!DOCTYPE html>
<html>
    <head>
     <?php  include 'Components/metadata.php'; ?>
    </head>
    <body>
    <?php  include 'Components/header.php'; ?>  
    <div class="container">
    <div class="row">
       
        <div class="col-md-5">
        <h4 style="color:red;">User Registeration</h4>
        <form method="POST" enctype="multipart/form-data">
        <table class="table">
            <tr>
                <th>First Name </th>
                <td><input type="text" name="fname" class="form-control" /></td>
            </tr>
            <tr>
                <th>Last Name </th>
                <td><input type="text" name="lname" class="form-control" /></td>
            </tr>
            <tr>
                <th>Gender </th>
                <td><input type="radio" name="gender" value="Male"/> Male <br>
                <input type="radio" name="gender"  value="Female" /> Female <br>
                <input type="radio" name="gender"  value="Others" /> Others <br>
            </td>
            </tr>
            <tr>
                <th>Username</th>
                <td><input type="text" name="uname" class="form-control" /></td>
            </tr>
            <tr>
                <th>Password </th>
                <td><input type="password" name="pass" class="form-control" /></td>
            </tr>
            <tr>
                <th>Re-enter Password </th>
                <td><input type="password" name="rpass" class="form-control" /></td>
            </tr>
            <tr>
                <th>Photo </th>
                <td><input type="file" name="file" class="form-control" /></td>
            </tr>
            <tr>
                <th>Skills</th>
                <td>
                    <input type="checkbox" name="skills[]" value="HTML"/> HTML <br>
                    <input type="checkbox" name="skills[]" value="CSS"/> CSS <br>
                    <input type="checkbox" name="skills[]" value="JS"/> JAVASCRIPT <br>
                    <input type="checkbox" name="skills[]" value="PHP"/> PHP <br>
                    <input type="checkbox" name="skills[]" value="LARAVEL"/> LARAVEL <br>
                 </td>
            </tr>
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
            $pass = $_REQUEST['pass'];
            $rpass = $_REQUEST['rpass'];
            if($pass==$rpass) {
            $password = password_hash($pass,PASSWORD_BCRYPT);
            $filename = $_FILES['file']['name'];
            $tmpname = $_FILES['file']['tmp_name'];
            $folder = "uploads/".$_FILES['file']['name'];
            move_uploaded_file($tmpname,$folder);
            $skills = $_REQUEST['skills'];
            $skill_sets = implode(",",$skills);
            $ins = "INSERT INTO users (username,password,gender,skills,photo,firstname,lastname) VALUES('$uname','$password','$gender','$skill_sets','$folder','$fname','$lname')";
             if(mysqli_query($con,$ins)) {
               echo "<center><h4 style='color:green;font-weight:bold;'>Registered Successfully</h4></center>";
             }
            }
            else {
                echo "password mismatch";
            }
        }
    ?>

        <script src="" async defer></script>
    </body>
</html>