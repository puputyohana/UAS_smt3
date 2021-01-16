<!DOCTYPE html>
<html lang="en">
<?php
    include "koneksi.php"; 
    session_start();
?> 
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content=""> 

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>    

<div class="container mt-5">

<?php
    $id = $_SESSION['iduser'];
    $data = mysqli_query($koneksi, "SELECT * FROM user JOIN transaksi ON user.iduser = transaksi.iduser JOIN divisi ON divisi.iddivisi = user.divisi WHERE user.iduser='$id' ORDER BY tanggal DESC ");  
    while($d = mysqli_fetch_array($data)){ 
        $total = $d['jumlah']*$d['jml_kehadiran']+$d['bonus'];
?>  
    <table class="table">
        <thead>
            <tr>
            <th scope="col">Nama</th>
            <th scope="col"><?php echo $d['nama_lengkap'] ?></th> 
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">Tanggal</th>
            <td><?php echo $d['tanggal'] ?></td> 
            </tr>
            <tr>
            <th scope="row">Divisi</th>
            <td><?php echo $d['nama_divisi'] ?></td> 
            </tr>
            <tr>
            <th scope="row">Kehadiran</th>
            <td><?php echo $d['jml_kehadiran'] ?></td> 
            </tr>
            <tr>
            <th scope="row">Gaji Pokok</th>
            <td>Rp. <?php echo number_format($d['jumlah'],2,',','.'); ?></td> 
            </tr>
            <tr>
            <th scope="row">Bonus</th>
            <td>Rp. <?php echo number_format($d['bonus'],2,',','.'); ?></td> 
            </tr>
            <tr>
            <th scope="row">Total Gaji</th>
            <td>Rp. <?php echo number_format($total ,2,',','.'); ?></td> 
            </tr>
        </tbody>
        </table>
<?php }?>  

</div>

</body>  
<script>
    window.print();
</script> 
</html>