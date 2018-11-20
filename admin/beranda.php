<?php session_start();

include "koneksi.php";
if (@$_SESSION['admin'] || @$_SESSION['user'])  {
	?>
	<html>
<head>
	<title>Administrator</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="wrapper">
		<?php 
			include ("header.php");
			include ("konten.php");
			include ("footer.php");

		 ?>


	</div>

</body>
</html>
<?php
}
else{
	header("location:index.php");
}
?>
