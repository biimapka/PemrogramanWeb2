<?php 
	include 'koneksi.php';
		if (isset($_POST['update'])) {
			$id = $_POST['idResto'];
			$pilihresto = $_POST['pilihRestoran'];	
			$pilihmenu  = $_POST['pilihMenu'];
			$hargamenu  = $_POST['hargaMenu'];
			$alamat     = $_POST['alamatPemesanan'];
			$namalengkap = $_POST['namaLengkap'];
			$nmrhape = $_POST['nomorHape'];
			$alamatemail = $_POST['alamatEmail'];

		$sql = "UPDATE  tbl_pilihrestoran set pilihRestoran = '$pilihresto', pilihMenu = '$pilihmenu', hargaMenu = '$hargamenu', almt_pemesanan = '$alamat', nm_lengkap = '$namalengkap', no_hp = '$nmrhape', almt_email = '$alamatemail' where id = '$id'";
		
		$query = mysqli_query($koneksi, $sql);
	  	if ($query) {
 				header("Location:viewdata.php");
	  		}else {
	  			echo "Gagal Update";
		}
		
	}
 ?>