 
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	#bagianmenu{
		float: left;
		width: 200px;
		background: -webkit-gradient(linear,0 0,0 100%,from(red),to(white));
		background: -webkit-linear-gradient(red,white);
		background: -moz-linear-gradient(red,white);
		background: -o-linear-gradient(red,white);
		overflow: hidden;
		margin-bottom: 2px;
		margin-top:2px; 
		border-radius: 10px;
		background-repeat: no-repeat;
	}

	#bagianmenu ul{
		cursor: pointer;
		display: block;
		
	}

	#bagianmenu li{
		padding-bottom: 10px;
		text-decoration:none;
		color: white;
		display :block;
		-webkit-transition:all 0,3s ease-in;
		-moz-transition:all 0,3s ease-in;
		-0-transition:all 0,3s ease-in;

	}

	#bagianmenu li:hover{
		background-color: yellow;
		font-size: 20px;
		display :block;

	}

	#bagianisi{
		float: left;
		width: 710px;
		background: -webkit-gradient(linear,0 0,0 100%,from(#3a332d),to(white));
		background: -webkit-linear-gradient(#3a332d,white);
		background: -moz-linear-gradient(#3a332d,white);
		background: -o-linear-gradient(#3a332d,white);
		margin-bottom: 2px;
		margin-top: 2px;
		border-radius: 10px;
		margin-left: 10px;
		padding-bottom: 2px;		
	}
	
</style>
<body>

	<div id="bagianmenu">
		<ul>
			<li><a href="?page=home">Home</a></li>
			<?php if( $_SESSION ['level']=='admin')
			{


			 ?>
			<li><a href="?page=admin">Admin</a></li>
			<li><a href="?page=pemesan">Daftar Pemesan</a></li>
			<?php 
				}
			 ?>
			<li><a href="?page=product">Product</a></li>
			
			<!--<li><a href="?page=laporan">Laporan  Penjualan</a></li>-->
			<li><a href="?page=logout">Logout</a></li>
		</ul>

	</div>

	<div clear:both></div>
	

	<div id="bagianisi">
		<?php 

			$page=@$_GET['page'];

			if ($page=='home'){               
			    if ($_SESSION['level']=='admin' OR $_SESSION['level']=='user'){
			      include "home.php";
			    }  
			  }

			if ($page=='admin'){               
			    if ($_SESSION['level']=='admin' ){
			      include "module/admin/admin.php";
			    }  
			  }

			elseif ($page=='product')
			 {
				if ($_SESSION['level']=='admin' OR $_SESSION['level']=='user') {
					include"product.php";
				}
			}

			/*elseif ($page=="laporan")
			 {
				include "laporan.php";
			}*/
			elseif ($page=='pemesan')
			 {
				if ($_SESSION['level']=='admin') {
					include"pemesan.php";
				}
			}

			elseif ($page=="logout")
			 {
				include "logout.php";
			}
			
		 ?>
	</div>

</body>
</html>