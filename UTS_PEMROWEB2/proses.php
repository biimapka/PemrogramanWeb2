<?php 
		$nm_wilayah = $_POST['wilayah'];
		$jml_positif = $_POST['jmlpositif'];
		$jml_dirawat = $_POST['jmldirawat'];
		$jml_sembuh = $_POST['jmlsembuh'];
		$jml_meninggal = $_POST['jmlmeninggal'];
		$operator = $_POST['namaoperator'];
		$nim_mhs = $_POST['nimmahasiswa']; 


		$data = "\n$nm_wilayah|$jml_positif|$jml_dirawat|$jml_sembuh|$jml_meninggal|$operator|$nim_mhs";

		$fh = fopen("datapasien.txt", "w");
		fwrite($fh, $data);

		fclose($fh);
		print("Data Telah Tersimpan <br> <a href='index.php'");
?>