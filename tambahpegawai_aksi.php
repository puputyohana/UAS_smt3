<?php
		
		include 'koneksi.php';

		$iduser = $_POST['username'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$nama_lengkap = $_POST['nama_lengkap'];
		$divisi = $_POST['divisi'];
		$no_rek = $_POST['no_rek'];
		$level = $_POST['level'];

		mysqli_query($koneksi, "INSERT INTO user (username,password,nama_lengkap,divisi,no_rek,level)values('$username','$password','$nama_lengkap','$divisi','$no_rek','$level')");
		
		header("location:datapegawai_admin.php");
	?>