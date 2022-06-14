<?php
// $info = pathinfo($_FILES['image']);
require_once 'Controller.php';
if (isset($_FILES['image'])) {
    // echo $_FILES['image']['type'];
    $filetype = $_FILES['image']['type'];
    if ($filetype == 'image/jpeg' || $filetype == 'image/png' || $filetype == 'image/jpg') {
        $filename = $_FILES['image']['name'];
        $tmpname = $_FILES['image']['tmp_name'];
        $filesize = $_FILES['image']['size'];
        $file = null;
        if (isset($_FILES['image']['error'])) {
            if ($_FILES['image']['error'] == 0) {
                $instr = fopen($tmpname, 'rb');
                $file = addslashes(fread($instr, filesize($tmpname)));
            }
        }
        $app_name = new ajax;
        $row = $app_name->image($file);
        echo $row;
    }
}