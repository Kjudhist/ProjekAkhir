<?php
include("koneksi.php");
if(isset($_POST['save'])){
    session_start();
    if (empty($_SESSION['username'])){
        header("location:loginRegister.php");
    }else{
        $username   = $_POST['username'];
        $blog       = $_POST['blog'];
        $email      = $_POST['email'];
        $phone      = $_POST['phone'];
        $password   = $_POST['password'];

        $q=mysqli_query($con,"UPDATE user SET username='$username', blog='$blog', email='$email', phone='$phone', sandi='$password'where username='".$_SESSION['username']."'");
        $r = mysqli_query($con, $q);
    }
    if($r){
        header('location:profile.php');
    }else{
        header('location:profilEdit.php');
    }
}   
?>