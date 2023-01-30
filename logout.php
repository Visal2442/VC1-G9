<?php 
session_start();
session_unset();
session_destroy();
setcookie("username", "", time()-2500);
header('location:/');