<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>RSGM</title>
	<link rel="stylesheet" href="fontawesome/css/all.min.css"> <!-- https://fontawesome.com/ -->
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>
<body>
	<header class="tm-header" id="tm-header">
        <div class="tm-header-wrapper">
            <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

             <div class="tm-site-header">
                <div class="mb-3 mx-auto tm-site-logo"><i class="fas fa-times fa-2x"></i></div>            
                <h1 class="text-center">Profile User</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul>
                    <li class="tm-nav-item"><a href="beranda.php" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Beranda
                    </a></li>
                    <li class="tm-nav-item active"><a href="input_kasus.php" class="tm-nav-link">
                        <i class="fas fa-pen"></i>
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
            <!-- Search form  mana tau perlu -->
                        <!-- <div class="row tm-row">
                            <div class="col-12">
                                <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                                    <input class="form-control tm-search-input" name="query" type="text" placeholder="Cari..." aria-label="Search">
                                    <button class="tm-search-button" type="submit">
                                        <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                                    </button>                                
                                </form>
                            </div>                
                        </div>             -->

            <div class="row tm-row">
                <div class="col-12">
                    <hr class="tm-hr-primary tm-mb-55">
                    <!-- Video player 1422x800 -->
                    
                </div>
            </div>
            <div class="row tm-row">
                <div class="col-lg-8 tm-post-col">
                    <div class="tm-post-full">                    
                        <div class="mb-4">
                            <h2 class="pt-2 tm-color-primary tm-post-title">Silahkan Memasukkan Kasus Yang Akan Ditangani</h2>
                            <p class="tm-mb-40">$mount $Data posted by $username</p>

                            <!-- Input Formnya -->
                            <form action="" class="mb-5 tm-comment-form">
                                <center>
                                <h2 class="tm-color-primary tm-post-title mb-4">Input Studi Kasus</h2>
                                </center>
                                <div class="mb-4">
                                    <input class="form-control" name="name" placeholder="Nama ..." type="text">
                                </div>
                                <div class="mb-4">
                                    <input class="form-control" name="title" placeholder="Judul Kasus ..." type="text">
                                </div>
                                <div class="mb-4">
                                    <input class="form-control" name="email" placeholder="Deskripsi Kasus ..." type="text">
                                </div>

                                <div class="mb-4">
                                    <input class="form-control" name="date" placeholder="tanggal ..." type="text">
                                    <input class="form-control" name="mount" placeholder="bulan ..." type="text">
                                    <input class="form-control" name="time" placeholder="waktu ..." type="text">
                                </div>
                                



                                <div class="mb-4">
                                    <textarea class="form-control" name="message" placeholder="Keterangan Lebih lanjut ..." rows="6"></textarea>
                                </div>
                                <div class="text-right">
                                    <button class="tm-btn tm-btn-primary tm-btn-small">Submit</button>                        
                                </div>                                
                            </form>          
                            
                            <!-- <span class="d-block text-right tm-color-primary">Creative . Design . Business</span> -->
                        </div>
                        
                        <!-- Comments -->
                        <div>
                            <h2 class="tm-color-primary tm-post-title">Kasus Aktif</h2>
                            <hr class="tm-hr-primary tm-mb-45">
                            <div class="tm-comment tm-mb-45">
                                <figure class="tm-comment-figure">
                                    <img src="img/comment-1.jpg" alt="Image" class="mb-2 rounded-circle img-thumbnail">
                                    <figcaption class="tm-color-primary text-center">Samsudin</figcaption>
                                </figure>
                                <div>
                                    <p>
                                        Gusi berdarah, juga saya ingin membersihkan sisi ayam penyet yang masih nyangkut di gigi saya selama kurang lebih seminggu.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a href="#" class="tm-color-primary">Edit</a>
                                        <span class="tm-color-primary">Maret 14, 2022</span>
                                    </div>                                                 
                                </div>                                
                            </div>

                            <div class="tm-comment-reply tm-mb-45">
                                <hr>
                                <div class="tm-comment">
                                    <figure class="tm-comment-figure">
                                        <img src="img/comment-2.jpg" alt="Image" class="mb-2 rounded-circle img-thumbnail">
                                        <figcaption class="tm-color-primary text-center">Laika</figcaption>    
                                    </figure>
                                    <p>
                                        Saya ingin melakukan pemasangan kangat gigi, kalo bisa kawat giginya agak modif dikit.
                                    </p>
                                </div>                                
                                <span class="d-block text-right tm-color-primary">April 21, 2020</span>
                            </div>

                                            
                        </div>
                    </div>
                </div>
                <!-- Side Post -->
                <aside class="col-lg-4 tm-aside-col">
                    <div class="tm-post-sidebar">
                        <!-- <hr class="mb-3 tm-hr-primary"> -->
                        <!-- <h2 class="mb-4 tm-post-title tm-color-primary">Categories</h2> -->
                        <!-- <ul class="tm-mb-75 pl-5 tm-category-list">
                            <li><a href="#" class="tm-color-primary">Visual Designs</a></   li>
                            <li><a href="#" class="tm-color-primary">Travel Events</a></li>
                            <li><a href="#" class="tm-color-primary">Web Development</a></li>
                            <li><a href="#" class="tm-color-primary">Video and Audio</a></li>
                            <li><a href="#" class="tm-color-primary">Etiam auctor ac arcu</a></li>
                            <li><a href="#" class="tm-color-primary">Sed im justo diam</a></li>
                        </ul> -->

                        <hr class="mb-3 tm-hr-primary">
                        <h2 class="tm-mb-40 tm-post-title tm-color-primary">Kasus Studi</h2>
                        <a href="#" class="d-block tm-mb-40">
                            <figure>
                                <img src="img/event.png" alt="Image" class="mb-3 img-fluid">
                                <figcaption class="tm-color-primary">Perawatan dan pemeriksaan gratis</figcaption>
                            </figure>
                        </a>
                        <a href="#" class="d-block tm-mb-40">
                            <figure>
                                <img src="img/event2.png" alt="Image" class="mb-3 img-fluid">
                                
                                <figcaption class="tm-color-primary"><center> Pemeriksaan Kawat gigi gratis </center></figcaption>
                                
                            </figure>
                        </a>
                    </div>                    
                </aside>
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