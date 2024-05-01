<?php
   session_start();
   if (empty($_SESSION['qstr'])) {
      if (empty($_SERVER['QUERY_STRING'])) {
         $_SESSION['qstr'] = 'source=Organic&subsource=Organic';
      } else {
         $_SESSION['qstr'] = $_SERVER['QUERY_STRING'];
      }
   }
   ?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Google Tag Manager -->
   <script>(function (w, d, s, l, i) {
         w[l] = w[l] || []; w[l].push({
            'gtm.start':
               new Date().getTime(), event: 'gtm.js'
         }); var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
               'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-M536GR5');</script>
   <!-- End Google Tag Manager -->
   <meta charset="UTF-8">
   <link rel="icon" type="image/png" href="assets/images/favicon.png">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="description"
      content="Lilawati Diagnostics | Book A Lab Test | Lilawati Diagnsotic Center in Jogeshwari (West)">
   <title>Lilawati Diagnostics | Diagnostics and Lab Center in Jogeshwari (West)</title>
   <!-- css links -->
   <link href="assets/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
   <link href="assets/icons/style.css" rel="stylesheet">
   <link href="assets/css/slick.css" rel="stylesheet">
   <link href="assets/css/style.css" rel="stylesheet">
   <!-- end of css links -->
</head>

<body data-spy="scroll" data-target="#scrollspynav" data-offset="80">

   <!-- Google Tag Manager (noscript) -->
   <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M536GR5" height="0" width="0"
         style="display:none;visibility:hidden"></iframe></noscript>
   <!-- End Google Tag Manager (noscript) -->
   <!-- navigation section -->
   <nav class="navbar navz navbar-expand-lg fixed-top" id="scrollspynav">
      <a class="navbar-brand navimg" href="./">
         <img class="logo1" src="assets/images/logo1.jpg"
            alt="Lilawati Diagnostics | Book A Lab Test | Lilawati Diagnsotic Center in Jogeshwari (West)"
            title="Lilawati Diagnostics | Book A Lab Test">
      </a>
      <a class="navbar-toggler custnav" data-toggle="collapse" data-target="#navbarcollapse"
         aria-controls="navbarcollapse" aria-expanded="false" aria-label="Toggle navigation">
         <span class="icon-menu"></span>
      </a>
      <div class="collapse navbar-collapse" id="navbarcollapse">
         <ul class="navbar-nav ml-auto">
            <li class="nav-item navitem">
               <a class="nav-link navlink nav-link-ltr" href="#">Home</a>
            </li>
            <li class="nav-item navitem">
               <a class="nav-link navlink nav-link-ltr" href="#secabout">About Us</a>
            </li>
            <li class="nav-item navitem">
               <a class="nav-link navlink nav-link-ltr" href="#secGallery">Our Offerings</a>
            </li>
            <li class="nav-item navitem">
               <a class="nav-link navlink nav-link-ltr" href="#secTestimonials">Testimonials</a>
            </li>
            <li class="nav-item navitem">
               <a class="nav-link navlink nav-link-ltr" href="#secContact">Contact Us</a>
            </li>
            <li class="nav-link text-center d-none d-lg-block">
               <a class="btn btn-other" data-toggle="modal" data-target="#rrmodal">
                  Book a Test
               </a>
            </li>
         </ul>
      </div>
   </nav>
   <!-- end of navigation section-->
   <!-- header secheader -->
   <section class="" id="tyfssec1">
      <div class="container-fluid">
         <div class="row">
            <div class="col-12 text-center p-5">
               <p>
                  <span class="icon-cross fsicon"></span>
               </p>
               <h2 class="section-subtext black-header pb-5">
                  Form Submit Failed.
               </h2>

               <p class="pb-5">
                  Please go to home page and try again.
                  <br>
                  You can get in touch with us at
               </p>

               <h3 class="pb-5">
                  <a class="otherpagenumlink" href="tel:+91-9967754237

              "><span class="icon-col"></span>+91-9967754237

                  </a>
               </h3>

               <a href="./" class="btn btn-custom">GO BACK TO HOME PAGE</a>

            </div>
         </div>
      </div>
   </section>
   <!-- end of header secheader -->

   <footer class="bg-footer">
      <div class="container-fluid">
         <div class="row align-self-center justify-content-center footer-text allcol">
            <div class="col-lg-4 align-self-center">
               <p class="section-subtext">
                  Call - <span><a class="numlink important-white" href="tel:+91-9967754237">+91-9967754237</a></span>
               </p>
               <p><br><br></p>
            </div>
            <div class="col-lg-3 allcol align-self-center">
            </div>
            <div class="col-lg-5 allcol align-self-center text-center">
               <p class="mb-0">
                  Copyright &copy; Lilawati Diagnostics Center & Pathology Lab
               </p>
            </div>
         </div>
         <div class="col-lg-12 d-block d-lg-none">
            <br><br>
         </div>
      </div>
   </footer>
   <!-- end of footer -->
   <!-- sticky mob -->
   <div class="fixed-bottom d-md-block d-lg-none">
      <div id="stickymob">
         <div class="row stickybtn">
            <a class="col stickycall text-center stickycol stickybdr" href="tel:+91-9967754237">
               CALL NOW
            </a>
            <a class="col stickyenq text-center stickycol" href="" data-toggle="modal" data-target="#rrmodal">
               Get a Call Back
            </a>
         </div>
      </div>
   </div>
   <!-- end of sticky mob -->
   <!-- javascript links -->
   <script src="assets/vendor/jquery/jquery.min.js"></script>
   <script src="assets/js/jquery.touchSwipe.min.js" type="text/javascript"></script>
   <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
   <script src="assets/js/slick.min.js"></script>
   <script src="assets/js/script.js"></script>
   <!-- end of javascript links -->
</body>

</html>