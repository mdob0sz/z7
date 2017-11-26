<?php
	$user=$_POST['user'];
	$pass=$_POST['pass'];
	
	$link = mysqli_connect("serwer1615599.home.pl/sql", "21746911_z7","lab19937", "21746911_z7");
	if(!$link) 
	{ 
		echo"Błąd: ". mysqli_connect_errno()." ".mysqli_connect_error();
	}
	
	$result = mysqli_query($link, "SELECT * FROM users WHERE user='$user'");
	$rekord = mysqli_fetch_array($result);

	if($rekord)
	{
		header('Location: http://serwer1615599.home.pl/z7/reg_fail.html');
		exit();
	}
	else
	{
		$add_user = "INSERT INTO users (user, pass, fails) VALUES ('".$user."', '".$pass."', '0')";
		mysqli_query($link, $add_user);
		
		mkdir("cat/".$user, 0700);
		
		header('Location: http://serwer1615599.home.pl/z7/index.html');
		exit();
	}
?>