<!DOCTYPE html>
<html lang="en">

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
        include "menu_admin.php";
    ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Begin Page Content -->
                <div class="container-fluid">


                      <!-- Begin Page Content -->
                <div class="container-fluid">
                <br>

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Data Pegawai</h1>
                    <p class="mb-4">Aplikasi Penggajian Berbasis Web merupakan Aplikasi web yang didesain untuk membantu pengelolaan gaji karyawan di suatu lembaga atau perusahaan. Karena berbasis web, sehingga untuk membuka aplikasi ini dilakukan melalui web browser. Aplikasi Penggajian ini juga dapat digunakan dalam komputer berbasis jaringan.</p>
                    <?php

                    include "koneksi.php";
                    
                    $idtransaksi = $_GET['idtransaksi'];
                    
                    $data = mysqli_query($koneksi, "SELECT * from transaksi where idtransaksi='$idtransaksi'");
                    $d = mysqli_fetch_array($data);
                    ?>
                        <form class="user" method="post" action="update_datatransaksi.php">

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        Id Transaksi :
                                        <input type="hidden" class="form-control" name ="idtransaksi" value = "<?php echo $d['idtransaksi'];?>"  placeholder="ID Transaksi">
                                    </div>
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        Id User :
                                        <input type="text" class="form-control" name ="iduser" value = "<?php echo $d['iduser'];?>"  placeholder="ID User">
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        Tanggal :
                                        <input type="date" class="form-control" name ="tanggal" value = "<?php echo $d['tanggal'];?>"  placeholder="Tanggal">
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        Gaji Pokok :
                                        <input type="text" class="form-control" name ="jumlah" value = "<?php echo $d['jumlah'];?>"  placeholder="Gaji Pokok">
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        Kehadiran :
                                        <input type="text" class="form-control" name ="jml_kehadiran" value = "<?php echo $d['jml_kehadiran'];?>"  placeholder="Kehadiran">
                                    </div>
                                    
                                </div>

                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        Bonus :
                                        <input type="text" class="form-control" name ="bonus" value = "<?php echo $d['bonus'];?>"  placeholder="Bonus">
                                    </div>
                                    
                                </div>
 
                               <input class="btn btn-lg btn-primary" type="submit" value="simpan" name="simpan">
                            </form>

    </div>
                <!-- /.container-fluid -->

                   
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