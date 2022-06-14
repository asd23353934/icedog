<?php
require_once 'Controller.php';
$phone = $_REQUEST['q'];
$app_name = new ajax;
$row = $app_name->phone($phone);
echo $row;