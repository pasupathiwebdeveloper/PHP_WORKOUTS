<?php
// ini_set("display_errors",1);
ini_set("log_errors",1);
ini_set("error_log",__DIR__."/error_log.log");
error_reporting(E_ALL);

set_error_handler(function($errno, $errstr, $errfile, $errline) {
    throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});
 
error_log("script executed");

try {
//     if(!file_exists("file.txt")) {
//   throw new Exception("File Not found");
//     }
    echo file_get_contents("file.txt");

}
catch(Exception $e) {
    echo "errr:".$e->getMessage();
    error_log($e->getMessage());
}
finally {
    echo "finished";
}