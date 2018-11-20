<?php 
	include "koneksi.php"; 

	$id=$_GET['id'];
	$username =$_POST['username'];
	$password=$_POST['password'];
	

	$query= mysql_query("UPDATE `admin` SET username='$username', password='$password' where id='$id'".mysql_error());
	if ($query) {
		header("location:beranda.php?page=admin");
		}
		else{
			mysql_error();
		}
	
 ?>