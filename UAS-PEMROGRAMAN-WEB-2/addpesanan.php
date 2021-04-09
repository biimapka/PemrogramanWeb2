<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>View Pesanan</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback"
  <!-- Font Awesome --!>
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="viewdata.php" class="nav-link">Data Pesanan</a>
      </li>
    </ul>

    <!-- Right navbar links -->
   
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">UAS PemroWeb 2</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Kelompok 5</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Pilih Menu
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="viewdata.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pesanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pesan Makanan</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Cetak</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Order Menu</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
          <div class="col-md-6">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Pesan Makanan</h3>
              </div>
              <!-- /.card-header -->
                <form action="prosesinput.php" method="POST">

                  <div class="card-body">

                    <div class="form-group">
                      <label for="pilihRestoran">Pilih Restoran</label>
                      <select name="pilihRestoran" onchange="random(this.value)" class="form-control custom-select">
                        <option value="0">-- PILIH RESTORAN --</option>
                        <option value="Warteg Kharisma">Warteg Kharisma</option>
                        <option value="Restoran Padang Sederhana">Restoran Padang Sederhana</option>
                        <option value="Soto Ayam Ndelik">Soto Ayam Ndelik</option>
                      </select>
                    </div>

                    <div class="form-group">
                      <label for="pilihMenu">Menu Makanan</label>
                      <input type="text" id="pilihMenu" name="pilihMenu" class="form-control" readonly>
                    </div>
                    
                    <div class="form-group">
                      <label for="hargaMenu">Harga Paket Menu</label>
                      <input type="text" id="hargaMenu" name="hargaMenu" class="form-control" readonly>
                    </div>

                    <div class="form-group">
                      <label for="alamatPemesanan">Alamat Pemesanan</label>
                      <input type="text" name="alamatPemesanan" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="namaLengkap">Nama Lengkap</label>
                      <input type="text" name="namaLengkap" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="nomorHape">No HP</label>
                      <input type="text" name="nomorHape" class="form-control">
                    </div>

                    <div class="form-group">
                      <label for="alamatEmail">Email</label>
                      <input type="text" name="alamatEmail" class="form-control">
                    </div>

                    
                      <input type="submit" name="pesanMakanan" class="btn btn-success float-left" value="Pesan Makanan">
                  </div>
                
                </form>

                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<script type="text/javascript">
    function random(pilihRestoran){
      var pilihmenu = "";
      var hargamenu = "";
      parseInt(hargamenu);

      switch(pilihRestoran){
        case "Warteg Kharisma":{
          pilihmenu = "Paket Nasi Tempe Orek";
          hargamenu = 30000;
        }
        break;

        case "Restoran Padang Sederhana":{
          pilihmenu = "Paket Nasi Sate Padang";
          hargamenu = 40000;
        }
        break;
        
        case "Soto Ayam Ndelik":{
          pilihmenu = "Paket Nasi Soto Ayam";
          hargamenu = 35000;
        }
        break;
        
      }


      document.getElementById('pilihMenu').value = pilihmenu;
      document.getElementById('hargaMenu').value = hargamenu;
    }
  </script>
<!-- Page specific script -->
</script>
</body>
</html>
