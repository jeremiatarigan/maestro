<?php 
	include "../config/koneksi.php";
	$nama_lengkap=$_POST['nama'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$no_hp=$_POST['kontak'];
	$alamat=$_POST['alamat'];
	$pekerjaan=$_POST['pekerjaan'];
	$email=$_POST['email'];
	$level=$_POST['level'];

	$koneksi=mysql_query("INSERT INTO admin VALUES('','$nama_lengkap','$username','$password','$no_hp','$alamat','$pekerjaan',
		'$email','$level')");
	
	if ($koneksi) {
		?><script >alert("admin telah diinput");</script> <?php
		?><script >document.location.href='beranda.php';</script> <?php
	}
	else{
		echo "gagal diinput".mysql_error();
	}
 ?>