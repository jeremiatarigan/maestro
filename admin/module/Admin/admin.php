<?php 
include "/../config/koneksi.php";
if (@$_SESSION['admin'] || @$_SESSION['user'])  {
	?>
 <!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		.user{
			position: 	center;
		}

		tr th td{
			border: 1px solid black;
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
		.tab{
			margin-top: -60px;	
			text-align: left;
			margin-bottom: 30px;
		}
		.tab input{
			width: 300px;
			height: 50px;
			
		}

		.tab button	{
			width: 70px;
			height: 40px;
			background-color: orange;
			color: white;
			cursor: pointer;
			border-radius: 5px;
		}
	</style>
</head>

<body>
	<div>
		<h1 style="background-color:white;">Panel Admin</h1>
	</div>
		<div>
			<form method="POST" action="proses_simpanadmin.php">
				<table align="left" width="400px" class="tab">	
						<td>Nama Lengkap:</td><td><input type="text" name="nama_lengkap" placeholder="nama"></td><br>
						<tr><td>Username:</td><td><input type="text" name="username" placeholder="username"></td></tr><br>	
						<tr><td>Password:</td><td><input type="password" name="password" placeholder="password"></td></tr><br>
						<tr><td>No-Hp:</td><td><input type="text" name="kontak" placeholder="Kontak"></td></tr><br>	
						<tr><td>Alamat:</td><td><input type="text" name="alamat" placeholder="alamat"></td></tr>
						<tr><td>Pekerjaan:</td><td><input type="text" name="pekerjaan" placeholder="pekerjaan"></td></tr>
						<tr><td>E-mail:</td><td><input type="text" name="email" placeholde="e-mail"></td></tr>
						<tr><td>Level:</td><td>
							<select name="level">
							<option selected value="">Level</option>
							<option value="admin">Admin</option>
							<option value="user">User</option>
							</select>
						</td></tr><br>	

						<tr><td><button>simpan</button></td></tr>			
				</table>	<br>	

			</form>

		</div>
		<div>	
			<fieldset>
				<legend>Tampil User</legend>
				<table width="100%" border="2px solid black" style="border-collapse:collapse;" class="table" >
				<tr style="backgroound-color:#fc0;">
					<th>Nama</th>
					<th>Username</th>
					<th>Password</th>
					<th>Level</th>
					<th colspan=2>Action</th>
				</tr>

			<?php 
				$query=mysql_query("SELECT * FROM admin ");
				if ($query){
					while($row=mysql_fetch_array($query)){
						echo"
							<tr>
								<td>".$row['nama_lengkap']."</td>
								<td>".$row['username']."</td>
								<td>".$row['password']."</td>
								<td>".$row['level']."</td>
								<td><p><a href='module/admin/edit_admin.php ? id=".$row['id']." ''>Edit</p></td>
								<td><p><a href='module/admin/delete_admin.php ? id=".$row['id']." ''>Delete</p></td>
							</tr>
						";
					}
				}
			 ?>
			</table>
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