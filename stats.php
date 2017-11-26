<HTML>

	<HEAD>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<title>Wojciech Mamys</title>
		<link rel="stylesheet" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Lato&subset=latin-ext" rel="stylesheet">
	</HEAD>

	<BODY>
		<?php
			$link = mysqli_connect("serwer1615599.home.pl/sql", "21746911_z7","lab19937", "21746911_z7");
			if(!$link) 
			{ 
				echo"Błąd: ". mysqli_connect_errno()." ".mysqli_connect_error();
			}
		?>
			<div class="flex-container">
				Statystyki udanych i nieudanych logowań:
			</div>
			
			<div class="flex-container">
				<div class="flex-item"  style="width: 90%;">
					<br><table>
						<tr style="font-weight: bold; background-color: #545454;">
							<td>User</td>
							<td>Data</td>
							<td>Status</td>
						</tr>
						<?php
						$result = mysqli_query($link, "SELECT * FROM logi");
						if($result === FALSE)
						{ 
							echo "Nie udało się wykonać zapytania";
						}
						else
						{
							while ($row = mysqli_fetch_array($result)) 
							{
						?>
								<tr>
									<td><?php echo $row{'user'} ?></td>
									<td><?php echo $row{'date'} ?></td>
									<td><?php echo $row{'status'} ?></td>
								</tr>
							<?php
							}
						}
						?>
					</table>
				</div>
			</div>
				
	</BODY>
	
</HTML>