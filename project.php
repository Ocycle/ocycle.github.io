<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>
<?php include("inc_header.php")?>

        <!-- page header section start here -->
        <section class="page-header" style="background-image: url(assets/images/banner7.png); background-size: cover;">
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


        <!-- Our project section start here -->
        <section class="project-section style-2 padding-tb">
            <div class="container">
                <div class="section-wrapper">
                    <div class="post-item">
                        <div class="post-thumb" data-aos="fade-right" data-aos-duration="700">
                            <a href="<?php echo buat_link_halaman('11') ?>"><img src="gambar/komposss.png" alt="project"></a>
                        </div>
                        <div class="post-content" data-aos="fade-left" data-aos-duration="700">
                        <h4><a href="<?php echo buat_link_halaman('11') ?>">Cara Membuat Pupuk Kompos dari Sampah Organik Rumah Tangga</a></h4>
                            
                            <?php echo maximum_kata(ambil_isi('11'),30) ?> </p>
                            <a href="<?php echo buat_link_halaman('11') ?>" class="custom-btn">Pelajari lebih Lanjut <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="post-thumb" data-aos="fade-right" data-aos-duration="700">
                            <a href="<?php echo buat_link_halaman('7') ?>"><img src="gambar/biogas.jpg" alt="project"></a>
                        </div>
                        <div class="post-content" data-aos="fade-left" data-aos-duration="700">
                        <h4><a href="<?php echo buat_link_halaman('7') ?>">Pembuatan Biogas Sederhana untuk Rumah Tangga</a></h4>
                            <ul>
                                <li><i class="fas fa-folder-open"></i><a href="#">Environment & Ecology</a></li>
                                <li><i class="fas fa-home"></i><a href="#">Sahera Tropical Center 218</a></li>
                            </ul>
                            <?php echo maximum_kata(ambil_isi('7'),30) ?> </p>
                            <a href="<?php echo buat_link_halaman('7') ?>" class="custom-btn">Pelajari lebih Lanjut <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="post-thumb" data-aos="fade-right" data-aos-duration="700">
                            <a href="<?php echo buat_link_halaman('6') ?>""><img src="gambar/pupuk.jpg" alt="project"></a>
                        </div>
                        <div class="post-content" data-aos="fade-left" data-aos-duration="700">
                        <h4><a href="<?php echo buat_link_halaman('6') ?>">Mengolah Sampah Dapur Jadi Pupuk Organik Cair</a></h4>
                            <ul>
                                <li><i class="fas fa-folder-open"></i><a href="#">Environment & Ecology</a></li>
                                <li><i class="fas fa-home"></i><a href="#">Sahera Tropical Center 218</a></li>
                            </ul>
                            <?php echo maximum_kata(ambil_isi('6'),30) ?> </p>
                            <a href="<?php echo buat_link_halaman('6') ?>" class="custom-btn">Pelajari lebih Lanjut <i class="fas fa-angle-double-right"></i></a>
                            
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="post-thumb" data-aos="fade-right" data-aos-duration="700">
                            <a href="<?php echo buat_link_halaman('5') ?>"><img src="gambar/ecoenzimm.jpg" alt="project"></a>
                        </div>
                        <div class="post-content" data-aos="fade-left" data-aos-duration="700">
                            <h4><a href="<?php echo buat_link_halaman('5') ?>">Pemanfaatan Limbah Rumah Tangga Menjadi Eco Enzyme</a></h4>
                            <ul>
                                <li><i class="fas fa-folder-open"></i><a href="#">Environment & Ecology</a></li>
                                <li><i class="fas fa-home"></i><a href="#">Sahera Tropical Center 218</a></li>
                            </ul>
                            <?php echo maximum_kata(ambil_isi('5'),30) ?> </p>
                            <a href="<?php echo buat_link_halaman('5') ?>" class="custom-btn">Pelajari lebih Lanjut <i class="fas fa-angle-double-right"></i></a>
                    
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="post-thumb" data-aos="fade-right" data-aos-duration="700">
                            <a href="<?php echo buat_link_halaman('16') ?>"><img src="gambar/manggot.jpg" alt="project"></a>
                        </div>
                        <div class="post-content" data-aos="fade-left" data-aos-duration="700">
                            <h4><a href="#">Mengolah Sampah Organik Menjadi Bahan Pakan Ternak</a></h4>
                            <ul>
                                <li><i class="fas fa-folder-open"></i><a href="#">Environment & Ecology</a></li>
                                <li><i class="fas fa-home"></i><a href="#">Sahera Tropical Center 218</a></li>
                            </ul>
                            <?php echo maximum_kata(ambil_isi('16'),30) ?> </p>
                            <a href="<?php echo buat_link_halaman('16') ?>" class="custom-btn">Pelajari lebih Lanjut <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <div class="post-item">
                        <div class="post-thumb" data-aos="fade-right" data-aos-duration="700">
                            <a href="#"><img src="gambar/dodol.jpg" alt="project"></a>
                        </div>
                        <div class="post-content" data-aos="fade-left" data-aos-duration="700">
                            <h4><a href="<?php echo buat_link_halaman('17') ?>">Membuat Dodol Kulit Pisang</a></h4>
                            <ul>
                                <li><i class="fas fa-folder-open"></i><a href="#">Environment & Ecology</a></li>
                                <li><i class="fas fa-home"></i><a href="#">Sahera Tropical Center 218</a></li>
                            </ul>
                            <?php echo maximum_kata(ambil_isi('17'),30) ?> </p>
                            <a href="<?php echo buat_link_halaman('17') ?>" class="custom-btn">Pelajari lebih Lanjut <i class="fas fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    
                </div>
                
                <ul class="pagination" data-aos="fade-up" data-aos-duration="700">
                    <li><a href="project.php" class="active">1</a></li>
                    <li><a href="project2.php" class="d-none d-sm-block">2</a></li>
                    <li><a href="project2.php"><i class="fas fa-angle-double-right"></i></a></li>
                </ul>
            </div>
        </section>
        <!-- our project section ending here -->
        

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