<?php 
	include "koneksi.php";

	
	$nama=$_POST['nama'];
	$jenis=$_POST['jenis'];
	$kategori=$_POST['kategori'];
	$stock=$_POST['stock'];
	$harga=$_POST['harga'];
	$garansi=$_POST['garansitxt']." ".$_POST['lamaWaktu'];

	$sumber=$_FILES['gambar']['tmp_name'];
	$target='images/';
	$nama_gambar =$_FILES['gambar']['name'];
 
	$tambah_alat=$_POST['tambah'];

	$cek=mysql_query("SELECT * FROM $kategori");
	$angka=mysql_num_rows($cek);
	$jumlah=$angka+1;
	if($kategori=='tbltradisional')
	{
		$kodebarang="Tra-$jumlah";
	}
	elseif($kategori=='tblmodern')
	{
		$kodebarang="Mod-$jumlah";
	}

	if($tambah_alat){
		if($kodebarang== "" || $nama== "" || $jenis== "" || $kategori== "" || $stock== "" || $harga="" || $gambar== "" )
		?><script type="text/javascript">alert("data barang tidak boleh kosong");</script><?php
		?><script type="text/javascript">document.location.href 'beranda.php';</script><?php
	}
	
	else{
		$pindah = move_uploaded_file($sumber ,$target.$nama_gambar);
		if($pindah){
		mysql_query("INSERT  INTO $kategori VALUES ('$kodebarang','$nama','$jenis','$stock','$harga','$nama_gambar','$garansi')");

		?><script type="text/javascript">alert("data barang telah diinput:<?Php echo $kodebarang; ?>");document.location.href='beranda.php';</script><?php
		}else{
			?><script type="text/javascript">alert("data barang gagal diinput");document.location.href='beranda.php';</script><?php
		}
	}
?>