<?php 
	include "koneksi.php";
 ?>
<html>
<head>
	<title></title>
	
</head>
<style type="text/css">
#jualan tr td{
 	padding: 20px;
 	
 	padding-left: 30px;
 }

#jualan img:hover{
	cursor: pointer;
	-webkit-transition: -webkit-transform 1.2s;

}
 
 #jualan img:hover{
	-webkit-transform:scale(1.2);
	-moz-transform: scale(1,2);
	-o-transform:scale(1,2);
}



</style>
<body>

	<h3 class="center">TRADISIONAL</h3>
		<?php 
			include "tradisonal.php";
		 ?>
	
<div id="batas">
	<img src="images/batas.gif" height="10px;" width="950px;">
</div>
	<h3 class="center">MODERN</h3>
		
		<?php 
			include "modern.php";
		 ?>


</body>
</html>