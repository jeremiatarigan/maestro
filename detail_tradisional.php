<?php 
	include "koneksi.php";
 ?>
 <style type="text/css">
 	 .jualan img:hover{
	cursor: pointer;
	-webkit-transition: -webkit-transform 1.2s;

}
 
  .jualan img:hover{
	-webkit-transform:scale(1.2);
	-moz-transform: scale(1,2);
	-o-transform:scale(1,2);
}

.gambs{
	height: 1000px;
}


 </style>

 <script type="text/javascript">
 	function btnd () {
 		document.location.href ="form_pemesan.php";
 	}
 </script>
<fieldset>
	<legend>Kategori Tradisional</legend>
	 <table width="100%" border="1px" style="border-collapse:collapse;">
	 	<tr style="background-color:gray;">
	 		<th>KodeBarang</th>
	 		<th>Nama</th>
	 		<th>Jenis</th>
	 		
	 		<th>Harga</th>
	 		<th>stock</th>
	 		<th>Gambar</th>
	 		
	 	</tr>


	 	<?php 
	 		$sql=mysql_query("SELECT * FROM tbltradisional") or die (mysql_error());
	 		while ($data = mysql_fetch_array($sql)) {
	 			?>
	 				<tr>
	 					<td> <?php echo $data ['kodebarang']  ?></td>
	 					<td> <?php  echo $data['nama'] ?> </td>
	 					<td> <?php  echo $data['jenis'] ?> </td>
	 					<td claas="gambs"> <?php  echo $data['harga'] ?> </td>
	 					<td> <?php echo $data['stock'] ?></td>	
	 					<td class="jualan"> <img src="admin/images/<?php  echo $data['gambar']; ?>" width="200px"/> </td>
	 					

	 				</tr>
	 			 <?php
	 		}
	 	 ?>


	 </table>

</fieldset>