<?php
$dir = "z7/".$_COOKIE['cur_dir']."/";
if (is_uploaded_file($_FILES['plik']['tmp_name']))
{
	move_uploaded_file($_FILES['plik']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].$dir.$_FILES['plik']['name']);
}
else 
{
	echo 'B³¹d przy przesy³aniu danych!';
}
		
header('Location: http://serwer1615599.home.pl/z7/panel.php');
exit();
?>