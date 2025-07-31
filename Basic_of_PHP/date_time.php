<?php
date_default_timezone_set("Asia/kolkata");
echo date("l, F Y-m-d h:i:s a");
echo date_default_timezone_get();
echo "<br>".time();

echo date("Y-m-d",time())."<br>";

echo date("Y-m-d",strtotime("next Monday"));