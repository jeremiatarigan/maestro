<?php

include "koneksi.php";
if (@$_SESSION['admin'] || @$_SESSION['user'])  {
	?>
<html>
<head>
	<title>halaman produk</title>
</head>
<style type="text/css">
	tr td{
		width: 200px;
		font-size: 20px;
	}

	#cap{
		font-size: 40px;
		font-family: arial;
		text-align: center;
		background-color: #9999ff;
		padding-left: 20px;
	}

	table{
		padding-bottom: 20px;
	}
</style>
<body>
	<div>
		<div>
			<h1>Panel Product</h1>
		</div>
		<fieldset>
			<legend>Input Barang</legend>
			<form method="POST" action="input_barang.php" enctype="multipart/form-data">
			<table>
				<!--<tr>
					<td>Kode Barang</td>
					<td>:</td>
					<td><input  type="text" name="kodebarang" width="200px"/></td>
				</tr><br> -->
				<tr>
					<td>Nama </td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				
				<tr>
					<td>jenis </td>
					<td>:</td>
					<td><select name="jenis">
						<option selected value="">Jenis</option>
						<option value="dipukul">Dipukul</option>
						<option value="dipetik">Dipetik</option>
						<option value="digesek">Digesek</option>
						<option value="ditiup">Ditiup</option>
					</select>
				</td>
				</tr>
				<tr>
					<td>Kategori </td>
					<td>:</td>
					<td>
					<label for="kategori"><input type="radio" name="kategori" value="tbltradisional"/>Tradisional</label><br>
					<label for="kategori"><input type="radio" name="kategori" value="tblmodern"/>modern</label><br>
				</td>
				</tr>
				<tr>
					<td>Stock </td>
					<td>:</td>
					<td><input type="text" name="harga"></td>
				</tr>
				<tr>
					<td>Harga</td>
					<td>:</td>
					<td><input type="text" name="stock"></td>
				</tr>
				<tr>
					<td>gambar </td>
					<td>:</td>
					<td><input type="file" name="gambar" value="pilih"></td>
				</tr>
				<tr>
      <td align="left" valign="top">Garansi</td>
      <td align="left" valign="top">:</td>
      <td align="left" valign="top"><label for="stktxt"></label>
      <input type="number" name="garansitxt" id="stktxt" />&nbsp;
      	<select name="lamaWaktu">
        	<option value="day">Hari</option>
            <option value="week">Minggu</option>
            <option value="month">Bulan</option>
            <option value="year">Tahun</option>
        </select>
      </td>
    </tr>
				<tr>
					<td><input type="submit" value="simpan"></td>
					<td><input type="submit" value="reset"></td>
				</tr>	

			</table>

		</form>
		</fieldset>

		
	

	</div>

</body>
</html>
<?php
}
else{
	header("location:index.php");
}
?>