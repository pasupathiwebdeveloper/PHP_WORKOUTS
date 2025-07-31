<?php
class SessionManger {
    public function __construct() {
        session_start();
    }

    public function set($key,$value) {
       $_SESSION[$key]=$value;
    }
    public function get($key) {
      echo $_SESSION[$key];
    }

    public function __destruct() {
        session_destroy();
    }
}

$sess = new SessionManger();
$sess->set("username","Pasupathi");
?>
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
        <h1>Welcome, <?php echo $sess->get('username'); ?> </h1>
        <script src="" async defer></script>
    </body>
</html>