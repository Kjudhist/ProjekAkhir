<?php
 include('koneksi.php');
 if(isset($_POST['register'])){
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

 $input = mysqli_query($con,"INSERT INTO user VALUES ('$user','$email', '$pass')") or die(mysql_error());
 
 if($input){
  header('location:header.php');
 }else{
  header('location:regist.php');
 }
}
?>