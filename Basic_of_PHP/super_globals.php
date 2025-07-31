<?php
// $_GET $_POST $_REQUEST $_SERVER $_SESSION $_COOKIE $_ENV $GLOBALS $_FILES
// session_start();
// $username= "Pasupathi";
// $_SESSION['username'] = $username;

// echo $_SESSION['username'];

// setcookie("username","Pasupathi",time()+3600);

// echo $_COOKIE['username'];


// if(isset($_GET['name'])) {
//     echo $_GET['name']."<br>";
//     echo "New :".$_REQUEST['name'];
// }

?>

<!-- <form method="POST">
<input type="text" name="name" />
<br><input type="submit"  />
</form> -->

<?php
// if($_SERVER['REQUEST_METHOD']==="POST") {
// echo $_POST['name'];
// }
?>

<?php
// echo $_SERVER['PHP_SELF'];
// echo $_SERVER['SERVER_NAME'];
// echo $_SERVER['HTTP_HOST'];
// echo $_SERVER['REQUEST_METHOD'];
// echo $_SERVER['REQUEST_URI'];
// echo $_SERVER['QUERY_STRING'];
// $query =  $_SERVER['QUERY_STRING'];
// $uri =  $_SERVER['REQUEST_URI'];
// $withou_query = substr($uri,0,strpos($uri,"?"));
// echo $withou_query;
// echo $_SERVER['SCRIPT_NAME'];
// echo $_SERVER['SCRIPT_FILENAME'];
// echo $_SERVER['HTTP_USER_AGENT'];
// echo $_SERVER['REMOTE_ADDR'];
// echo $_SERVER['HTTP_REFERER'];
// $agent =  $_SERVER['HTTP_USER_AGENT'];
// echo $agent;
// if(strpos($agent,"Chrome")!==false) {
//     echo "chrome";
// }
// else {
//     echo "browser not detected";
// }


// $userAgent = $_SERVER['HTTP_USER_AGENT'];
// $browser = "Unknown Browser";

// // Check specific ones first
// if (strpos($userAgent, 'Edg') !== false) {
//     $browser = "Microsoft Edge";
// } elseif (strpos($userAgent, 'OPR') !== false || strpos($userAgent, 'Opera') !== false) {
//     $browser = "Opera";
// } elseif (strpos($userAgent, 'Brave') !== false) {
//     $browser = "Brave";
// } elseif (strpos($userAgent, 'Chrome') !== false) {
//     $browser = "Google Chrome";
// } elseif (strpos($userAgent, 'Firefox') !== false) {
//     $browser = "Mozilla Firefox";
// } elseif (strpos($userAgent, 'Safari') !== false) {
//     $browser = "Safari";
// }

// echo "Detected browser: " . $browser;
//  $data = "<h1>test</h1>";

//  $data .= "<script>alert('hacked');</script><br>";
// //  echo $data;

//  echo htmlspecialchars($data);

//  echo htmlentities($data);

//  echo $_SERVER['SCRIPT_FILENAME']."<br>";

//  $url = "http://localhost\php/Basic_of_PHP/super_globals.php?name=pasupathi  ";
//  $tag = "<h1>test</h1><script>alert('hacked');</script>";

//  echo trim($url)."<br>";
//  echo strip_tags($tag)."<br>";
//  echo stripslashes($url)."<br>";


// echo $data;
?>


<form method="POST" enctype="multipart/form-data" >
  <input type="file" name="file" accept=".jpg,.png,.jpeg"/>
  <br><input type="submit" name="sub" />
</form>

<?php
if(isset($_REQUEST['sub'])) {
    $filename = $_FILES['file']['name'];
    echo $filename."<br>";
    $tmpname = $_FILES['file']['tmp_name'];
    echo $tmpname."<br>";
    $size = $_FILES['file']['size'];
    echo  ($size/1024)." KB<br>";
    $type = $_FILES['file']['type'];
    echo  $type."<br>";
    // move_uploaded_file($tmpname,"files/".$filename);
}
?>
