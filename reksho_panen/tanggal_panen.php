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
			<li><a href="proses_semai.php">PENYEMAIAN</a></li>
			<li><a href="tanggal_panen.php" class="selected">TANGGAL PANEN</a></li>
			</ul>
		</th>
		</tr>
		<tr>
			<td>
				<form method="post" action="<?php htmlentities($_SERVER['PHP_SELF']); ?>">
					<input type="number" name="tanggal" required placeholder="dd">
					<input type="number" name="bulan" required placeholder="MM">
					<input type="number" name="tahun" required placeholder="yyyy">
					<input type="submit" value="TAMPILKAN" name="submit">
				</form>
				<?php
					if (isset($_POST['submit'])){
					$tanggal = $_POST['tanggal'];
					$bulan = $_POST['bulan'];
					$tahun = $_POST['tahun'];
					
					switch ($bulan){
					case '1':
					$bulan="January";
						break;
					case '2':
						$bulan="February";
						break;
					case '3':
						$bulan="March";
						break;
					case '4':
						$bulan="April";
						break;
					case '5':
						$bulan="May";
						break;
					case '6':
						$bulan="June";
						break;
					case '7':
						$bulan="July";
						break;
					case '8':
						$bulan="August";
						break;
					case '9':
						$bulan="September";
						break;
					case '10':
						$bulan="October";
						break;
					case '11':
						$bulan="November";
						break;
					case '12':
						$bulan= "December";
						break;
					default:
						$bulan="Bintang";
						break;
				}
			echo "Waktu yang tepat untuk panen adalah tanggal ".$tanggal." bulan ".$bulan." tahun ".$tahun;
				}

				?>
			</td>
		</tr>
		
	</table>
</body>
</html>