<?php 
	include("koneksi.php");

	$id=$_GET['id'];
	
	$del="DELETE FROM `admin` WHERE id='$id'";


	if(mysql_query($del)){
		?><script>alert('Data berhasil dihapus');</script><?php
		?><script>document.location.href='beranda.php';</script><?php
	}else{
		echo"data gagal dihapus".mysql_error(); 
	}

?>

