<?php
    include "myconnection.php";

    $username = $_POST["username"];
    $password = md5 ($_POST["password"]);

    $query = "SELECT * FROM admin WHERE username='$username' && password='$password'";
    $result = mysqli_query($connect, $query);
    $check = mysqli_num_rows($result);

    if($check>0){
        header("Location:admin.php");
    }
    else{
        header("Location:formLogin.php?error=gagal");
    }
?>