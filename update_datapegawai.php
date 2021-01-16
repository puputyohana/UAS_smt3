<?php 
include 'koneksi.php';

		$iduser = $_POST['iduser'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$nama_lengkap = $_POST['nama_lengkap'];
		$divisi = $_POST['divisi'];
		$no_rek = $_POST['no_rek'];
		$level = $_POST['level'];

	$e = mysqli_query($koneksi, "UPDATE user set username = '$username', password='$password', nama_lengkap='$nama_lengkap', divisi = '$divisi', no_rek='$no_rek', level='$level' where iduser='$iduser'");

	if($e){
		echo "<script>alert('Sukses Update');location.href='datapegawai_admin.php?pesan=update';</script>";
	}else{
		echo "<script>alert('Gagal Update');location.href='update_datapegawai.php';</script>";
	}

?>