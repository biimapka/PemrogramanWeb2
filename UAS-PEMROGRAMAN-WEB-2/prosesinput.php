<?php 
	include 'koneksi.php';
	if (isset($_POST['pesanMakanan'])) {

		$pilihresto = $_POST['pilihRestoran'];
		$pilihmenu  = $_POST['pilihMenu'];
		$hargamenu  = $_POST['hargaMenu'];
		$alamat     = $_POST['alamatPemesanan'];
		$namalengkap = $_POST['namaLengkap'];
		$nmrhape = $_POST['nomorHape'];
		$alamatemail = $_POST['alamatEmail'];

	$sql = "INSERT into tbl_pilihrestoran (pilihRestoran, pilihMenu, hargaMenu, almt_pemesanan, nm_lengkap, no_hp, almt_email) values ('$pilihresto','$pilihmenu', '$hargamenu', '$alamat', '$namalengkap', '$nmrhape', '$alamatemail')";

	$query = mysqli_query($koneksi, $sql) or die(mysqli_error());
		if ($query) {
			header("Location:viewdata.php");
		}

	}
?>

