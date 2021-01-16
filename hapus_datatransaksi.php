<?php 
	include 'koneksi.php';

	$idtransaksi = $_GET['idtransaksi'];
	$h = mysqli_query($koneksi,"delete from transaksi where idtransaksi='$idtransaksi'");

	if($h){
		echo "<script>alert('Sukses Hapus');location.href='datatransaksi_admin.php?pesan=hapus';</script>";
	}else{
		echo "<script>alert('Gagal Hapus');location.href='datatransaksi_admin.php';</script>";
	}
	 
	 
?>