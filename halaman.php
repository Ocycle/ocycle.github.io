

<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
$id = dapatkan_id();

$sql1   = "select * from halaman where id = '$id'";
$q1     = mysqli_query($koneksi,$sql1);
$n1     = mysqli_num_rows($q1);
$r1     = mysqli_fetch_array($q1);

$judul_halaman  = $r1['judul'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>EnviShare - Project</title>

    <link href="https://fonts.googleapis.com/css?family=Frank+Ruhl+Libre:300,400,500,700,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">

    <link rel="shortcut icon" href="assets/css/favicon.png">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/aos.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/lightcase.css">
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo url_dasar()?>/assets/css/style.css">
</head>
<body>
    <!-- search area -->
    <div class="search-area">
        <div class="search-input">
            <div class="search-close">
                <span></span>
                <span></span>
            </div>
            <form>
                <input type="text" name="text" placeholder="*Search Here.......">
            </form>
        </div>
    </div>
    <!-- search area -->

    <div class="body-wrapper">
        <!-- mobile menu start -->
        <div class="mobile-menu">
            <nav class="mobile-header primary-menu d-xl-none">
                <div class="header-logo">
                    <a href="index.html" class="logo"><img src="assets/images/Logo.png" alt="logo"></a>
                </div>
                <div class="header-bar">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </nav>
            <nav class="menu">
                <div class="mobile-menu-area d-xl-none">
                    <div class="mobile-menu-area-inner" id="scrollbar">
                        <div class="mobile-search">
                            <input type="text" placeholder="Search Here.........">
                            <button type="submit"><i class="fas fa-search"></i></button>
                        </div>
                        <ul class="m-menu">
                            <li>
                                <a href="#0">Home</a>
                                <ul class="m-submenu">
                                    <li><a href="index.html">Home Page One</a></li>
                                    <li><a href="index-2.html">Home Page Two</a></li>
                                    
                                    <li><a href="box.html">Box Layout</a></li>
                                   
                                </ul>
                            </li>
                            <li>
                                <a href="project.php">Sampah Organik</a>
                               
                            </li>
                            <li>
                                <a href="campaign.php">Campaigns</a>
                            </li>
                            <li>
                                <a href="#0">Campaigns</a>
                                <ul class="m-submenu">
                                    <li><a href="campaign.html">Campaign</a></li>
                                    <li><a href="campaign-single.html">Campaign Single</a></li>
                                </ul>
                            </li>
                            <li>
                            <a href="blog.php">Video</a>
                             </li>
                            <li>
                                <a href="#0">Shop</a>
                                <ul class="m-submenu">
                                    <li><a href="shope-page.html">Shope Page</a></li>
                                    <li><a href="shope-single.html">Shop Single</a></li>
                                    <li><a href="shope-cart.html">Cart Page</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact-us.html">Contact</a>
                            </li>
                        </ul>
                        <ul class="social-link-list d-flex flex-wrap">
                            <li><a href="#" class="facebook"><i class=" fab fa-facebook-f"></i></a></li>
                            <li><a href="#" class="twitter-sm"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                            <li><a href="#" class="google"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <!-- moboli menu ending -->


        <!-- header section start -->
        <header class="header-section d-xl-block d-none">
            <div class="header-area">
                <div class="logo">
                    <a href="index.html"><img src="assets/images/Logo.png" alt="logo"></a>
                </div>
                <div class="main-menu d-none d-xl-block">
                    <div class="top">
                        <ul class="left">
                            <li>
                                Telepon : +62-857-7744-6980 
                            </li>
                            <li>
                                Support : <a href="#">ocycle8@gmail.com</a>
                            </li>
                        </ul>
                        <ul class="right">
                            <li>
                                <a href="https://www.twitter.com/ocycleindonesia/"><i class="fab fa-twitter"></i></a>
                            </li>
                            
                            <li>
                                <a href="https://www.instagram.com/ocycleindonesia/"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <ul class="menu">
                    <li>
                            <a href="index.php">Home</a>
                        
                        </li>
                       
                        <li>
                            <a href="project.php">Sampah Organik</a>
                            
                        </li>
                        <li>
                            <a href="campaign.php">Sampah Anorganik</a>
                    
                        </li>
                        <li>
                            <a href="blog.php">Video</a>
                        </li>
                    
                        <li>
                            <a href="contact-us.php">Contact</a>
                        </li>
                    </ul>
                
                </div>
                <ul class="right-side d-none d-xl-flex">
                    <li>
                        <div class="post-thumb">
                            <img src="assets/images/logo/comment.png" alt="header">
                        </div>
                        <div class="post-content">
                            <span>Have Any Questions?</span>
                            <span>Call +02923 970 466</span>
                        </div>
                    </li>
                    <li>
                        <a class="search-start">
                            <i class="fas fa-search"></i>
                        </a>
                    </li>
                    <li class="cart">
                        <a href="#">
                            <i class="fas fa-shopping-cart"></i>
                            <span>2</span>
                        </a>
                        <div class="cart-content">
                            <div class="cart-item">
                                <div class="cart-img">
                                    <a href="#"><img src="assets/images/header/shope/01.jpg" alt="cart"></a>
                                </div>
                                <div class="cart-des">
                                    <a href="#">Product Title Hore</a>
                                    <p>$20.00</p>
                                </div>
                                <div class="cart-btn">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                            <div class="cart-item">
                                <div class="cart-img">
                                    <a href="#"><img src="assets/images/header/shope/02.jpg" alt="cart"></a>
                                </div>
                                <div class="cart-des">
                                    <a href="#">Product Title Hore</a>
                                    <p>$20.00</p>
                                </div>
                                <div class="cart-btn">
                                    <a href="#"><i class="fa fa-times"></i></a>
                                </div>
                            </div>
                            <div class="cart-bottom">
                                <div class="cart-subtotal">
                                    <p>Total: <b class="float-right">$40.00</b></p>
                                </div>
                                <div class="cart-action">
                                    <button type="submit" class="button">View cart</button>
                                    <button type="submit" class="button">Checkout</button>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </header>
        <!-- header section ending -->


<!-- page header section start here -->
<section class="page-header" style="background-image: url(assets/images/2.png); background-size: cover;">
            <div class="page-header-area">
                <div class="container">
                    <div class="page-header-content">
                        <div class="page-header-title">
                            <h2>Sampah Organik</h2>
                            <h2><span>Mengolah Sampah Makanan Mulai Dari Dalam Rumah</span></h2>
                        </div>
                        <ul class="breadcamp">
                            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                            <li><a class="active">Sampah Organik</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- page header section ending here -->
        <?php 
            if($judul_halaman == ''){
            echo "<div><p>Maaf data yang kamu maksud tidak ditemukan :(</p></div>";
            }else{
              ?>
              
             <h1><?php echo $r1['judul']?></h1>
            <?php echo set_isi($r1['isi'])?>
         <?php
}
?>

