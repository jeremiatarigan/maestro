<?php session_start(); ?>
<?php  
include("koneksi.php");
?>
<?php 
		$username=$_POST['username'];
		$password=$_POST['password'];
		$login=$_POST['login'];
		if ($login) {
			if ($username=="" || $password== "") {
				?><script type="text/javascript"> alert("masih ada yang kosong");document.location.href='index.php'</script> <?php
			}else{
				$sql=mysql_query("SELECT * FROM admin WHERE username='$username' and password= ('$password')") or die (mysql_error()); 
				$data = mysql_fetch_array($sql);
					$cek= mysql_num_rows($sql);
					if ($cek >= 1) {


						if ($data ['level'] == "admin") {
							@$_SESSION['admin'] = $data['id'];
							?><script type="text/javascript">document.location.href ='beranda.php';</script><?php
							
						}else if ($data ['level'] == "user") {
							@$_SESSION['user'] = $data['id'];
							?><script type="text/javascript">document.location.href='beranda.php';</script><?php
						   }
						$_SESSION['level']=$data['level'];
						$_SESSION['username']=$data['username'];
						$_SESSION['nama_lengkap']=$data['nama_lengkap'];

						}

						else{
							?><script type="text/javascript">alert("pasti belum register!"); document.location.href='index.php'</script><?php
					}


						
				}
    
}
?>
     
