<html>
<head>
	<title></title>
</head>
<body>
	<div class="data">
		<table>
			<tr>
				<td>Username</td>
				<td> Password</td>
				
			</tr>
			<form action="update.php" method="POST">
				<?php 
					include "../config/koneksi.php";
					$id= $_GET['id'];
					$query= mysql_query("SELECT * FROM admin WHERE id='$id'");
				 	if($query){
				 		while($row = mysql_fetch_array($query)){
				 			echo"
				 				<tr>
				 					<td><input type=\"type\" name=\"username\" value=\"" .$row['username']."\"></td>
				 					<td><input type=\"type\" name=\"Password\" value=\"" .$row['password']."\"></td>
				 					
				 					<td>
				 						<input type=\"submit\" value=\"simpan\">
				 					</td>
				 				</tr>
				 			";
				 		}
				 	}
				 ?>

			</form>
		</table>	
	</div>

</body>
</html>