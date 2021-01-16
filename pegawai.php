<!DOCTYPE html>
<html lang="en">
<?php
    include "koneksi.php";
?>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
    <div id="wrapper">
    <?php
        include "menu_pegawai.php";
    ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"><br>Dashboard</h1>
                        <a href="print.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Cetak Laporan </a>
                    </div>

                    <!-- Page Heading -->
                     

                    <?php
                        $id = $_SESSION['iduser'];
                        $data = mysqli_query($koneksi, "SELECT * FROM user JOIN transaksi ON user.iduser = transaksi.iduser JOIN divisi ON divisi.iddivisi = user.divisi WHERE user.iduser='$id' ORDER BY tanggal DESC"); 
                        while($d = mysqli_fetch_array($data)){ 
                        $total = $d['jumlah']*$d['jml_kehadiran']+$d['bonus'];
                     ?> 

                    <!-- Content Row -->
                    <div class="row">  
                        <div class="col-lg-12 col-md-6 mb-4"> 
                            <!-- Illustrations -->
                            <div class="card shadow mb-4">
                                <div class="card-header">  
                                    <label class="col-sm-3 col-form-label font-weight-bold text-primary">Gaji tanggal <?php echo $d['tanggal'] ?></label>  
                                </div>

                                <div class="card-body"> 
                                            
                                        <div class="alert alert-danger" role="alert">
                                            Berikut merupakan data gaji terbaru anda.  Anda dapat mencari berdasarkan tanggal gaji, total gaji merupakan jumlah keseluruhan dari gaji pokok dan bonus menurut kehadiran pegawai bekerja.
                                        </div>
                                        
                                        <p>Nama : <?php echo $d['nama_lengkap'] ?></p>
                                        <p>Divisi : <?php echo $d['nama_divisi'] ?></p>
                                        <p>Kehadiran : <?php echo $d['jml_kehadiran'] ?></p>
                                        <p>Gaji Pokok : Rp. <?php echo number_format($d['jumlah'],2,',','.'); ?></p>
                                        <p>Bonus : Rp. <?php echo number_format($d['bonus'],2,',','.'); ?></p>
                                        <p>Total Gaji : Rp. <?php echo number_format($total ,2,',','.'); ?></p>
                                </div>
                            </div>
                            <?php }?>
                        </div>

                    </div>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>