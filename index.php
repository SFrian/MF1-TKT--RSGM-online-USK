<!-- belum ditambahkan format php -->

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
    <title>RSGM</title>
  </head>
	
  <body>
<!-- 	   -->
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="beranda.php" class="sign-in-form">
            <h2 class="title">Sign in</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <input type="submit" value="Login" class="btn solid" />
           
            
          </form>
          <form action="beranda.php" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" />
            </div>
		  
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" />
            </div>
            <div>
              <!-- <a href="beranda.html"></a> -->
                <!-- <button  type="submit" class="btn" >Sign up</button> -->
              <input type="submit" class="btn" value=" Sign up" />
            
            </div>
           
          </form>
        </div>
      </div>
	    
<!-- inframe  -->
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
	      
<!-- interaksi untuk aminasi css	       -->
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
