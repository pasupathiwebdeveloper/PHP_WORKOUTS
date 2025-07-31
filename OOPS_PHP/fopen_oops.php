<?php
class Logger {
    public $name;
  public function __construct($fname) {
    $this->name = fopen($fname,'a');
  }
  public function log($message) {
      fwrite($this->name,$message.date("Y-m-d H:i:s a") .$_SERVER['REMOTE_ADDR']." : ".PHP_EOL);
  }
//   public function __destruct() {
//       fclose($this->name);
//   }
}

$log = new Logger("demo.txt");
$log->log("script running ... ");
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

        <script src="" async defer></script>
    </body>
</html>