<?php 
include 'koneksi.php';

require_once __DIR__ . './mpdf_v8.0.3-master/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();
ob_start(); 
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Export Pdf</title>
</head>
<body>
	  <div>
	  		<h1 align="center">Data Pemesanan</h1>
                <table border="1">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Jenis Restoran</th>
                    <th>Makanan</th>
                    <th>Harga</th>
                    <th>Nama Lengkap</th>
                    <th>No HP</th>
                    <th>Email</th>
                  </tr>
                  </thead>
                  <tbody>
                     
	                <?php
						$sql="SELECT * from tbl_pilihrestoran";
						$query=mysqli_query($koneksi, $sql) or die(mysqli_error());
					while ($data=mysqli_fetch_array($query)) {
					?>
                     <tr> 
                       <td><?= $data['id']; ?></td>
                       <td><?= $data['pilihRestoran'];?></td>
                       <td><?= $data['pilihMenu'];?></td>
                       <td><?= $data['hargaMenu'];?></td>
                       <td><?= $data['nm_lengkap'];?></td>
                       <td><?= $data['no_hp'];?></td>
                       <td><?= $data['almt_email'];?></td>           
                     </tr>

                     <?php } ?>
                  </tbody>
                </table>
              </div>
</body>
</html>
<?php
	$html = ob_get_contents(); 
	ob_end_clean();
	$mpdf->WriteHTML(utf8_encode($html));
	$mpdf->Output("laporan_pesanan.pdf" ,'I');
?>