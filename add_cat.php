<?php
$cur_dir =$_COOKIE['cur_dir'];
$cat_name=$_POST['new_cat'];
$dir = $cur_dir."/".$cat_name;
mkdir($dir, 0700);

header('Location: http://serwer1615599.home.pl/z7/panel.php');
exit();
?>