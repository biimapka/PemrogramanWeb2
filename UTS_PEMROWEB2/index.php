<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Input Data</title>
	 <style>
            html {
                font-family: sans-serif;
            }
            .banner {
                background-color: #ff0000;
            }
            h1, h3 {
                color: #040941;
            }
            form {
                padding-top: 10px;
                color: #040941;
            }
            .php {
                padding: 100px;
            }
        </style>
	
</head>
<body>
	<section>

		<div class="banner">
			<h1 align="center">APLIKASI PEMANTAUAN COVID-19</h1>
		</div>

		<h3>Silahkan Input Data Sesuai Form dibawah ini</h3>

		<form action="proses.php" method="post">
			<select name="wilayah" class="form-select">
				<option>Pilih Wilayah</option>
				<option value="DKI Jakarta">DKI Jakarta</option>
				<option value="Jawa Barat">Jawa Barat</option>
				<option value="Banten">Banten</option>
				<option value="Jawa Tengah">Jawa Tengah</option>
			</select>

			<label>Jumlah Positif</label>
			<input type="text" name="jmlpositif" class="form-control">

			<label>Jumlah Dirawat</label>
			<input type="text" name="jmldirawat" class="form-control">

			<label>Jumlah Sembuh</label>
			<input type="text" name="jmlsembuh" class="form-control">

			<label>Jumlah Meninggal</label>
			<input type="text" name="jmlmeninggal" class="form-control">

			 <label>Nama Operator</label>
			<input type="text" name="namaoperator" class="form-control">

			<label>NIM</label>
			<input type="text" name="nimmahasiswa" class="form-control">

			<input type="submit" name="submit" value="INPUT DATA" class="btn">
		</form>
		</div>
	</section>
 
	<section>
		<div>
			<center>
				<table width="100%">
					<tr>
						<th>Positif</th>
						<th>Dirawat</th>
						<th>Sembuh</th>
						<th>Meninggal</th>	
					</tr>

					<?php 

							$txt_file = file_get_contents("datapasien.txt");
							$rows = explode("\n", $txt_file);
							array_shift($rows);
							$i=1;

							foreach ($rows as $row => $data) {
								$row_data = explode('|', $data);

								$info[$row]['wilayah'] = $row_data[0];
								$info[$row]['jmlpositif'] = $row_data[1];
								$info[$row]['jmldirawat'] = $row_data[2];
								$info[$row]['jmlsembuh'] = $row_data[3];
								$info[$row]['jmlmeninggal'] = $row_data[4];
								$info[$row]['namaoperator'] = $row_data[5];
								$info[$row]['nimmahasiswa'] = $row_data[6];

								echo "Data Pemantauan Covid19 Wilayah ";
								echo $info[$row]['wilayah'];
								echo "<br>Per"; 
	                            echo date(' d-F-Y ');
	                            echo date(' h:i:s A ');                            
	                            echo "<br>".$info[$row]['namaoperator'];
	                            echo "/";
	                            echo "<br>".$info[$row]['nimmahasiswa'];
	                            
							echo "<tr>";
					        echo ' <td>Jumlah Positif:'.$info[$row]['jmlpositif'];
					        echo ' <td>Jumlah Dirawat:'. $info[$row]['jmldirawat'];
					        echo ' <td>Jumlah Sembuh: ' . $info[$row]['jmlsembuh'];
					        echo ' <td>Jumlah Meninggal:'. $info[$row]['jmlmeninggal'];
					        echo "</tr>";
					    }
					 ?>
				</table>
			</center>
		</div>
	</section>
	<footer></footer>
</body>
</html>