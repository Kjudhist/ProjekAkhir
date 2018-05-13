<?php
include("koneksi.php");
$username   = $_POST['username'];
$blog       = $_POST['blog'];
$email      = $_POST['email'];
$phone      = $_POST['phone'];
$password   = $_POST['password'];

$query=mysqli_query($con,"UPDATE user SET username='$username',blog='$blog',phone='$phone', sandi='$password'");
$r = mysqli_query($con, $query);

if($input){
    $username = $_POST['username'];
    $password = $_POST['password'];
     
    $login = mysqli_query($con,"select * from user where username='$username' and sandi='$password'");
    $cek = $login->fetch_object();
    session_start();
    $_SESSION['username'] = $username;
    header('location:profile.php');
 }else{
  header('location:profilEdit.php');
 }

?>