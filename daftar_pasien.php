<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Profile User</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css">
     <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> 
    <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- haeder bar -->
            <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>            
                <h1 class="text-center">Profile User</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul>
                    <li class="tm-nav-item "><a href="beranda.php" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Beranda
                    </a></li>
                    <li class="tm-nav-item"><a href="input_kasus.php" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
                        Input Kasus
                    </a></li>
                    <li class="tm-nav-item active"><a href="daftar_pasien.php" class="tm-nav-link">
                        <i class="fas fa-users"></i>
                        Daftar Pasien
                    </a></li>
                    <li class="tm-nav-item"><a href="hubungi_kami.php" class="tm-nav-link">
                        <i class="far fa-comments"></i>
                        Hubungi Kami
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
            <p class="tm-mb-80 pr-5 text-white">
                Xtra Blog is a multi-purpose HTML template from TemplateMo website. Left side is a sticky menu bar. Right side content will scroll up and down.
            </p>
        </div>
    </header>
    <div class="container-fluid">
        <main class="tm-main">
            <!-- Search form -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="cari..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>  

            <!-- Gambar -->
            <!-- <div class="row tm-row tm-mb-45">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    <img src="img/about-01.jpg" alt="Image" class="img-fluid">
                </div>
            </div> -->

            <div class="row tm-row tm-mb-40">
                <div class="col-12">                    
                    <div class="mb-4">
                        <center>
                             <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title">Daftar Pasien Mahasiswa Koas</h2>
                         </center>
                        <!-- <h2 class="pt-2 tm-mb-40 tm-color-primary tm-post-title">Mahasiswa Koas</h2> -->
                        <!-- <p> untuk update </p> -->
                        <!-- <p> untuk update </p>  -->
                    </div>                    
                </div>  
                <!-- end -->





                <div class="row tm-row tm-mb-60">
                    <!-- bar pembatas -->
                    <div class="col-12">
                        <hr class="tm-hr-primary  tm-mb-55">
                    </div>                

                    <div class="col-lg-6 tm-mb-60 tm-person-col">
                        <div class="media tm-person">
                            <img src="img/about-02.jpg" alt="Image" class="img-fluid mr-4">
                            <div class="media-body">
                                <h2 class="tm-color-primary tm-post-title mb-2">John Malek</h2>
                                <h3 class="tm-h3 mb-3">CEO Warnet 178</h3>
                                <p class="mb-0 tm-line-height-short">
                                    Sakit gigi, ditambag gigi berlubang.Ingin membersihkan karang gigi sekaligus.
                                </p><br>
                                <p><a href="">Tangani</a></p>
                            </div>
                        </div>
                    </div>
    
                    <div class="col-lg-6 tm-mb-60 tm-person-col">
                        <div class="media tm-person">
                            <img src="img/about-03.jpg" alt="Image" class="img-fluid mr-4">
                            <div class="media-body">
                                <h2 class="tm-color-primary tm-post-title mb-2">Timy Nurdin</h2>
                                <h3 class="tm-h3 mb-3">Founder Ayam penyet </h3>
                                <p class="mb-0 tm-line-height-short">
                                    Gusi berdarah, juga saya ingin membersihkan sisi ayam penyet yang masih nyangkut di gigi saya selama kurang lebih seminggu.
                                </p>
                                <p><a href="">Tangani</a></p>

                                <!-- <div>

                                     <button class=""><a href="#">Tangani</a></button> untuk submit button nanti
                                     
                                </div> -->
                            </div>
                        </div>
                    </div>

                    <!-- ### -->
                    <div class="col-12">
                        <hr class="tm-hr-primary  tm-mb-55">
                    </div>      

                    <div class="col-lg-6 tm-mb-60 tm-person-col">
                        <div class="media tm-person">
                            <img src="img/about-04.jpg" alt="Image" class="img-fluid mr-4">
                            <div class="media-body">
                                <h2 class="tm-color-primary tm-post-title mb-2">Jay Burhan</h2>
                                <h3 class="tm-h3 mb-3">Superman</h3>
                                <p class="mb-0 tm-line-height-short">
                                    Saya ingin melakukan pemasangan gigi palsu,soalnya saya tidak peda ketika nongkrong.
                                </p>
                                <p><a href="">Tangani</a></p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-6 tm-mb-60 tm-person-col">
                        <div class="media tm-person">
                            <img src="img/about-05.jpg" alt="Image" class="img-fluid mr-4">
                            <div class="media-body">
                                <h2 class="tm-color-primary tm-post-title mb-2">IRIYANA</h2>
                                <h3 class="tm-h3 mb-3">Ibu Rumah Tangga</h3>
                                <p class="mb-0 tm-line-height-short">
                                    Saya ingin melakukan pemasangan kangat gigi, kalo bisa kawat giginya agak modif dikit.
                                </p>
                                <p><a href="">Tangani</a></p>
                            </div>
                        </div>
                    </div>
                </div>        

            <!-- Keluhan -->
            </div>
            <div class="row tm-row tm-mb-120">
                <div class="col-lg-4 tm-about-col">
                    <div class="tm-bg-gray tm-about-pad">
                        <div class="text-center tm-mt-40 tm-mb-60">
                            <i class="fas fa-bezier-curve fa-4x tm-color-primary"></i>                            
                        </div>                        
                        <h2 class="mb-3 tm-color-primary tm-post-title">
                            <center>
                            Keluhan
                            </center>
                        </h2>
                        <p class="mb-0 tm-line-height-short">
                            <center>
                            Belum ada keluhan.
                            </center>
                        </p>
                    </div>
                </div>

                <!-- Tingkat Kepuasan atau pasien ditangani -->
                <div class="col-lg-4 tm-about-col">
                    <div class="tm-bg-gray tm-about-pad">
                        <div class="text-center tm-mt-40 tm-mb-60">
                            <i class="fas fa-users-cog fa-4x tm-color-primary"></i>                            
                        </div>                        
                        <h2 class="mb-3 tm-color-primary tm-post-title">
                            <center>
                                Tingkat Kepuasan
                            </center>
                        </h2>
                        <p class="mb-0 tm-line-height-short">
                            <center>
                            Cukup Puas.
                            </center>
                        </p>
                    </div>
                </div>

                <!-- Saran dan Masukan -->
                <div class="col-lg-4 tm-about-col">
                    <div class="tm-bg-gray tm-about-pad">
                        <div class="text-center tm-mt-40 tm-mb-60">
                            <i class="fab fa-creative-commons-sampling fa-4x tm-color-primary"></i>                            
                        </div>                        
                        <h2 class="mb-3 tm-color-primary tm-post-title">Saran dan Masukan</h2>
                        <p class="mb-0 tm-line-height-short">
                        <center>Belum ada masukan.</center>
                                                    </p>
                    </div>
                </div>
            </div>       


           
            <footer class="row tm-row">
               
           
            </footer>
        </main>
    </div>
     
    <!-- js jequery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/templatemo-script.js"></script>
</body>
</html>