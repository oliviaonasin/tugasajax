<?php 
	require 'koneksi.php';


	session_start();
	$nama_buah = $_POST['nama_buah'];
	$vitamin = $_POST['vitamin'];
	$waktu = $_POST['waktu'];
	
	

	$tambah = mysqli_query($conn,"INSERT INTO blog VALUES(null,'$nama_buah','$vitamin',null)");

		if ($tambah>0) {
			echo "data berhasil ditambahkan";
			echo "<br>";
			echo "klik ";
			echo "<a href='admin.php'>disini</a>";
			echo " untuk melihat hasil";
		}
		else {
			echo "data gagal ditambahkan";
			echo "<br>";
			echo "klik ";
			echo "<a href='creat.php'>disini</a>";
		echo " bray";

		}
	

 ?>