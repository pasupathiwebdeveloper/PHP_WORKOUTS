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
   <form method="post">
     <input type="text" name="name" /><br>
     <input type="radio" name="gender" value="male"/> MALE <br>
     <input type="radio" name="gender" value="female"/> FEMALE <br>
     <input type="submit" name="sub" />
   </form>
        <script src="" async defer></script>
    </body>
</html>

<?php
if(isset($_REQUEST['sub'])) {
    // echo $_REQUEST['name']."<br>";
    echo $_REQUEST['gender'];
    echo trim(stripslashes($_REQUEST['name']));
}
?>