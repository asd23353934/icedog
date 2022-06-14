<?php
require_once 'Controller.php';
$email = $_REQUEST['q'];
$app_name = new ajax;
$row = $app_name->email($email);
echo $row;