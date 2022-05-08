<?php
session_start();
// membuat logika session
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="app">
        <h1>Login</h1>
        <?php
            if(!empty($err)){
                echo "<ul class='err'>$err</ul>";
            }
        ?>
            <form action="" method="post">
                <input type="text" name="username" valeu="<?php echo $username ?>" class="input" placeholder="nama">
                <input type="password" name="password" class="input" placeholder="password"></br>
                <input type="submit" name="login" value="Masuk Ke Sistem" >
            </form>

    </div>

    
</body>
</html>
