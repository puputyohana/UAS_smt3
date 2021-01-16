<?php 
	include 'koneksi.php';

	$iduser = $_GET['iduser'];
	$h = mysqli_query($koneksi,"delete from user where iduser='$iduser'");

	if($h){
		echo "<script>alert('Sukses Hapus');location.href='datapegawai_admin.php?pesan=hapus';</script>";
	}else{
		echo "<script>alert('Gagal Hapus');location.href='update_datapegawai.php';</script>";
	}
	 
	 
?>