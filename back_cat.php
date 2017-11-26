<?php
$user = $_COOKIE['user'];

$cur_dir    = 'cat/'.$user;
setcookie("cur_dir", $cur_dir, time()+(60*60*1));

$cur_back ="FALSE";
setcookie("cur_back", $cur_back, time()+(60*60*1));

header('Location: http://serwer1615599.home.pl/z7/panel.php');
exit();
?>