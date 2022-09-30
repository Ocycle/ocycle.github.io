<?php
include_once("inc/inc_koneksi.php");
include_once("inc/inc_fungsi.php");
?>
<?php include("inc_header.php")?>

        <!-- page header section start here -->
        <section class="page-header" style="background-image: url(assets/images/banner8.png); background-size: cover;">
            <div class="page-header-area">
                <div class="container">
                    <div class="page-header-content">
                        <div class="page-header-title">
                            <h2>contact-us</h2>
                            <h2><span>Mengolah Sampah Makanan Mulai Dari Dalam Rumah</span></h2>
                        </div>
                        <ul class="breadcamp">
                            <li><a href="index.php"><i class="fas fa-home"></i> Home</a></li>
                            <li><a class="active">contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- page header section ending here -->


        <!-- contact us section start here -->
        <section class="contact-us padding-tb">
            <div class="container">
                <div class="row no-gutters section-wrapper">
                    <div class="col-lg-6">
                        <div class="row no-gutters">
                            <div class="col-sm-6">
                                <div class="main-addres">
                                    <div class="contact-title">
                                        <h4>Alamat Kantor Utama</h4>
                                    </div>
                                    <div class="contact-body">
                                        <ul>
                                            <li>
                                                <h6>Lokasi :</h6>
                                                <p>Jl. Kumbang No.14, RT.02/RW.06, Babakan, Kecamatan Bogor Tengah, Kota Bogor, Jawa Barat 16128</p>
                                            </li>
                                            <li>
                                                <h6>Nomor Handphone :</h6>
                                                <p>+62-857-7744-6980</p>
                                            </li>
                                            <li>
                                                <h6>Alamat Email :</h6>
                                                <a href="#">ocycle8@gmail.com</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="contact-area">
                            <div class="contact-title">
                                <h4>Kirimi Kami Pesan</h4>
                                
                            </div>
                            <div id="respond" class="comment-respond">
                                <div class="add-comment">
                                    <form action="#" method="post" id="commentform" class="comment-form">
                                        <input name="name" type="text" value="" placeholder="Nama">
                                        <input name="email" type="text" value="" placeholder="Email">
                                        <input name="url" type="text" value="" placeholder="Subject">
                                        <textarea id="comment-reply" name="comment" rows="9" placeholder="Ketik Di Sini Komentar Anda"></textarea>
                                        <p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"><label for="wp-comment-cookies-consent">Save my name, email, and website in this browser for the next time.</label></p>
                                        <button type="submit">
                                            <div class="custom-btn">
                                                <span>Submet Message</span><i class="fas fa-angle-double-right"></i>
                                            </div>
                                        </button>
                                    </form>
                                </div>			
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- contact us section ending here -->


        <!-- gmap section start here -->
        <div class="gmaps">
            <div id="map"></div>
        </div>
        <!-- gmap section ending here -->

        
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAQlXnmyNPAeN3c3HNyWoUMqDk6bDF31Cg&callback=initMap"></script>

</body>
</html>