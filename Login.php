<?php
session_start();
if (isset($_SESSION['admin_username'])) {
    header("location:admin_depan.php");
}

include("inc_koneksi.php");
$username = "";
$password = "";
$err = "";
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if($username == "" or  $password == ""){
        $err .= "<li>Silahkan massukkan  Username atau Password</li>";
    }
    if(empty($err)){
        $sql1 = "select * from admin where username = '$username'";
        $q1 = mysqli_query($koneksi, $sql1); 
        $r1 = mysqli_fetch_array($q1);
        if ($r1['password'] != md5($password)) {
            $err .= "<li>Akun tidak ditemukan</li>";
        }
    }
    if(empty($err)) {
        $login_id = $r1['login_id'];
        $sql1 = "select * from admin_akses where login_id = '$login_id'";
        $q1 = mysqli_query($koneksi,$sql1);
        while ($r1 = mysqli_fetch_array($q1)) {
            $akses[] = $r1['akses_id']; //spp,guru dan siswa

        }
        if  (empty($akses)) {
            $err .= "<li> kamu tidak memiliki akses ke  halaman admin</li>";
        }
    }
    if(empty($err)) {
         $_SESSION['admin_username'] = $username;
         $_SESSION['admin_akses'] = $akses;
         header("location:admin_depan.php");
        exit();
    }
}

?> 