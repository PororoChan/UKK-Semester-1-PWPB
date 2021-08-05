<!DOCTYPE html>
<html>
<head>
	<title>Reksho_PWPB</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<table width="900px">
		<tr>
			<td><img src="image/header.jpg" class="header"></td>
		</tr>
		<tr>
			<th>
			<ul>
			<li><a href="Beranda.php">BERANDA</a></li>
			<li><a href="proses_semai.php" class="selected">PENYEMAIAN</a></li>
			<li><a href="tanggal_panen.php">TANGGAL PANEN</a></li>
			</ul>
		</th>
		</tr>
		
		<tr>
			<td>
				<h2>Manual Skema Ladang</h2>
				<form method="post" action="<?php htmlentities($_SERVER['PHP_SELF']) ?>">
					<input type="number" name="lebar" required><br>
					<input type="number" name="panjang" required>
					<input type="submit" name="submit" value="DESAIN">
				</form>
				<?php
				if(isset($_POST['submit'])){
					$lebar=$_POST['lebar'];
					$panjang=$_POST['panjang'];
					
						for($p=1;$p<=$panjang;$p++){
							for($l=1;$l<=$lebar;$l++){
								echo ('<img src="image/tanaman.jpg">');
							}echo('<br>');
				}
					
				}
				?>
			</td>
		</tr>
	</table>
</body>
</html>