<?php
$file_name=$_POST['download'];
$cur_dir =$_COOKIE['cur_dir'];

$dir_download=$cur_dir."/".$file_name;

if (file_exists($dir_download)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($dir_download).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($dir_download));
    readfile($dir_download);
    exit;
}
?>