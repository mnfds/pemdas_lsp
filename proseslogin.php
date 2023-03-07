<?php 
$username = $_POST["user"];
$pass = $_POST["pass"];
if($username == "schoolmart" && $pass == "schoolmart"){
    header('Location: dashboard.php','berhasil login');
}
else{
    header('Location: login.php','gagal login');
}
?>