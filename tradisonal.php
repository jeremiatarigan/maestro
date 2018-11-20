<?php 
	include "koneksi.php";
 ?>
 <style type="text/css">
.card{
	height: 270px;
	width: 250px !important;
	background-color:#ffccbc ;
	float: left;
	margin-right: 30px;
	margin-left: 20px;
	box-shadow: 5px 5px 5px rgba(0,0,0,0.5);

} 

.gambar img{
	height: 100px;
	width: 200px;
	padding-left: 50px;
}

.button	{
	padding-left: 60px;
	padding-top: 20px;
}
.harga	{
	padding-left: 80px;
	padding-top: 20px;
}
.nama	{
	padding-left: 80px;
	padding-top: 10px;
	padding-top: 10px;
	font-size: 25px;
	color: #F57C00;
	font-weight: bold;

}
 </style>
 <script type="text/javascript">
 	function btn () {
 		document.location.href="form_pemesan.php";
 	}
 </script>
<fieldset>
	<legend>Kategori Tradisonal</legend>
	 
	 	

	 	<?php 
	 	if (isset($_POST['inputan_pencarian']))
	 	{
	 		$sql=mysql_query("SELECT * FROM tbltradisional where nama like '%$_POST[inputan_pencarian]%'") or die (mysql_error());
	 	}
	 	else
	 	{
	 		$sql=mysql_query("SELECT * FROM tbltradisional") or die (mysql_error());
	 	}
	 		
	 		while ($data = mysql_fetch_array($sql)) {
	 			?>	
	 			
	 				<div class="card">
	 					
	 					<div class="nama"><?php echo $data['nama'] ?></div>	
	 					
	 					<div class="gambar"><img src="admin/images/<?php echo $data['gambar']  ?> " class="materialboxed responsive-img"></div>
	 					<div style="clear:both;"></div>
	 					<div class="harga"><span>Rp.</span><?php echo $data['harga'] ?></div>	
	 					<div class="button">
	 						 <a class="waves-effect waves-light btn-small orange darken-3"onclick="btn()"href="index.php?page=beli&id=<?php echo $data['kodebarang']; ?>"> 
	 						 	Beli
	 						 </a>
	 						<a class="waves-effect waves-light btn-small  orange darken-3" onclick="btnd()"href="index.php?page=detailmodern"> 
	 							Detail
	 						</a> 
	 					</div>
	 				

	 			</div>															
	 					
	 			
	 			 <?php
	 		}
	 	 ?>


	

</fieldset>