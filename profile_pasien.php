<!-- up. inputan ada nama pangan untuk array database -->
<?php
// session_start();
// if( !isset($_SESSION['login'])) {
//     header("Location: index.php");
//     exit;
// }

// // // koneksi
// require 'config/function.php';

// //    id url
// $id = $_GET["id"];

// // query data
// $mhs = query("SELECT * FROM studikasus WHERE id = $id")[0];

// // cek tombol submit
// if(isset($_POST["submit"])){
    
    
// // cek apakah berhasil diubah
//     if( ubah($_POST) > 0 ) {
//         echo "
//         <script>
//             alert('data berhasil  diubah');
//             document.location.href = 'beranda.php';
//         </script>
//         ";
//     } else {
//         echo "
//         <script>
//             alert('data  gagal berhasil ditambahkan');
//             document.location.href = 'edit.php?id=$id';
//         </script>
//         ";
//     }
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Edit</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/tab.ico" type="image/x-icon">

</head>
<body>
	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

             <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo">
                    
                    <i class="fas fa-plus-circle fa-3x"></i>
                </div>            
                <h1 class="text-center">Input Kasus</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul>
                    <li class="tm-nav-item"><a href="beranda.php" class="tm-nav-link">
                        <i class="fas fa-h-square"></i>
                        Beranda
                    </a></li>
                    <li class="tm-nav-item active"><a href="input_kasus.php" class="tm-nav-link">
                        <i class="fas fa-plus"></i>
                        Input Kasus
                    </a></li>
                    <li class="tm-nav-item"><a href="daftar_pasien.php" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        Daftar Pasien
                    </a></li>
                    <li class="tm-nav-item"><a href="hubungi_kami.php" class="tm-nav-link">
                        <i class="far fa-comments"></i>
                        Hubungi Kami
                    </a></li>
                    <li class="tm-nav-item"><a href="profile.php" class="tm-nav-link">
    
                        <i class="fas fa-user"></i>
                        Profile
                    </a></li>
                </ul>
            </nav>

            <div class="tm-mb-65">
                <a href="https://facebook.com" class="tm-social-link">
                    <i class="fab fa-facebook tm-social-icon"></i>
                </a>
                <a href="https://twitter.com" class="tm-social-link">
                    <i class="fab fa-twitter tm-social-icon"></i>
                </a>
                <a href="https://instagram.com" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i>
                </a>
                <a href="https://linkedin.com" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i>
                </a>
            </div>
            
        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
           

            <div class="row tm-row">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    
                    
                </div>
            </div>
            <div class="row tm-row">
                <div class="col-lg-8 tm-post-col">
                    <div class="tm-post-full">                    
                        <div class="mb-4">
                            <h2 class="pt-2 tm-color-primary tm-post-title">Mengubah Postingan Kasus</h2>
                            <!-- header text -->
                            <!-- <p class="tm-mb-40"></p> -->

                            <!-- Input Formnya -->
                            <!-- req methodnya baru post -->
                            <form action="" method="post" enctype="multipart/form-data" class="mb-5 tm-comment-form" >
                                    
                                

                                <div class="mb-4">
                                    <!-- id  -->
                                    <input name="id" type="hidden" value="<?= $mhs["id"]; ?>">
                                    <input name="gambarLama" type="hidden" value="<?= $mhs["gambar"]; ?>">

                                    <input name="nama" placeholder="Nama Penangan ..." type="text" class="form-control" oninvalid="InvalidMsg(this);"
				                    oninput="InvalidMsg(this);" required="required" 
                                    value="<?= $mhs["nama"] ?>">
                                </div>

                                <div class="mb-4">
                                    <input  name="judul" placeholder="Judul Kasus ..." type="text" class="form-control" oninvalid="InvalidMsg(this);"
				                    oninput="InvalidMsg(this);" required="required" 
                                    value="<?= $mhs["judul"] ?>">
                                </div>

                                <div class="mb-4">
                                    <input  name="deskripsi" placeholder="Deskripsi Kasus ..." type="text" class="form-control" oninvalid="InvalidMsg(this);"
				                    oninput="InvalidMsg(this);" required="required"
                                    value="<?= $mhs["deskripsi"] ?>">
                                </div>

                                <div class="mb-4">
                                    <!-- <label for="birthdaytime" class="mb-4"></label><br> -->
                                    <input type="datetime-local"  name="jadwal" class="form-control"
                                    value="<?= $mhs["jadwal"] ?>">
                                <!-- ganti type sub -->

                                    <!-- <input  name="tanggal" placeholder="tanggal ..." type="text" class="form-control">
                                    <input  name="bulan" placeholder="bulan ..." type="text" class="form-control">
                                    <input  name="tahun" placeholder="tahun ..." type="text" class="form-control"> -->
                                    <!-- perbaikan disini | db rsgm2 -->
                                </div>
                        
                                <div class="mb-4">
                                    <textarea class="form-control" name="keterangan" placeholder="Keterangan Lebih lanjut ..." rows="6" oninvalid="InvalidMsg(this);"
				                    oninput="InvalidMsg(this);" required="required" 
                                    aria-valuemax="<?= $mhs["keterangan"]; ?>"></textarea>
                                </div>

                                <div class="mb-4">
                                    <!-- input untuk upload file -->
                                    <!-- fix this untuk upload -->
                                    
                                    <img src="img/<?= $mhs["gambar"]; ?>" alt="" width="90%"><br><br>
                                    <input type="file" name="gambar" class="form-control">
                                </div>

                                <div class="text-right">
                                    <button type="submit" name="submit" class="tm-btn tm-btn-primary tm-btn-small">Ubah</button>                        
                                </div>                                
                            </form>          

<script>
		function InvalidMsg(textbox) {

            if (textbox.value === '') {
                textbox.setCustomValidity
                    ('Kolom tidak boleh kosong!                   Pastikan untuk memasukkan semua data informasi yang dibutuhkan!!');
            } else if (textbox.validity.typeMismatch) {
                textbox.setCustomValidity
                    ('Please enter an email address which is valid!');
            } else {
                textbox.setCustomValidity('');
            }

            return true;
            }
</script>






                            


                            <!-- <span class="d-block text-right tm-color-primary">Creative . Design . Business</span> -->
                        </div>
                        
                        <!-- Comments --
                    </div>
                </div>
                <!-- Side Post -->
            </div>

            <!-- buat footer -->
            <footer class="row tm-row">
               
                
            </footer>
        </main>
    </div>

    <!-- buat jquery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>