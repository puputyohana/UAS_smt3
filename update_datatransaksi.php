<?php
			
		include 'koneksi.php';

		$idtransaksi = $_POST['idtransaksi'];
		$iduser = $_POST['iduser'];
		$jumlah = $_POST['jumlah'];
		$jml_kehadiran = $_POST['jml_kehadiran'];
		$bonus = $_POST['bonus'];
		$tanggal = $_POST['tanggal'];

		$ed = mysqli_query($koneksi, "UPDATE transaksi set iduser='$iduser', tanggal='$tanggal', jumlah='$jumlah', jml_kehadiran='$jml_kehadiran', bonus='$bonus' where idtransaksi='$idtransaksi'");

		if($ed){
		echo "<script>alert('Sukses Update');location.href='datatransaksi_admin.php?pesan=update';</script>";
		}else{
		echo "<script>alert('Gagal Update');location.href='update_datatransaksi.php';</script>";
		}

	?>