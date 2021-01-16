<?php
			
		include 'koneksi.php';

		$iduser = $_POST['iduser'];
		$jumlah = $_POST['jumlah'];
		$jml_kehadiran = $_POST['jml_kehadiran'];
		$bonus = $_POST['bonus'];
		$tanggal = $_POST['tanggal'];

		mysqli_query($koneksi, "INSERT INTO transaksi (iduser,jumlah,jml_kehadiran,bonus,tanggal)values('$iduser','$jumlah','$jml_kehadiran','$bonus','$tanggal')");
		
		header("location:datatransaksi_admin.php");
		
	?>