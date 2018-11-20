<html>
<head>
	<title>Form Pemesan</title>
	<style type="text/css">
		fieldset{
			background-color: orange;
		}
		.tab input{
			width: 300px;
			height: 40px;
		}
		.tab select{
			width: 300px;
			height: 40px;
		}
	</style>
</head>
<body>


	<div>
		<form action="proses_pemesanan.php" method="POST">

			<fieldset>
			<legend><h2>Form Pemesan</h2></legend>
			<table class="tab" align="center">
				<tr>
					<td>id pesan</td><td><input type="text "  name="idpesan" value="<?php echo $_GET['id'] ?>"></td>
				</tr>
				<tr hidden>
					<td>Id  :</td><td><input type="text" name="id" placeholder="id"></td>
				</tr>
				<tr>
					<td>Nama  :</td><td><input type="text" name="nama" placeholder="nama"></td>
				</tr>
				<tr>
					<td>Alamat:</td><td><input type="text" name="alamat" placeholder="alamat"></td>
				</tr>
				<tr>
					<td>Telepon:</td><td><input type="text" name="telepon" placeholder="Telepon"></td>
				</tr>
				<tr>
					<td>Email   :</td><td><input type-"text" name="email" placeholder="Email"></td>
				</tr>	
				<tr>
					<td>Jasa Pengiriman</td>
					<td><select name="jasapengiriman"> Jasa Pengiriman
						<option value="Jne">JNE</option>
						<option value="Tiki">TIKI</option>

					</select></td>
				</tr>
				<tr>
					<td>Kota Tujuan :</td><td>
					<select name="kotatujuan">
						<option value="Medan">Medan</option>
						<option value="Riau">Riau</option>
						<option Value="Pekan baru">PekanBaru</option>
						<option value="Dolok sanggul">Dolok Sanggul</option>

				</select></td>
				</tr>

				<tr>
					<td><input type="submit" name="save" value="save"></td><td><input type="submit" value="reset"></td>
				</tr>

			</table>

		</fieldset>
		</form>
	</div>

</body>
</html>