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
                <h1 class="text-center">Profile User</h1>
            </div>
            <nav class="tm-nav" id="tm-nav">            
                <ul>
                    <li class="tm-nav-item active"><a href="beranda.php" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Beranda
                    </a></li>
                    <li class="tm-nav-item"><a href="input_kasus.php" class="tm-nav-link">
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
                <a rel="nofollow" href="https://fb.com/templatemo" class="tm-social-link">
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

            <!-- Form Untuk pencarian  -->
            <div class="row tm-row">
                <div class="col-12">
                    <form method="GET" class="form-inline tm-mb-80 tm-search-form">                
                        <input class="form-control tm-search-input" name="query" type="text" placeholder="Cari..." aria-label="Search">
                        <button class="tm-search-button" type="submit">
                            <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                        </button>                                
                    </form>
                </div>                
            </div>            
            <div class="row tm-row">
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="post.html" class="effect-lily tm-post-link tm-pt-60">
                        <div class="tm-post-link-inner">
                            <img src="img/img-02 - Copy.jpg" alt="Image" class="img-fluid">                            
                        </div>
                        <span class="position-absolute tm-new-badge">Baru</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">Kasus Yang Baru Dipublis</h2>
                    </a>                    
                    <p class="tm-pt-30">
                        Disini berisikan contoh inputan kasus berserta keterangan info lanjutan dari kasus yang diinput mahasiswa.
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Pemeriksaan  . Rutin</span>
                        <span class="tm-color-primary">April 18, 2022</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>Dipublish oleh :</span>
                        <span>Eren Jeagar</span>
                    </div>
                </article>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="post.html" class="effect-lily tm-post-link tm-pt-60">
                        <div class=" tm-post-link-inner">
                            <img src="img/img-02 - Copy.jpg" alt="Image" class="img-fluid">                            
                        </div>
                        <span class="position-absolute tm-new-badge">Baru</span>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">Pemeriksaan Kesehatan Gigi Gratis</h2>
                    </a>                    
                    <p class="tm-pt-30">
                        Disini berisikan contoh inputan kasus berserta keterangan info lanjutan dari kasus yang diinput mahasiswa.  
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Pemeriksaan . Gratis</span>
                        <span class="tm-color-primary">April 31, 2022</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <!-- ini bisa diisikan ditangani? -->
                        <span>Dipublish oleh</span> 
                        <span>Mahasiswa Koas</span>
                    </div>
                </article>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="post.html" class="effect-lily tm-post-link tm-pt-20">
                        <div class="tm-post-link-inner">
                            <img src="img/img-02 - Copy.jpg" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">Example Case 1</h2>
                    </a>                    
                    <p class="tm-pt-30">
                       Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae culpa, in libero et doloremque quae facere commodi voluptatibus nemo quia! Necessitatibus impedit temporibus et ullam nobis autem cum sed deleniti!
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Music . Audio</span>
                        <span class="tm-color-primary">June 11, 2024</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>Dipublish oleh</span>
                        <span>Mahasiswa Koas</span>
                    </div>
                </article>
                <article class="col-12 col-md-6 tm-post">
                    <hr class="tm-hr-primary">
                    <a href="post.html" class="effect-lily tm-post-link tm-pt-20">
                        <div class="tm-post-link-inner">
                            <img src="img/img-02 - Copy.jpg" alt="Image" class="img-fluid">
                        </div>
                        <h2 class="tm-pt-30 tm-color-primary tm-post-title">Example Case 2 </h2>
                    </a>                    
                    <p class="tm-pt-30">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, repellat illum! Officia similique dolore minima, commodi nobis doloribus praesentium ipsa odio quia. Iusto ab aliquid temporibus molestiae enim reiciendis et!
                    </p>
                    <div class="d-flex justify-content-between tm-pt-45">
                        <span class="tm-color-primary">Pemeriksaan . Kasus</span>
                       
                        <span class="tm-color-primary">June 4, 2024</span>
                    </div>
                    <hr>
                    <div class="d-flex justify-content-between">
                        <span>Dipublish oleh</span>
                        <span> Mahasiswa Koas</span>
                    </div>
                </article>
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
                <div class="tm-prev-next-wrapper">
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>
                    <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>
                </div>
                <div class="tm-paging-wrapper">
                    <span class="d-inline-block mr-3">Page</span>
                    <nav class="tm-paging-nav d-inline-block">
                        <ul>
                            <li class="tm-paging-item active">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>
                            </li>
                            <li class="tm-paging-item">
                                <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>
                            </li>
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