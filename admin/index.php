<!Doctype html> 
<html>
<head>
	<title>admin</title>
	<style type="text/css">
		#utama{
			width: 300px;
			margin:0 auto;
			margin-top: 12%;
			box-shadow: 10px 10px 10px #336666;
		}    

		#judul{
			padding:15px;
			text-align: center;
			color: #fff;
			font-size: 20px;
			background-color: orange;
			border-top-right-radius: 10px;
			border-top-left-radius: 10px;
			border-bottom: 3px solid #336666;
		}

		input{
			padding: 10px;
		}

		#inputan{
			background-color: #ccc;
			padding: 20px;
			border-bottom-right-radius: 10px;
			border-bottom-left-radius: 10px;
		}

		.lg{
			width: 240px;
		}

		.btn{
			background-color: #339966;
			border-radius: 10px;
			color: #fff;
		}

		.btn:hover{
			background-color: #e97212;
			cursor: pointer;
		}

	#inputan:hover{
			-webkit-trasnform :scale(1,2);
			-moz-transform :scle(1,2);
			-o-transform:scale(1,2);
			cursor: pointer;
		}




	</style>
</head>
<body>
<div id="utama">         
		<div id="judul">
			Halaman Login
		</div>
	<div id="inputan">
		<form action="ceklogin.php" method="POST" >
		
			<div>
				<input type="text" name="username" placeholder="username" class="lg" />
			</div>
			<div style="margin-top:10px">
				<input type="password" name="password" placeholder="password" class="lg" />
			</div>
			<div style="margin-top:10px">
				<input type="submit" name="login" value="login" class="btn">
			</div>	
		
		 
	</form>

	
	</div>

	

</div>
</body>
</html>