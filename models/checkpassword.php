<?php
session_start();
$q = $_REQUEST["q"];
$password = $_SESSION['password'];
echo ($_SESSION['password'] == $q)?true:false;

?>