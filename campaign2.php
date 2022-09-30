<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>
<?php include("inc_header.php")?>
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

        <!-- campaign section start -->
        <section class="campaign-section style-two style-three padding-tb">
            <div class="container">
                <div class="section-wrapper">
                    <div class="post-item" data-aos="fade-up" data-aos-duration="700">
                        <div class="post-inner">
                            <div class="post-thumb style-2">
                            <a href="#"><img src="gambar/totebag.jpeg" alt="campaign"></a>
                                <div class="post-thumb-content">
                                    
                                </div>
                            </div>
                            <div class="post-content">
                            
                            <h4><a href="<?php echo buat_link_tutors('9') ?>">Pouch atau totebag serbaguna</a></h4>
                            <?php echo maximum_kata(ngambil_isi('9'),30) ?> </p>
                                <a href="<?php echo buat_link_tutors('9') ?>" class="custom-btn">Pelajari lebih Lanjut <i class="fas fa-angle-double-right"></i></a>
                    
                            </div>
                        </div>
                    </div>
                    <div class="post-item" data-aos="fade-up" data-aos-duration="700">
                        <div class="post-inner">
                            <div class="post-thumb style-2">
                                <a href="#"><img src="gambar/lampu.jpeg" alt="campaign"></a>
                                <div class="post-thumb-content">
                                   
                                        
                                        <div class="skillbar" data-percent="">
                                        
                                        </div>
                                    
                                </div>
                            </div>
                            <div class="post-content">
                            <h4><a href="<?php echo buat_link_tutors('10') ?>">Lampu hias dari botol plastik</a></h4>
                            <?php echo maximum_kata(ngambil_isi('10'),30) ?> </p>
                                <a href="<?php echo buat_link_tutors('10') ?>" class="custom-btn">Pelajari lebih Lanjut <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
    
                    <div class="post-item" data-aos="fade-up" data-aos-duration="700">
                        <div class="post-inner">
                            <div class="post-thumb style-2">
                                <a href="#"><img src="gambar/bunga2.jpeg" alt="campaign"></a>
                                <div class="post-thumb-content">
                                   
                                        
                                        <div class="skillbar" data-percent="">
                                        
                                        </div>
                                    
                                </div>
                            </div>
                            <div class="post-content">
                            <h4><a href="<?php echo buat_link_tutors('11') ?>">Bunga Plastik</a></h4>
                            <?php echo maximum_kata(ngambil_isi('11'),30) ?> </p>
                                <a href="<?php echo buat_link_tutors('11') ?>" class="custom-btn">Pelajari lebih Lanjut <i class="fas fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
            
                </div>
                <ul class="pagination" data-aos="fade-up" data-aos-duration="700">
                <li><a href="campaign.php" >1</a></li>
                <li><a href="campaign2.php" class="active" >2</a></li>
                <li class="next"><a href="campaign2.php"><i class="fas fa-angle-double-right"></i></a></li>>
                </ul>
            </div>
        </section>
        <!-- campaign section ending here -->



        <?php include("inc_footer.php")?>


    <!-- scroll to top -->
    <a href="#" class="scrollToTop"><i class="fas fa-angle-up"></i></a>
    <!-- scroll to top -->



    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/fontawesome.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/lightcase.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/swiper.min.js"></script>
    <script src="assets/js/progress.js"></script>
    <script src="assets/js/aos.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/map-custom.js"></script>
    <script src='assets/js/slick.min.js'></script>
    <script src="assets/js/theia-sticky-sidebar.js"></script>
    <script src="assets/js/functions.js"></script>
</body>
</html>