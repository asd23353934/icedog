<?php
require_once 'Controller.php';
$first = $_REQUEST['q'];
$last = $_REQUEST['c'];
$app_name = new ajax;
$row = $app_name->name($first,$last);
echo $row;
