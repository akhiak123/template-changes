<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en" class="e3-html_bg">
 
<head>
<meta property="og:title" content="Coaching Institute for CA-ACCA-CMA India-CMA Usa-CS | lakshya Campus"/>
<meta property="og:description" content="Lakshya is a coaching centre for professional courses like ACCA,CA, CMA USA, CMA India, CS,"/>
<!-- Fonawesome/-->
<meta name="robots" content="index, follow">
<script src="https://kit.fontawesome.com/8a1cf465a4.js" crossorigin="anonymous"></script>
<!-- Chatbot Code /-->
<script id='gs-sdk' src='//www.buildquickbots.com/botwidget/v3/demo/static/js/sdk.js?v=3' key='54397136-ee02-4d80-b0dc-9053c66cc80a' brand="giplearnfluencebot"></script>
<!-- Hotjar Tracking Code for https://lakshyaca.com/ -->
<!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SHJHGRJ7T6"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-SHJHGRJ7T6');
    </script>
 <!-- End Google tag (gtag.js) -->

<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2807520,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
    <!-- Facebook Pixel Code -->
<!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '849672136470343');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=849672136470343&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->


<!-- End Facebook Pixel Code -->
     <!-- Google Tag Manager -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NX766VB');</script>
<!-- End Google Tag Manager -->

     
    <base href="<?php echo base_url(); ?>" />
    <?php echo $this->setconfig->get_title(); ?>
    <?php echo $this->setconfig->get_meta(); ?>
    <?php echo $this->setconfig->get_canonical_url(); ?>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <link rel="shortcut icon" href="<?php echo base_url('images/favicon.ico'); ?>" type="image/x-icon" />
    <link rel="icon" href="<?php echo base_url('images/favicon.ico'); ?>" type="image/x-icon" />
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url('images/apple-icon-57x57.png'); ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url('images/apple-icon-60x60.png'); ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url('images/apple-icon-72x72.png'); ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url('images/apple-icon-76x76.png'); ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url('images/apple-icon-114x114.png'); ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url('images/apple-icon-120x120.png'); ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url('images/apple-icon-144x144.png'); ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url('images/apple-icon-152x152.png'); ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url('images/apple-icon-180x180.png'); ?>">
    <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo base_url('images/android-icon-192x192.png'); ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url('images/favicon-32x32.png'); ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url('images/favicon-96x96.png'); ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('images/favicon-16x16.png'); ?>">
    <link rel="manifest" href="<?php echo base_url('images/manifest.json'); ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url('images/ms-icon-144x144.png'); ?>">
    <meta name="theme-color" content="#ffffff">
    <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />

    <?php if (ENVIRONMENT == 'development') { ?>
        <link href="<?php echo base_url('assets/fontawesome-free-5.0.8/css/fontawesome-all.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('css/bootstrap-4.0.0-dist/css/bootstrap.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('css/datatables.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('css/responsive.dataTables.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('css/bootstrap-datepicker.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('css/lightbox.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('css/flexslider.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('css/lity.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('css/owl.carousel.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('css/static.style.css'); ?>" rel="stylesheet" type="text/css" />
        <!--<link href="<?php // echo base_url('css/menu.css');   ?>" rel="stylesheet" type="text/css" />-->
        <link href="<?php echo base_url('css/custom.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('css/bootstrap-datepicker.standalone.min.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('css/responsive.css'); ?>" rel="stylesheet">
        <link href="<?php echo base_url('css/blog.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('css/intlTelInput.css'); ?>" rel="stylesheet" type="text/css" />
        <link href="<?php echo base_url('css/style.css'); ?>" rel="stylesheet" type="text/css" />

        <?php
    } else {
        $this->minify->css(array(
            'fontawesome-free-5.0.8/css/fontawesome-all.min.css',
            'bootstrap-4.0.0-dist/css/bootstrap.min.css',
            'datatables.min.css',
            'responsive.dataTables.min.css',
            'bootstrap-datepicker.min.css',
            'lightbox.min.css',
            'flexslider.css',
            'lity.min.css',
            'owl.carousel.min.css',
            'static.style.css',
//                'menu.css',
            'custom.css',
            'bootstrap-datepicker.standalone.min.css',
            'responsive.css',
            'blog.css',
            'intlTelInput.css',
            'style.css',
        ));
        echo $this->minify->deploy_css(FALSE, 'style.css');
    }
    ?>



    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

    <?php echo $this->setconfig->get_ga(); ?>
    <?php if (isset($is_blog)) { ?>
        <style>
            html,body{font-family: 'Roboto Slab', serif;background-color: #F2F2F2;}
        </style>
    <?php } ?>
    <?php echo $this->setconfig->get_gatag(); ?>
      <style>
            .iti{width: 100%;}
        </style>
</head>
<body>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-SHJHGRJ7T6"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-SHJHGRJ7T6');
</script>
    
    <!-- Google Tag Manager (noscript) -->

    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NX766VB"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>

    <!-- End Google Tag Manager (noscript) -->

    <div class="container py-md-3 py-2">
        <div class="row">
            <div class="col-md-4 col-5">
                <a href="<?php echo base_url('home'); ?>" title="Lakshya" class="py-3 py-md-0 d-block">
                    <img src="<?php echo base_url('images/logo.png'); ?>" class="img-fluid" alt="Lakshya" />
                </a>
            </div>
            <div class="col-md-8 col-7 text-md-right top-quick-menu-wrapper">
                 <?php if ($home_enable_blocks->mobile1) { ?>
                    <a href="tel:<?php echo preg_replace('/\s+/', '', $home_enable_blocks->mobile1); ?>" class="top-quick-menu">
                        <i class="fa-solid fa-phone-volume"></i> 
                        <span class="d-none d-md-block"><?php echo $home_enable_blocks->mobile1; ?></span></a>
                <?php } ?>


                <?php if ($home_enable_blocks->mobile2) { ?>
                    <a href="https://web.whatsapp.com/send?text=Hello Lakshya&phone=:<?php echo preg_replace('/\s+/', '', $home_enable_blocks->mobile2); ?>" class="top-quick-menu"><i class="fa-brands fa-whatsapp"></i> <span class="d-none d-md-block"><?php echo $home_enable_blocks->mobile2; ?></span></a>
                <?php } ?>

                <!--<a href="#" class="top-quick-menu" data-toggle="modal" data-target="#enquiry-appointment-dialog"><i class="far fa-star"></i> <span class="d-none d-md-block">Book Appointment</span></a>-->
                <div class="dropdown find-us-links">
                    <a class="dropdown-toggle top-quick-menu" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa-solid fa-map-location-dot"></i> <span class="d-none d-md-block">Find Us</span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink">
                        <?php foreach ($this->queries->custom_page_menu("base") as $_flp) { ?>
                            <a href="<?php echo page_url($_flp); ?>" <?php echo (($_flp->url_http) ? ' target="_blank"' : ""); ?> class="dropdown-item"><?php echo $_flp->name; ?></a>
                        <?php } ?>
                    </div>
                </div>
                 <a href="https://www.lakshyacommerce.com/" class="top-quick-menu">
                        <i class="fa-solid fa-laptop"></i>
                        <span class="d-none d-md-block">Online Classes</span></a>
            </div>
        </div>
    </div>

   
    <div class="menu-wrapper-outter">
        <i class="fas fa-times" id="mobile-btn-listner-close"></i>
        <div class="container">
            <div class="row d-block d-md-none" id="mobile-btn-listner-wrap">
                <div class="col-md-10"></div>
                <div class="col-md-2 text-right"><i class="fas fa-bars" id="mobile-btn-listner"></i></div>
            </div>

            <div class="menu-wrapper d-md-flex">
                <?php
                foreach ($this->queries->custom_page_menu("top") as $_flp) {
                    $i = 0;
                    ?>
                    <div class="menu-first-level">
                        <a href="<?php echo page_url($_flp); ?>" <?php echo (($_flp->url_http) ? ' target="_blank"' : ""); ?> ><?php echo $_flp->name; ?> <div class="arrow-up"></div></a>
                        <?php
                        if ($this->queries->custom_page_menu("top", $_flp->id)) {
                            ?>
                            <div class="menu-second-level">
                                <div class="row mx-0">
                                    <?php
                                    foreach ($this->queries->custom_page_menu("top", $_flp->id, TRUE, 3) as $_slp) {
                                        if ($i == 3) {
                                            break;
                                        }
                                        ?>
                                        <a href="<?php echo page_url($_slp); ?>" class="col-md-3 thumb-menu pt-md-3 pb-md-3" <?php echo (($_slp->url_http) ? ' target="_blank"' : ""); ?>>
                                            <?php if ($_slp->thumb) { ?>
                                                <img src="<?php echo base_image_url(PAGE_BANNER_PATH . '_thumb_' . $_slp->thumb) ?>" alt="<?php echo $_slp->thumb_alt; ?>" class="img-fluid d-none d-md-block" />
                                            <?php } ?>
                                            <?php echo $_slp->name; ?>
                                        </a>
                                        <?php
                                        $i++;
                                    }
                                    ?>


                                    <?php if ($i == 3) { ?>
                                        <ul class="col-md-3 pt-md-3 pb-md-3 text-left listing-menu-wrapper">
                                            <?php foreach ($this->queries->custom_page_menu("top", $_flp->id, TRUE, 9, $i) as $_slp) {
                                                ?>
                                                <li>
                                                    <a href="<?php echo page_url($_slp); ?>" class="list-menu" <?php echo (($_slp->url_http) ? ' target="_blank"' : ""); ?> />
                                                    <?php echo $_slp->name; ?>
                                                    </a>
                                                </li>
                                                <?php
                                                $i++;
                                            }
                                            ?>
                                        </ul>
                                    <?php }
                                    ?>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>






    <?php if ($this->session->flashdata('f_msg_enquiry')) { ?>
        <div class="cu-message">
            <?php echo $this->session->flashdata('f_msg_enquiry'); ?>
        </div>
    <?php } ?>
    <div class="">
        <?php $this->load->view('pages/' . $page); ?>
    </div>


    <div class="footer-wrapper">
        <div class="container py-md-4 py-2">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-12">
                    <p class="h-f-para">We have earned a great reputation as a key confidante and as a powerful institution as well as a close advisor to the aspiring candidates in CA, ACCA, CMA USA, CMA India,CS,CAT,CIMA and B.Voc. We provide a platform by availing all the courses in the syllabi thereby making it a single point destination to all aspirants.</p>
                </div>
                <div class="col-md-4 col-sm-12 col-12 pt-0 pt-md-5">
                    <img src="<?php echo base_url('images/logo-w.png'); ?>" class="img-fluid h-f-logo" />
                </div>
                <div class="col-md-4 col-sm-12 col-12">
                    <div class="h-b-address-wrap">
                        <div class="h-b-address">
                            <i class="fas fa-map-marker-alt"></i>
                            <p>LAKSHYA<br />
                                Adv Easwara Iyer Rd, Pullepady, Kochi, Kerala 682035
                            </p></div>
                        <div class="h-b-address">
                            <i class="fas fa-phone"></i>
                            <p> +91 9061277777 (IND), +971 568631499 (UAE)
                            </p></div>
                        <div class="h-b-address">
                            <i class="fas fa-envelope-open"></i>
                            <p>info@lakshyaca.com
                            </p>
                            </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-base-wrapper py-md-4 py-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 mb-2 mb-md-0 ml-1 ml-md-0"><?php echo $home_enable_blocks->copyright; ?></div>
                    <div class="col-md-4 text-md-center mb-2 mb-md-0"><?php echo generate_li($this->queries->pages('bottom')); ?></div>
                    <div class="col-md-4 text-md-right">
                        <a href="https://twitter.com/CampusLakshya" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.facebook.com/lakshyacac/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/lakshya_official_co/?hl=en" target="_blank"><i class="fab fa-instagram"></i></a>
                        <a href="https://www.linkedin.com/company/14473909/admin/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="enquiry-appointment-dialog" tabindex="-1" role="dialog" data-show="true" aria-labelledby="Enquiry Booking">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="form-heading">Booking An Appointment</div>
                    <div class="form-sub-heading">Fill in your details and we'll call you back!</div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <?php echo form_open_multipart(base_url('booking-appoinment'), array('class' => 'row', 'id' => 'quick-enquiry-form')); ?>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="b_fullname" placeholder="Your Full Name" value="<?php echo set_value('fullname', ''); ?>" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="b_mobile" placeholder="Mobile Number" value="<?php echo set_value('mobile', ''); ?>" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="text" class="form-control" name="b_alt_mobile" placeholder="Alternate Phone Number" value="<?php echo set_value('alt_mobile', ''); ?>">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <input type="email" class="form-control" name="b_email" placeholder="E-mail Address" value="<?php echo set_value('email', ''); ?>" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <select name="b_title" class="form-control" required>
                                <option value="" disabled="1" selected="1">Select Courses</option>
                                <?php foreach ($this->queries->get_academics_all() as $ac) { ?>
                                    <option value="<?php echo $ac->title; ?>" <?php echo set_select('title', $ac->title) ?>><?php echo $ac->title; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <select name="b_district" class="form-control" required>
                                <option value="" disabled="1" selected="1">Select Campus</option>
                                <?php foreach (list_centers() as $centers) { ?>
                                    <option value="<?php echo $centers; ?>" <?php echo set_select('district', $centers) ?>><?php echo $centers; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <select name="b_qualifications" class="form-control" required>
                                <option value="">Select Qualification</option>
                                <option value="10th" <?php echo set_select('qualifications', '10th') ?>>10th</option>
                                <option value="Plus two" <?php echo set_select('qualifications', 'Plus two') ?>>Plus two</option>
                                <option value="UG" <?php echo set_select('qualifications', 'UG') ?>>UG</option>
                                <option value="PG" <?php echo set_select('qualifications', 'PG') ?>>PG</option>
                                <option value="Professional" <?php echo set_select('qualifications', 'Professional') ?>>Professional</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <select name="b_subject" class="form-control" required>
                                <option value="">Select Stream</option>
                                <option value="Commerce" <?php echo set_select('subject', 'Commerce') ?>>Commerce</option>
                                <option value="Science" <?php echo set_select('subject', 'Science') ?>>Science</option>
                                <option value="Humanities" <?php echo set_select('subject', 'Humanities') ?>>Humanities</option>
                            </select>
                        </div>
                    </div>


                    <div class="col-md-12">
                        <div class="form-group text-right">
                            <button type="submit" class="btn btn-warning">
                                Submit
                                <i class="fas fa-chevron-right"></i>
                            </button>
                        </div>
                    </div>

                    <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </div>



    <?php if ($home_enable_blocks->mobile1) { ?>
        <a href="tel:<?php echo preg_replace('/\s+/', '', $home_enable_blocks->mobile1); ?>" class="phone-sticky d-md-none">
            <i class="fas fa-phone"></i>
        </a>
    <?php } ?>

    <?php if ($home_enable_blocks->mobile2) { ?>
        <a href="whatsapp://send?text=Hello Lakshyaca&phone=<?php echo preg_replace('/\s+/', '', $home_enable_blocks->mobile2); ?>" class="whats-app-sticky d-md-none">
            <i class="fab fa-whatsapp"></i>
        </a>
    <?php } ?>






    <?php if ($home_enable_blocks->gmap_key) { ?>
        <script src = "https://maps.google.com/maps/api/js?sensor=false&libraries=geometry&v=3.22&key=<?php echo $home_enable_blocks->gmap_key; ?>"></script>
    <?php } ?>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <?php if (ENVIRONMENT == 'development') { ?>
        <script src="<?php echo base_url('assets/jquery/jquery.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/bootstrap-4.0.0-dist/js/bootstrap.bundle.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/datatables.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/dataTables.responsive.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/imagesloaded.pkgd.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/infinite-scroll.pkgd.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/jquery.row-grid.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/jquery.flexslider-min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/owl.carousel.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/bootstrap-datepicker.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/lightbox.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/mobile.menu.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/isotope.pkgd.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/lity.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/maplace.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/jquery.validate.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/additional-methods.min.js'); ?>" type="text/javascript"></script>
        <script src="<?php echo base_url('js/intlTelInput.min.js'); ?>" type="text/javascript"></script>

        <script src="<?php echo base_url('js/custom.script.js'); ?>" type="text/javascript"></script>
        <?php
    } else {
        $this->minify->js(array(
            'jquery/jquery.min.js',
            'bootstrap-4.0.0-dist/js/bootstrap.bundle.js',
            'datatables.min.js',
            'dataTables.responsive.min.js',
            'imagesloaded.pkgd.min.js',
            'infinite-scroll.pkgd.min.js',
            'jquery.row-grid.min.js',
            'jquery.flexslider-min.js',
            'owl.carousel.min.js',
            'bootstrap-datepicker.min.js',
            'lightbox.min.js',
            'mobile.menu.js',
            'isotope.pkgd.min.js',
            'lity.min.js',
            'maplace.js',
            'jquery.validate.min.js',
            'additional-methods.min.js',
            'intlTelInput.min.js',
            'custom.script.js',
        ));
        echo $this->minify->deploy_js(FALSE, 'script.js');
    }
    ?>

<!-- Messenger Chat plugin Code 
    <div id="fb-root"></div>-->

    <!-- Your Chat plugin code 
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "339733732786769");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v11.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script> -->
<!--LeadSquared Tracking Code Start-->
<script type="text/javascript" src="//web-in21.mxradon.com/t/Tracker.js"></script>
<script type="text/javascript">
      pidTracker('55343');
</script>
<!--LeadSquared Tracking Code End-->


<!-- Global site tag (gtag.js) - Google Ads: 771126049 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-771126049"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-771126049');
</script>

   </body> 
</html>
