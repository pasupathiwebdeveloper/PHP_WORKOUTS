<!DOCTYPE html>
<html>
    <head>
<?php  include 'Components/metadata.php'; ?>
    </head>
    <body>
    <?php  include 'Components/header.php'; ?> 
    <div class="container">
    <?php
    if(isset($_REQUEST['id'])) {
        $id= $_REQUEST['id'];
        $sel = "SELECT * FROM users WHERE id='$id'";
        $run = mysqli_query($con,$sel);
        while($val = mysqli_fetch_assoc($run)) {
          echo $val['username']."<br>";
          echo $val['firstname']."<br>";
          echo $val['lastname']."<br>";
          echo $val['gender']."<br>";
          echo $val['skills']."<br>";
        }
    }
     
    ?>
    </div>

        <script src="" async defer></script>
    </body>
</html>