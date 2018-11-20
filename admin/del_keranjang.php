<?php 
	include("koneksi.php");

	$id=$_GET['idpesan'];
	
	$del="DELETE FROM tblpemesanan WHERE idpesan='$id'";


	if(mysql_query($del)){
		?><script>alert('Data berhasil dihapus');</script><?php
		?><script>document.location.href='beranda.php?page=pemesan';</script><?php
	}else{
		echo"data gagal dihapus".mysql_error(); 
	}

?>

n