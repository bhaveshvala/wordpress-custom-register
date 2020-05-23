<?php
require_once("wp-load.php");
$user_email = $_REQUEST['regemailID'];
if(!email_exists($user_email)){
    echo 'true';
    exit;
}else{
    echo 'false';
    exit;
}
exit;
