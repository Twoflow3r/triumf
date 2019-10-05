<?php
$target_dir = "upload/";
$data = "img.json";
header("Content-Type: application/json");
header('Pragma: public');
header('Expires: 0');
header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
header('Cache-Control: private', false);
header('Content-Disposition: attachment; filename="img.json"');
header('Content-Transfer-Encoding: binary');
header('Content-Length: ' . filesize($data));
readfile($data);
$target_file = $target_dir . basename($_FILES["file"]["name"]);


if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_dir.$_FILES['file']['name'])) {
    $status = 1;
}
