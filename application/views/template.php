<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title> Rumah Sakit Umum Daerah Dewantara</title>

    <link rel="shortcut icon" href="<?php echo base_url()?>assets/images/fav.jpg">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontawsom-all.min.css">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/style.css" />
</head>

<body>

    <!-- ################# Header Starts Here#######################--->
    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-12 left-item">
                        <ul>
                            <li><i class="fas fa-envelope-square"></i> rumahsakitdewantara@rocketmail.com</li>
                            <li><i class="fas fa-phone-square"></i> +123 987 666 765</li>
                        </ul>
                    </div>
                    <div class="col-lg-5 d-none d-lg-block right-item">
                        <ul>
                            <li><a><i class="fab fa-github"></i></a></li>
                            <li><a><i class="fab fa-google-plus-g"></i></a></li>
                            <li> <a><i class="fab fa-pinterest-p"></i></a></li>
                            <li><a><i class="fab fa-twitter"></i></a></li>
                            <li> <a><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
        <div id="nav-head" class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-3 no-padding col-sm-12 nav-img">
                        <img src="<?php echo base_url()?>assets/images/logo.jpg" alt="">
                       <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                    </div>
                    <div id="menu" class="col-lg-25 col-md-9 d-none d-md-block nav-item">
                        <ul>
                            <li><?php echo anchor('home','Home');?></li>
                            <li><?php echo anchor('profil','Profil');?></li>
                            <li><?php echo anchor('register','Register Online');?></li>
                            <li><?php echo anchor('login','Login');?></a></li>  
                            <li><?php echo anchor('kontak','Contact');?></a></li>
                            <li><?php echo anchor('news','Cari Dokter');?></li>
                        </ul>
                    </div>
                    <div class="col-sm-2 d-none d-lg-block appoint">
                    </div>
                </div>

            </div>
        </div>

    </header>
	


    <!-- ################# Slider Starts Here#######################--->
	<?php echo $konten;?>
    
    <!-- ################# Footer Starts Here#######################--->

    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <h2>About Us</h2>
                    <p>
                        RSUD Dewantara adalah sebuah lembaga perawatan kesehatan yang didedikasikan untuk memberikan layanan medis berkualitas tinggi dan merawat masyarakat dengan keahlian dan empati. Dengan lebih dari 20 tahun pengalaman, kami telah menjadi pusat keunggulan dalam perawatan kesehatan, menjunjung tinggi integritas dan prinsip etika dalam setiap langkah kami.
                    </p>
                </div>
                <div class="col-md-4 col-sm-12">
                </div>
                <div class="col-md-4 col-sm-12 map-img">
                    <h2>Contact Us</h2>
                    <address class="md-margin-bottom-40">
                        Jl. Jembatan Merah, Gejayan Yogyakarta <br>
                        Call Center: 0554 26571 <br>
                        Email: <a href="mailto:info@anybiz.com" class="">rsdewantara@rocketmail.com</a><br>
                        Web: <a href="smart-eye.html" class="">www.rumahsakitdewantara.go</a>
                    </address>

                </div>
            </div>
        </div>
        

    </footer>
    <div class="copy">
            <div class="container">
                <a href="https://www.smarteyeapps.com/">2023 &copy; All Rights Reserved | Designed and Developed by RSUD Dewantara</a>
                
                <span>
                <a><i class="fab fa-github"></i></a>
                <a><i class="fab fa-google-plus-g"></i></a>
                <a><i class="fab fa-pinterest-p"></i></a>
                <a><i class="fab fa-twitter"></i></a>
                <a><i class="fab fa-facebook-f"></i></a>
        </span>
            </div>

        </div>

</body>

<script src="<?php echo base_url()?>assets/js/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url()?>assets/js/popper.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/plugins/scroll-fixed/jquery-scrolltofixed-min.js"></script>
<script src="<?php echo base_url()?>assets/js/script.js"></script>


</html>