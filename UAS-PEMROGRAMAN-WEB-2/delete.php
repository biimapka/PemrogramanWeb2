<?php 
include 'koneksi.php'; 

$id = $_GET['id'];
$query = "DELETE from tbl_pilihrestoran where id = '$id' ";
if ($result = mysqli_query($koneksi, $query)) {
	header("location:viewdata.php");
}else{
	echo "Error Delete";
}

?>