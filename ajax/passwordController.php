<?php
require_once 'Controller.php';
$password = $_REQUEST['q'];
$app_name = new ajax;
$row = $app_name->password($password);
echo $row;