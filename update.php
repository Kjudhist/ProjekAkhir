<?php
include("koneksi.php");
if(isset($_POST['save'])){
    $username   = $_POST['username'];
    $blog       = $_POST['blog'];
    $email      = $_POST['email'];
    $phone      = $_POST['phone'];
    $password   = $_POST['password'];
    session_start();
    if (empty($_SESSION['username'])){
        header("location:loginRegister.php");
    }else{
        $q=mysqli_query($con,"UPDATE user SET username='$username', blog='$blog', email='$email', phone='$phone' where sandi='$password'");
        $r = mysqli_query($con, $q);
        session_destroy();   
    if($r){
        
        header('location:profile.php');
    }else{
        header('location:profilEdit.php');
    }
}   
}
?>