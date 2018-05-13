<?php
 include('koneksi.php');
 if(isset($_POST['register'])){
$user = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];

 $input = mysqli_query($con,"INSERT INTO user VALUES ('$user','$email', '$pass', NULL, NULL)") or die(mysql_error());
 
 if($input){
    session_start();
    $_SESSION['username'] = $username;
    header('location:profile.php');
 }else{
  header('location:regist.php');
 }
}
?>