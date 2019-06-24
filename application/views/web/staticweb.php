<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->


<!-- Mirrored from showwp.com/demos/ws-garden/index-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Apr 2019 14:27:43 GMT -->

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="keywords" content="">

    <title>Website Bina Jaya</title>

    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/logo.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php base_url() ?>assets/images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/apple-touch-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/rs-plugin/css/settings.css" media="screen" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/animate.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/carousel.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap-select.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/jquery-ui.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/marki.css">

    <!-- COLORS -->
    <link rel="stylesheet" type="text/css" href="css/<?php echo base_url(); ?>assets/custom.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="boxed">

    <div id="loader">
        <div class="loader-container">
            <img src="<?php echo base_url(); ?>assets/images/loader.gif" alt="" class="loader-site spinner" width="75px" height="75px">
        </div>
    </div>

    <div id="wrapper">
        <div class="topbar clearfix">
            <div class="container">
                <div class="row-fluid">
                    <div class="col-md-6 text-left">
                        <div class="social">
                            <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                            <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                            <a href="#" data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a>
                        </div><!-- end social -->
                    </div><!-- end left -->
                    <div class="col-md-6 text-right">
                        <p>
                            <strong><i class="fa fa-phone"></i></strong> 081234567890 &nbsp;&nbsp;
                            <strong><i class="fa fa-envelope"></i></strong> <a href="mailto:info@binajaya.desa.id.com">info@desabinajaya.id</a>
                        </p>
                    </div><!-- end left -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end topbar -->

        <header class="header">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-12">
                        <nav class="navbar yamm navbar-default">
                            <div class="container-full">
                                <div class="navbar-table">
                                    <div class="navbar-cell">
                                        <div class="navbar-header">
                                            <a class="navbar-brand" href="<?php site_url() ?>beranda"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="Bina Jaya" width="65px" height="65px"></a>
                                            <div>
                                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2">
                                                    <span class="sr-only">Toggle navigation</span>
                                                    <span class="fa fa-bars"></span>
                                                </button>
                                            </div>
                                        </div><!-- end navbar-header -->
                                    </div><!-- end navbar-cell -->

                                    <div class="navbar-cell stretch">
                                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
                                            <div class="navbar-cell">
                                                <ul class="nav navbar-nav navbar-right">
                                                    <li><a href="<?php site_url() ?>beranda" class="dropdown-toggle <?php if($this->uri->segment(1)=="beranda"){echo "active";}?>">Beranda</a>
                                                    </li>
                                                    <li class="dropdown has-submenu">
                                                        <a href="#" class="dropdown-toggle
                                                        <?php if($this->uri->segment(1)=="sejarah"){echo "active";}else if($this->uri->segment(1)=="profmasdes"){echo "active";}else if($this->uri->segment(1)=="profwil"){echo "active";}?>" data-toggle="dropdown" role="button" aria-expanded="false">Profil <span class="fa fa-angle-down"></span></a>
                                                        <ul class="dropdown-menu start-left" role="menu">
                                                            <li><a href="<?php site_url() ?>sejarah">Sejarah Desa</a>
                                                            </li>
                                                            <li><a href="<?php site_url() ?>profmasdes">Profil Masyarakat Desa</a>
                                                            </li>
                                                            <li><a href="<?php site_url() ?>profwil">Profil Wilayah Desa</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown has-submenu">
                                                        <a href="" class="dropdown-toggle <?php if($this->uri->segment(1)=="visimisi"){echo "active";}else if($this->uri->segment(1)=="pemdes"){echo "active";}?>" data-toggle="dropdown" role="button" aria-expanded="false">Pemerintahan Desa <span class="fa fa-angle-down"></span></a>
                                                        <ul class="dropdown-menu start-left" role="menu">
                                                            <li><a href="<?php site_url(); ?>visimisi">Visi dan Misi</a></li>
                                                            <li><a href="<?php site_url(); ?>pemdes">Pemerintah Desa</a></li>

                                                        </ul>
                                                    </li>
                                                    <li class="dropdown has-submenu">
                                                        <a href="#" class="dropdown-toggle <?php if($this->uri->segment(1)=="penduduk"){echo "active";}else if($this->uri->segment(1)=="notfound"){echo "active";}else if($this->uri->segment(1)=="notfound"){echo "active";}else if($this->uri->segment(1)=="notfound"){echo "active";}?>" data-toggle="dropdown" role="button" aria-expanded="false">Data Desa <span class="fa fa-angle-down"></span></a>
                                                        <ul class="dropdown-menu start-left" role="menu">
                                                            <li><a href="<?php site_url(); ?>penduduk">Data Penduduk</a></li>
                                                            <li><a href="<?php site_url(); ?>notfound">Data Pekerjaan</a></li>
                                                            <li><a href="<?php site_url(); ?>notfound">Data Agama</a></li>
                                                            <li><a href="<?php site_url(); ?>notfound">Data Jenis Kelamin</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div><!-- end navbar-cell -->
                                        </div><!-- /.navbar-collapse -->
                                    </div><!-- end navbar cell -->
                                </div><!-- end navbar-table -->
                            </div><!-- end container fluid -->
                        </nav><!-- end navbar -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </header>
        <div class="marquee">
            <marquee onmouseover="this.stop()" onmouseout="this.start()" />Selamat Datang di Website Resmi Desa Bina Jaya , Kecamatan Tolangohula Kabupaten Gorontalo. Media komunikasi dan transparansi Pemerintah Desa Bina Jaya untuk seluruh masyarakat. Mari Membangun Desa untuk bangsa dan negara yang lebih maju.
            </marquee>
        </div>

        <?php $this->load->view($container) ?>
        <footer class="footer">
            <div class="container">
                <div class="row module-wrapper">
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Postingan Terbaru</h4>
                            </div><!-- end title -->

                            <div class="recent-post-widget">
                                <ul class="recent-posts">
                                    <li>
                                        <p><a href="#" title=""><img src="<?php echo base_url(); ?>assets/images/gal1.jpg" alt="" class="alignleft">Lomba Desa 2019, Bina Jaya Berharap Maju Ke Tingkat Kabupaten</a></p>
                                        <span>12 May 2019</span>
                                    </li>
                                    <li>
                                        <p><a href="#" title=""><img src="<?php echo base_url(); ?>assets/images/gal2.jpg" alt="" class="alignleft">Jalan Sehat Bumdes Bina Jaya Bertabur Hadiah, Lemari Jadi Incaran</a></p>
                                        <span>06 May 2019</span>
                                    </li>
                                </ul><!-- end latest-tweet -->
                            </div><!-- end twitter-widget -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                    <div class="col-md-3 col-sm-6">
                        <div class="widget">
                            <div class="widget-title">
                                <h4>Kontak</h4>
                            </div>
                            <ul class="site-links">
                                <li><i class="fa fa-link"></i> www.binajaya.desa.id.com</li>
                                <li><i class="fa fa-envelope"></i> info@binajaya.desa.id.com</li>
                                <li><i class="fa fa-phone"></i> 081234567890</li>
                                <li><i class="fa fa-fax"></i> 081234567891</li>
                                <li><i class="fa fa-home"></i> Bina Jaya, Kec.Tolangohula, Kab. Gorontalo </li>
                            </ul>
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div>
        </footer>

        <section class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-left">
                        <p>© 2019 <a href="http://showwp.com/" title="Show WP">Politeknik Gorontalo</a></p>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->
    </div><!-- end wrapper -->

    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/retina.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/parallax.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/wow.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/carousel.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

    <!-- SLIDER REV -->
    <script src="<?php echo base_url(); ?>assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('.tp-banner').show().revolution({
                dottedOverlay: "none",
                delay: 16000,
                startwidth: 1170,
                startheight: 600,
                hideThumbs: 200,
                thumbWidth: 100,
                thumbHeight: 50,
                thumbAmount: 5,
                navigationType: "none",
                navigationArrows: "solo",
                navigationStyle: "preview2",
                touchenabled: "on",
                onHoverStop: "on",
                swipe_velocity: 0.7,
                swipe_min_touches: 1,
                swipe_max_touches: 1,
                drag_block_vertical: false,
                parallax: "mouse",
                parallaxBgFreeze: "on",
                parallaxLevels: [10, 7, 4, 3, 2, 5, 4, 3, 2, 1],
                parallaxDisableOnMobile: "off",
                keyboardNavigation: "off",
                navigationHAlign: "center",
                navigationVAlign: "bottom",
                navigationHOffset: 0,
                navigationVOffset: 20,
                soloArrowLeftHalign: "left",
                soloArrowLeftValign: "center",
                soloArrowLeftHOffset: 20,
                soloArrowLeftVOffset: 0,
                soloArrowRightHalign: "right",
                soloArrowRightValign: "center",
                soloArrowRightHOffset: 20,
                soloArrowRightVOffset: 0,
                shadow: 0,
                fullWidth: "on",
                fullScreen: "off",
                spinner: "spinner4",
                stopLoop: "off",
                stopAfterLoops: -1,
                stopAtSlide: -1,
                shuffle: "off",
                autoHeight: "off",
                forceFullWidth: "off",
                hideThumbsOnMobile: "off",
                hideNavDelayOnMobile: 1500,
                hideBulletsOnMobile: "off",
                hideArrowsOnMobile: "off",
                hideThumbsUnderResolution: 0,
                hideSliderAtLimit: 0,
                hideCaptionAtLimit: 0,
                hideAllCaptionAtLilmit: 0,
                startWithSlide: 0,
                fullScreenOffsetContainer: ""
            });
        });
    </script>

    <script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery-ui-timepicker-addon.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/bootstrap-select.js"></script>
    <script type="text/javascript">
        (function($) {
            "use strict";
            $('.selectpicker').selectpicker();
            $("#datepicker").datepicker();
        })(jQuery);
    </script>

</body>

<!-- Mirrored from showwp.com/demos/ws-garden/index-boxed.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 27 Apr 2019 14:27:43 GMT -->

</html>