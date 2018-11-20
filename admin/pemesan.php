<?php

include "koneksi.php";
if (@$_SESSION['admin'] || @$_SESSION['user'])  {
	?>
<html>
<head>
	<title></title>
</head>
<body>
	<div>
		<h1>Panel Cart Shop</h1>
	</div>	

	<?php 
	include "koneksi.php";
 ?>

 <style type="text/css">
 	.action{
 		position: center;
 	}

 img{
 		cursor: pointer;
 	}

 	.table{
			width: 100%;
			border-collapse: collapse;
			box-shadow: 0 2px 3px 1px #ddd;
			overflow: hidden;
			border: 10px solid #FFF;

		}

		.table th ,.table td{
			vertical-align: top;
			padding: 10px 7px;
			text-align: left;
			margin:0px;
		}

		.table tbody tr :nth-child(odd){
			background: #eee;
		}

		.table td :hover{
			background: red;
			cursor: pointer;
		}
 </style>

 <script type="text/javascript">
 	function  selesai () {
 		
 	alert("Perminntaan tidak diproses"):
 	
 	document.location.href="beranda.php";
 	}
 </script>
<fieldset>
	<legend>Keranjang Belanja</legend>

	<table width="100%" border="1px" style="border-collapse=collapse" class="table">
		<tr >
			<th>Nama</th>
			<th>Alamat</th>
			<th>Telepon</th>
			<th>Email</th>
			<th>Jasa Pengiriman</th>
			<th>Id Pesan</th>
			<th colspan="2">action</th>
		</tr>

		<?php 
			$tampil=mysql_query("SELECT * From tblpemesanan") or (mysql_error());
			while($show =mysql_fetch_array($tampil)){
					?>
					<tr>
						<td><?php echo $show['nama']?></td>
						<td><?php echo $show['alamat'] ?></td>
						<td><?php echo $show['telepon'] ?></td>
						<td><?php echo $show['email'] ?></td>
						<td><?php echo $show['jasapengiriman'] ?></td>
						<td><?php echo $show['idpesan'] ?></td>
						<td class="action"><a onclick= href="del_keranjang.php?id=<?php echo $show['idpesan'] ?>">
						<img src="images/kali.png"></a></td></td>
						

					</tr>

				<?php

			}

		 ?>

	</table>
</fieldset>
</body>
</html>
<?php
}
else{
	header("location:index.php");
}
?>