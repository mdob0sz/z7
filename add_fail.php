<?php
	$user = $_COOKIE['user'];
	
	$link = mysqli_connect("serwer1615599.home.pl/sql", "21746911_z7","lab19937", "21746911_z7");
	if(!$link) 
	{ 
		echo"Błąd: ". mysqli_connect_errno()." ".mysqli_connect_error();
	}
	
	$add_info = "INSERT INTO logi (user, status) VALUES ('".$user."', 'Nieudane')";
	mysqli_query($link, $add_info);

	$query = "UPDATE users SET fails = fails + 1 WHERE user='".$user."'";
	mysqli_query($link, $query);
	
	setcookie("user", "", 1);
	
	header('Location: http://serwer1615599.home.pl/z7/fail.html');
	exit();
?>