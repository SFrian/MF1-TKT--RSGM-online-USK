<?php
session_start();
if( !isset($_SESSION['login'])) {
    header("Location: index.php");
    exit;
}


// koneksi database
   require 'config/function.php';
   // paginasi
   // konfigurasikan pagination
   $jumlahDataPerHalaman = 4; 
   $jumlahData = count(query("SELECT * FROM studikasus")); 
   $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
   // op ternari
   $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
   $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;   






   $studikasus = query("SELECT * FROM studikasus ORDER BY id DESC LIMIT $awalData,$jumlahDataPerHalaman");
//    ORDER BY id DESC

//  Button cari 
// live search
if(isset($_POST["cari"]) ){
    $studikasus = cari($_POST["keyword"]);

} 


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RSGM</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> 
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

            <!-- header bar -->
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>            
                <h1 class="text-center">RSGM</h1>
                <!-- <h1 class="text-center">Profile User</h1> -->
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul>
                    <li class="tm-nav-item active"><a href="beranda_pasien.php" class="tm-nav-link">
                        
                        <i class="fas fa-h-square"></i>
                        Beranda
                    </a></li>
                    
                      <!-- <li class="tm-nav-item"><a href="profile_pasien.php" class="tm-nav-link">
    
                        <i class="fas fa-user"></i>
                        Profile
                    </a></li> -->

                    <li class="tm-nav-item"><a href="hubungi_kami_pasien.php" class="tm-nav-link">
                        <i class="far fa-comments"></i>
                        Hubungi Kami
                    </a></li>

                  
                    
                </ul>
            </nav>
            
            <!-- icon soscial media -->
            <div class="tm-mb-100">
                <a rel="nofollow" href="logout.php" class="tm-social-link">
                    <i class="fas fa-sign-out-alt tm-social-icon"></i>
                </a>
                <!-- <a href="https://twitter.com" class="tm-social-link">
                    <i class="fab fa-twitter tm-social-icon"></i>
                </a>
                <a href="https://instagram.com" class="tm-social-link">
                    <i class="fab fa-instagram tm-social-icon"></i>
                </a>
                <a href="https://linkedin.com" class="tm-social-link">
                    <i class="fab fa-linkedin tm-social-icon"></i>
                </a> -->
            </div>
            
        </div>
    </header>

    <div class="container-fluid">
   

        <main class="tm-main">

            
            <div class="row tm-row">
                <div class="col-12">
                    <!-- Form Untuk pencarian  -->
                    <form action="" method="post" class="form-inline tm-mb-80 tm-search-form">   
                                        <!-- input pencarian -->
                        <input autofocus  class="form-control tm-search-input" name="keyword" 
                                type="text" placeholder="Cari..." aria-label="Search" autocomplete="off">
                                        <!-- tombol Button -->
                        <button class="tm-search-button" type="submit" name="cari">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>   

            <div class="row tm-row">


    <?php foreach( $studikasus as $row) : ?>
                <article class="col-12 col-md-6 tm-post">

                    <hr class="tm-hr-primary">
                    <a href="post.html" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="img/<?= $row["gambar"]; ?>" alt="Image" class="img-fluid">                            
                        </div>

                        <span class="position-absolute tm-new-badge">Baru</span>

                        <!-- element judul -->
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title" ><?= $row["judul"]; ?></h2>
                    </a>               
                        <!-- deskripsi -->
                    <p class="tm-pt-30">
                        <?= $row["deskripsi"]; ?>
                    </p>

                    <div class="d-flex justify-content-between tm-pt-45">
                        <!-- keterangan -->
                        <span class="tm-color-primary">
                            <?= $row["keterangan"]; ?>
                        </span>

                        <!-- tanggal bulan dan waktu -->
                        <span class="tm-color-primary"><?= $row["jadwal"]; ?></span>
                    </div>
                    <hr>

                    <div class="d-flex justify-content-between">
                        <span>Dipublish oleh :</span>
                        <!-- nama disini -->
                        <span><?= $row["nama"]; ?></span>
                    </div>
                    <div class="d-flex justify-content-between">
                        
                        <a href="cetak.php" class="tm-color-primary">Pilih</a>
                        <!-- Ubah postingan -->
                        
                        
                    </div>
                </article>

                <!-- fix article -->


    <?php endforeach; ?>

                <!-- span artikel kosong -->
                <!-- buat next row atau pages -->
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="post.html" class="effect-lily tm-post-link tm-pt-20">
                        <div class="tm-post-link-inner">
                        </div>
                        
                    </a>                    
                </article>

                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="post.html" class="effect-lily tm-post-link tm-pt-20">
                    </a>                    
                </article>
            </div>

            <div class="row tm-row tm-mt-100 tm-mb-75">
                <!-- next or previous pages  -->
                <div class="tm-prev-next-wrapper">
            <?php if( $halamanAktif > 1 ) : ?>
                    <a href="?halaman=<?= $halamanAktif -1; ?>" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Prev</a>
                    
            <?php else : ?>
                    <a href="?halaman=<?= $halamanAktif -1; ?>" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
                    
            <?php endif; ?>

            <?php if( $halamanAktif < $jumlahHalaman ) : ?>
                    
                    <a href="?halaman=<?= $halamanAktif +1; ?>" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
            <?php else : ?>
                    
                    <a href="?halaman=<?= $halamanAktif +1; ?>" class="mb-2 tm-btn tm-btn-primary disabled tm-prev-next">Next</a>
            <?php endif; ?>


                </div>

                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Page</span>
                    <nav class="tm-paging-nav d-inline-block">

            <!-- pengulangan pagination -->
                        <ul>
            <?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
                            <?php if( $i == $halamanAktif ) : ?>   
                            <li class="tm-paging-item active">
                                <a href="?halaman=<?= $i; ?>" class="mb-2 tm-btn tm-paging-link"><?= $i; ?></a>
                            </li>
                            <?php else : ?>
                            <li class="tm-paging-item">
                                <a href="?halaman=<?= $i; ?>" class="mb-2 tm-btn tm-paging-link"><?= $i; ?></a>
                            </li>

                            <?php endif; ?>
            <?php endfor; ?>
                        </ul>

                    </nav>
                </div>                
            </div>            
            <footer class="row tm-row">

            </footer>
        </main>



    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>