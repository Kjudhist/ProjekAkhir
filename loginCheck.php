<?php 
include('koneksi.php');

$username = $_POST['username'];
$password = $_POST['password'];
 
$login = mysqli_query($con,"select * from user where username='$username' and sandi='$password'");
$cek = $login->fetch_object();
 
if($cek){
	header("location:header.php");
}else{
	header("location:loginRegister.php");	
}

?>