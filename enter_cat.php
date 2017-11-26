<?php
$cat_name=$_POST['enter_cat'];
$cur_dir =$_COOKIE['cur_dir'];
$cur_back ="TRUE";

$dir_enter=$cur_dir."/".$cat_name;
setcookie("cur_dir", $dir_enter, time()+(60*60*1));
setcookie("cur_back", $cur_back, time()+(60*60*1));

header('Location: http://serwer1615599.home.pl/z7/panel.php');
exit();
?>