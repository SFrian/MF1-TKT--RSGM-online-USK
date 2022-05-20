<?php
session_start();
require 'config/function.php';

// cek cookie
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    // jika ada, cek cookie
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];
    
    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);
    
    // cek cookie dan username
    if($key === hash('sha256', $row['username'])){
        $_SESSION['login'] = true;
    }
}


if(isset($_SESSION['login'])){
    header("Location: beranda.php");
    exit;
}



    //  register
    if (isset($_POST['register'])) {

      if(registrasi($_POST) > 0 ) {
        echo "
          <script>
            alert('user baru berhasil ditambahkan');
            document.location.href = 'index.php';
          </script>
        ";
      } else {
        echo mysqli_errno($conn);
        }
        
   
    }

    // login
    if (isset($_POST['login'])) {
      $username = $_POST['username'];
      $password = $_POST['password'];

      $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

      // CEK USERNAME DAN PASSWORD
      if(mysqli_num_rows($result) === 1) {
        // password
        $row = mysqli_fetch_assoc($result);
        if(password_verify($password, $row['password'])) {
          // set session

          $_SESSION['login'] = true;

          // cek remember me
          if(isset($_POST['remember'])) {
            // buat cookie
            setcookie('id', $row['id'], time() + 60);
            setcookie('key', hash('sha256', $row['username']), time()+60);
            
          }

          header('Location: beranda.php');
          exit;
        }
      }

      $error = true;

    }

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style_log.css" />
    <link rel="shortcut icon" href="img/tab.ico" type="image/x-icon">
    <title>RSGM-Sign</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">

          <!-- form untuk sign in -->
          <form action="" method="post" class="sign-in-form" >
            <h2 class="title">Sign in</h2>

<?php if (isset($error)) : ?>
            <p style="color: red; font-style: italic;">
              username / password salah
            </p>
<?php endif; ?>

            <!-- username -->
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" autocomplete="off" />
            </div>

            <!-- password -->
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" autocomplete="off" />
            </div>

            <label for="remember">Remember me :</label>
            <input type="checkbox" name="remember" id="remember">

            <input type="submit" name="login" value="Login" class="btn solid" />
          </form>


          <!-- form untuk sign up -->
          <form action=""  method="POST" class="sign-up-form">
            <h2 class="title">Sign up</h2>

            <!-- username -->
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" name="username" placeholder="Username" autocomplete="off" />
            </div>
            
            <!-- password -->
            <div class="input-field">
            <i class="fas fa-lock"></i>
              <input type="password" name="password" placeholder="Password" autocomplete="off" />
            </div>

            <!-- password -->
            <div class="input-field"> 
              <i class="fas fa-lock"></i>
              <input type="password" name="password2" placeholder="Konfirmasi Password" autocomplete="off"/>
            </div>

            <div>
              <button type="submit" name="register" class="btn" >Register</button>
            </div>
           
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Belum punya akun ?</h3>
            <p>
              Ayo daftar sekarang dan mulai menggunakan layanan kami! 
            </p>
            <button class="btn transparent" id="sign-up-btn"> 
              Sign up
            </button>
          </div>
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Sudah punya akun ?</h3>
            <p>
              Ayo berselancar dan mulai menggunakan layanan kami!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
        
        </div>
      </div>
    </div>

    <script src="js/app.js"></script>
  </body>
</html>
