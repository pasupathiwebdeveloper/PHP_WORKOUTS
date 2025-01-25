<?php

if(isset($_REQUEST['name'])) {
    echo $_REQUEST['name'];
}
else {
    echo "name variable not set";
}