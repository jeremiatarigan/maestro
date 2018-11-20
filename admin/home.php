<?php session_start();

include "koneksi.php";
if (@$_SESSION['admin'] || @$_SESSION['user'])  {
	?>
<html>
<head>

	<title></title>
	<style type="text/css">
		.panel{
			background-color: ;
			font-family: times new roman;
			font-size: 30px;
			display: block;
			text-align: center;
		}

	</style>
</head>
<body>

	<div class="panel">
		
		<?php 

			include"ceklogin.php";
			?><span>Selamat datang  :</span><?php
			echo $_SESSION['level']; ?> <p>-----</p><?php
			echo $_SESSION['nama_lengkap'];
		 ?>
	</div>
	<h1>" SELAMAT DATANG ADMIN MAESTRO "</h1>

</body>
</html>
<?php
}
else{
	header("location:index.php");
}
?>