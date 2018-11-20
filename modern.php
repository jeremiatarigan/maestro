<?php 
	include "koneksi.php";
 ?>
  <style type="text/css">

 </style>
 <script type="text/javascript">
 	function btn () {
 		document.location.href="form_pemesan.php";
 	}
 </script>
<fieldset>
	<legend>Kategori Modern</legend>
	 
	 	

	 	<?php 
	 	if (isset($_POST['inputan_pencarian']))
	 	{
	 		$sql=mysql_query("SELECT * FROM tblmodern where nama like '%$_POST[inputan_pencarian]%'") or die (mysql_error());
	 	}
	 	else
	 	{
	 		$sql=mysql_query("SELECT * FROM tblmodern") or die (mysql_error());
	 	}
	 		
	 		while ($data = mysql_fetch_array($sql)) {
	 			?>	
	 		
	 				<div class="card">
	 					<div class="nama"><?php echo $data['nama'] ?></div>	
	 					
	 					<div class="gambar"><img class="materialboxed responsive-img" src="admin/images/<?php echo $data['gambar'];  ?> " ></div>
	 					
	 					<div class="harga"><span>Rp.</span><?php echo $data['harga'] ?></div>	
	 					<div class="button">
	 						 <a class="waves-effect waves-light btn-small orange darken-3 onclick="btn()"href="index.php?page=beli&id=<?php echo $data['kodebarang']; ?>">
	 						 	Beli
	 						 </a>
	 						<a class="waves-effect waves-light btn-small orange darken-3 onclick="btnd()"href="index.php?page=detailmodern">
	 							Detail
	 						</a> 
	 					</div>
	 				

	 			</div>															
	 					
	 			
	 			 <?php
	 		}
	 	 ?>


	

</fieldset>