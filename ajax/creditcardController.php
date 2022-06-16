<?php
require_once 'Controller.php';
$row = $_REQUEST['q'];
$app_name = new ajax;
$row = $app_name->card_add($row);
echo $row ;