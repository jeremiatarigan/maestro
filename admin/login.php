<?php session_start(); ?>
<?php  
require("koneksi.php");
$username = $_POST['username'];
$password = $_POST['password'];


$cekuser = mysql_query("SELECT * FROM admin WHERE username='$username'  && password ='$password' ");
$jumlah = mysql_num_rows($cekuser);
if($cekuser > 1) {
    $_SESSION['password'] = $password;
     header("location:beranda.php");
} 
else 
 {
    
    echo "Username Belum Terdaftar!";
   echo '<a href="index.php">Back</a>';
   echo $username;
   echo $password;
    
}
?>
     
