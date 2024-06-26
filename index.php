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
   <script>
      (function (w, d, s, l, i) {
         w[l] = w[l] || [];
         w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
         });
         var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
         j.async = true;
         j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
         f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-M536GR5');
   </script>
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
   <section class="" id="secheader">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="col-lg-9 col-12 px-0" id="headercol">
               <div id="bannercarousel" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <img class="img-fluid h-100 d-lg-block d-none w-100"
                           src="assets/images/Lilawati-Labs-Desktop-Banner2.jpg"
                           title="Lilawati Diagnostics | Book A Lab Test"
                           alt="Lilawati Diagnostics | Book A Lab Test | Lilawati Diagnsotic Center in Jogeshwari (West)">
                        <img class="d-lg-none d-md-block img-fluid w-100"
                           src="assets/images/Lilawati-Labs-Mobile-Banner2.jpg" title=""
                           alt="Lilawati Diagnostics | Book A Lab Test | Lilawati Diagnsotic Center in Jogeshwari (West)">
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-3 col-12" id="headercol2">
               <div class="form-container">
                  <form id="formf1" action="submit_form.php" method="get">
                     <p class="text-center form-header">
                        Get a Call Back
                     </p>
                     <div class="form-group">
                        <label for="namelabel" class="formlabel">
                           Name
                        </label>
                        <input type="text" class="form-control custfield " name="entry.1884265043" placeholder="Name"
                           required>
                     </div>
                     <div class="form-group">
                        <label for="emaillabel" class="formlabel">
                           Email
                        </label>
                        <input type="email" class="form-control custfield " name="entry.275365505"
                           placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$">
                     </div>
                     <div class="form-group">
                        <label for="phonelabel" class="formlabel">
                           Phone
                        </label>
                        <div class="input-group">
                           <div class="input-group-prepend">
                              <span class="input-group-text custigp">
                                 +91
                              </span>
                           </div>
                           <input type="tel" placeholder="Mobile Number" class="form-control custfield custfieldphone "
                              name="entry.1280777366" pattern="[6-9]{1}[0-9]{9}" required>
                        </div>
                     </div>
                     <div>
                        <input type="hidden" class="querystring" name="form_id" value="headerForm">
                     </div>
                     <div class="form-group frmsubmit">
                        <div class="text-center">
                           <button type="submit" id="submitf1" class="btn btn-custom">
                              Get a Call Back
                           </button>
                        </div>
                     </div>
                  </form>
                  <p class="text-center mb-0 p-2"><a class="numlink" href="tel:+91-9967754237"><span
                           class="icon-call pr-2"></span>+91-9967754237</a></p>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end of header secheader -->
   <!-- overview secoverview -->
   <section class="allsection" id="secabout">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="col-lg-10 allcol text-center">
               <h2 class="section-header grey-header animation-element slide-up">
                  About US
               </h2>
               <h1 class="section-subheader black-header animation-element slide-left">
                  Lilawati Diagnostics & Lab Center
               </h1>
               <hr class="hrblack">
               Safe and Secure Lab Test at Your Home
               </p>
               <p class="animation-element slide-right">
                  Lilawati diagnsotic & lab center have dedicated team of medically-equipped and trained
                  professionals
                  in home healthcare. We have vast range of medical test available for your convenient just book
                  in
                  simple steps and book your lab test at your home today
               </p>
            </div>
         </div>
      </div>
   </section>
   <!-- end of overview secoverview -->
   <!-- Amenties secAmenties -->
   <section class="floaterrelbox" id="secGallery">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="col-lg-10 floatershadow animation-element slide-down">
               <div class="row justify-content-center">
                  <div class="col-lg-10  text-center">
                     <h2 class="section-header grey-header animation-element slide-up">
                        Our Service Offerings
                     </h2>
                     <p class="section-subheader black-header animation-element slide-left">
                        Wide range of test avaialable at our offerings
                     </p>
                     <hr class="hrblack">
                  </div>
               </div>
               <div class="row justify-content-center animation-element slide-down">
                  <div class="col-lg-10 allcol order-lg-2">
                     <div class="row gallerycarousel">
                        <div class="d-flex align-self-center justify-content-center allcol">
                           <div class="relativetextbox">
                              <img class="img-fluid" src="assets/images/lilawati-labs-blood-test.jpg"
                                 alt="Lilawati Diagnostics | Book A Lab Test | Lilawati Diagnsotic Center in Jogeshwari (West)"
                                 title="Lilawati Diagnostics | Book A Lab Test">
                              <div class="absolutetextbottom">
                                 Blood Test
                              </div>
                           </div>
                        </div>
                        <div class="d-flex align-self-center justify-content-center allcol">
                           <div class="relativetextbox">
                              <img class="img-fluid" src="assets/images/lilawati-labs-blood-test-2.jpg"
                                 alt="Lilawati Diagnostics | Book A Lab Test | Lilawati Diagnsotic Center in Jogeshwari (West)"
                                 title="Lilawati Diagnostics | Book A Lab Test">
                              <div class="absolutetextbottom">
                                 Blood Test
                              </div>
                           </div>
                        </div>
                        <div class="d-flex align-self-center justify-content-center allcol">
                           <div class="relativetextbox">
                              <img class="img-fluid" src="assets/images/lilawati-labs-urine-test.jpg"
                                 alt="Lilawati Diagnostics | Book A Lab Test | Lilawati Diagnsotic Center in Jogeshwari (West)"
                                 title="Lilawati Diagnostics | Book A Lab Test">
                              <div class="absolutetextbottom">
                                 Urine Test
                              </div>
                           </div>
                        </div>
                        <div class="d-flex align-self-center justify-content-center allcol">
                           <div class="relativetextbox">
                              <img class="img-fluid" src="assets/images/lilawati-labs-urine-test-2.jpg"
                                 alt="Lilawati Diagnostics | Book A Lab Test | Lilawati Diagnsotic Center in Jogeshwari (West)"
                                 title="Lilawati Diagnostics | Book A Lab Test">
                              <div class="absolutetextbottom">
                                 Urine Test
                              </div>
                           </div>
                        </div>
                        <div class="d-flex align-self-center justify-content-center allcol">
                           <div class="relativetextbox">
                              <img class="img-fluid" src="assets/images/lilawati-labs-aputum-test-2.jpg"
                                 alt="Lilawati Diagnostics | Book A Lab Test | Lilawati Diagnsotic Center in Jogeshwari (West)"
                                 title="Lilawati Diagnostics | Book A Lab Test">
                              <div class="absolutetextbottom">
                                 Sputum Test
                              </div>
                           </div>
                        </div>
                        <div class="d-flex align-self-center justify-content-center allcol">
                           <div class="relativetextbox">
                              <img class="img-fluid" src="assets/images/lilawati-labs-health-cehckup.jpg"
                                 alt="Lilawati Diagnostics | Book A Lab Test | Lilawati Diagnsotic Center in Jogeshwari (West)"
                                 title="Lilawati Diagnostics | Book A Lab Test">
                              <div class="absolutetextbottom">
                                 Health Check Up
                              </div>
                           </div>
                        </div>
                        <div class="d-flex align-self-center justify-content-center allcol">
                           <div class="relativetextbox">
                              <img class="img-fluid" src="assets/images/lilawati-labs-covid-test.jpg"
                                 alt="Lilawati Diagnostics | Book A Lab Test | Lilawati Diagnsotic Center in Jogeshwari (West)"
                                 title="Lilawati Diagnostics | Book A Lab Test">
                              <div class="absolutetextbottom">
                                 Covid Test
                              </div>
                           </div>
                        </div>
                        <div class="d-flex align-self-center justify-content-center allcol">
                           <div class="relativetextbox">
                              <img class="img-fluid" src="assets/images/lilawati-labs-home-visit.jpg"
                                 alt="Lilawati Diagnostics | Book A Lab Test | Lilawati Diagnsotic Center in Jogeshwari (West)"
                                 title="Lilawati Diagnostics | Book A Lab Test">
                              <div class="absolutetextbottom">
                                 Doctor Home Visit
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-1 col-auto allcol d-flex align-self-center justify-content-center order-lg-1">
                     <a id="gallerycarouselleft" class="arrowbox">
                        <span class="icon-left-arrow" aria-hidden="true"></span>
                     </a>
                  </div>
                  <div class="col-lg-1 col-auto allcol d-flex align-self-center justify-content-center order-lg-3">
                     <a id="gallerycarouselright" class="arrowbox">
                        <span class="icon-right-arrow" aria-hidden="true"></span>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end of Gallery secGallery -->

   <!-- test offer section starts here -->

   <section class="testOffer allsection" id="testOffer">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="col-lg-10 allcol text-center">
               <h2 class="section-header grey-header animation-element slide-up">
                  Discover Our Comprehensive Testing Services
               </h2>
               <p class="section-subheader black-header animation-element slide-down">
                  We offer all types of tests. Here are the categories.
               </p>
               <hr class="hrblack">
            </div>
         </div>
         <div class="row justify-content-center">
            <div class="col-lg-1 col-2 col-auto d-flex align-self-center justify-content-center">
               <div id="testOfferSliderLeft" class="bannerarrowbox slick-arrow" style="">
                  <span class="icon-left-arrow" aria-hidden="true"></span>
               </div>
            </div>
            <div class="col-lg-10 col-8">
               <div class="row testOfferSlider ">
                  <div class="col-lg-2">
                     <div class="testOffer-wrapper-div text-center m-4">
                        <div class="icon-div">
                           <span class="icon-kidney testOffer-icon"><span class="path1"></span><span
                                 class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                 class="path5"></span><span class="path6"></span><span class="path7"></span><span
                                 class="path8"></span><span class="path9"></span><span class="path10"></span><span
                                 class="path11"></span><span class="path12"></span><span class="path13"></span></span>
                        </div>
                        <h5 class="mt-4 text-uppercase">kidney</h5>
                     </div>
                  </div>
                  <div class="col-lg-2">
                     <div class="testOffer-wrapper-div text-center m-4">
                        <div class="icon-div">
                           <span class="icon-liver testOffer-icon"><span class="path1"></span><span
                                 class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                 class="path5"></span><span class="path6"></span><span class="path7"></span><span
                                 class="path8"></span><span class="path9"></span><span class="path10"></span><span
                                 class="path11"></span><span class="path12"></span><span class="path13"></span></span>
                        </div>
                        <h5 class="mt-4 text-uppercase">liver</h5>
                     </div>
                  </div>
                  <div class="col-lg-2">
                     <div class="testOffer-wrapper-div text-center m-4">
                        <div class="icon-div">
                           <span class="icon-heart  testOffer-icon"><span class="path1"></span><span
                                 class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                 class="path5"></span><span class="path6"></span><span class="path7"></span><span
                                 class="path8"></span><span class="path9"></span><span class="path10"></span><span
                                 class="path11"></span></span>
                        </div>
                        <h5 class="mt-4 text-uppercase">heart</h5>
                     </div>
                  </div>
                  <div class="col-lg-2">
                     <div class="testOffer-wrapper-div text-center m-4">
                        <div class="icon-div">
                           <span class="icon-vitamin-c testOffer-icon"><span class="path1"></span><span
                                 class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                 class="path5"></span><span class="path6"></span><span class="path7"></span><span
                                 class="path8"></span><span class="path9"></span><span class="path10"></span><span
                                 class="path11"></span><span class="path12"></span></span>
                        </div>
                        <h5 class="mt-4 text-uppercase">Vitamin</h5>
                     </div>
                  </div>
                  <div class="col-lg-2">
                     <div class="testOffer-wrapper-div text-center m-4">
                        <div class="icon-div">
                           <span class="icon-fever testOffer-icon"><span class="path1"></span><span
                                 class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                 class="path5"></span><span class="path6"></span><span class="path7"></span><span
                                 class="path8"></span><span class="path9"></span><span class="path10"></span><span
                                 class="path11"></span><span class="path12"></span><span class="path13"></span><span
                                 class="path14"></span><span class="path15"></span><span class="path16"></span><span
                                 class="path17"></span><span class="path18"></span><span class="path19"></span><span
                                 class="path20"></span><span class="path21"></span><span class="path22"></span><span
                                 class="path23"></span><span class="path24"></span><span class="path25"></span><span
                                 class="path26"></span><span class="path27"></span><span class="path28"></span><span
                                 class="path29"></span><span class="path30"></span><span class="path31"></span><span
                                 class="path32"></span></span>
                        </div>
                        <h5 class="mt-4 text-uppercase">fever</h5>
                     </div>
                  </div>
                  <div class="col-lg-2">
                     <div class="testOffer-wrapper-div text-center m-4">
                        <div class="icon-div">
                           <span class="icon-endocrine testOffer-icon"><span class="path1"></span><span
                                 class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                 class="path5"></span></span>
                        </div>
                        <h5 class="mt-4 text-uppercase">Thyroid</h5>
                     </div>
                  </div>

                  <div class="col-lg-2">
                     <div class="testOffer-wrapper-div text-center m-4">
                        <div class="icon-div">
                           <span class="icon-glucose-meter testOffer-icon"><span class="path1"></span><span
                                 class="path2"></span><span class="path3"></span><span class="path4"></span><span
                                 class="path5"></span><span class="path6"></span><span class="path7"></span><span
                                 class="path8"></span><span class="path9"></span><span class="path10"></span><span
                                 class="path11"></span><span class="path12"></span><span class="path13"></span><span
                                 class="path14"></span><span class="path15"></span><span class="path16"></span><span
                                 class="path17"></span><span class="path18"></span><span class="path19"></span><span
                                 class="path20"></span><span class="path21"></span><span class="path22"></span><span
                                 class="path23"></span><span class="path24"></span><span class="path25"></span><span
                                 class="path26"></span><span class="path27"></span><span class="path28"></span><span
                                 class="path29"></span><span class="path30"></span><span class="path31"></span></span>
                        </div>
                        <h5 class="mt-4 text-uppercase">Sugar</h5>
                     </div>
                  </div>

               </div>
            </div>
            <div class="col-lg-1 col-2 col-auto  d-flex align-self-center justify-content-center order-lg-3 order-3">
               <div id="testOfferSliderRight" class="bannerarrowbox slick-arrow" style="">
                  <span class="icon-right-arrow" aria-hidden="true"></span>
               </div>
            </div>
         </div>
      </div>
   </section>


   <!-- test offer section ends here -->


   <!-- popular test section starts Here -->

   <section class="popularTests allsection" id="popularTests">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="col-lg-10 allcol text-center">
               <h2 class="sectionHeader greyHeader animationElement slideUp">
                  Discover Our Popular Tests
               </h2>
               <p class="sectionSubheader blackHeader animationElement slideDown">
                  Choose from our wide range of popular tests and take control of your health.
               </p>
               <hr class="hrblack">
               <div class="row mt-5">
                  <div class="col-lg-4 mb-4">
                     <div class="popularTest-wrapper">
                        <div class="popularTest-card-tag">79% Off</div>
                        <h3 class="popularTest-card-title text-left mt-5">Full Body Checkup </h3>
                        <p class="mb-2 text-left"><span class="text-base fw-700">Includes: </span><b>11 Parameters</b>
                        </p>
                        <div class="text-left"><span class="fw-700" style="font-size: 18px">₹1399.00</span></div>
                        <div class="justify-content-center pt-2">
                           <button type="button" class="btn-style-4 btn-fill modalButton"
                              tabindex="0" id="modalButton">Book Now</button></div>

                     </div>
                  </div>
                  <div class="col-lg-4 mb-4">
                     <div class="popularTest-wrapper">
                        <div class="popularTest-card-tag">52% Off</div>
                        <h3 class="popularTest-card-title text-left mt-5">Fever A Profile</h3>
                        <p class="mb-2 text-left"><span class="text-base fw-700">Includes: </span><b>6 Parameters</b>
                        </p>
                        <div class="text-left"><span class="fw-700" style="font-size: 18px">₹600.00</span></div>
                        <div class="justify-content-center pt-2">
                           <button type="button" class="btn-style-4 btn-fill modalButton"
                              tabindex="0" id="modalButton">Book Now</button></div>

                     </div>
                  </div>
                  <div class="col-lg-4 mb-4">
                     <div class="popularTest-wrapper">
                        <div class="popularTest-card-tag">56% Off</div>
                        <h3 class="popularTest-card-title text-left mt-5">Fever B Profile</h3>
                        <p class="mb-2 text-left"><span class="text-base fw-700">Includes: </span><b>8 Parameters</b>
                        </p>
                        <div class="text-left"><span class="fw-700" style="font-size: 18px">₹1000.00</span></div>
                        <div class="justify-content-center pt-2">
                           <button type="button" class="btn-style-4 btn-fill modalButton"
                              tabindex="0" id="modalButton">Book Now</button></div>

                     </div>
                  </div>

               </div>
            </div>
         </div>
      </div>
   </section>

   <!-- popular test section ends here -->


   <!-- testimonials section -->
   <section class="allsection" id="secTestimonials">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="col-lg-10 allcol text-center">
               <h2 class="section-header grey-header animation-element slide-up">
                  client testimonials
               </h2>
               <p class="section-subheader black-header animation-element slide-down">
                  What people are saying
               </p>
               <hr class="hrblack">
            </div>
         </div>
         <div class="row justify-content-center" data-aos="fade-left">
            <div class="col-lg-3 col-md-4 mt-4">
               <span><img src="assets/images/star-yellow.png" alt="" class="img-fluid" width="20px"></span>
               <span><img src="assets/images/star-yellow.png" alt="" class="img-fluid" width="20px"></span>
               <span><img src="assets/images/star-yellow.png" alt="" class="img-fluid" width="20px"></span>
               <span><img src="assets/img/star.png" alt="" class="img-fluid" width="20px"></span>
               <span><img src="assets/img/star.png" alt="" class="img-fluid" width="20px"></span>
               <p class="mt-3">Excellent service for blood tests! The staff was courteous and the facility was
                  top-notch.</p>
               <h5>-Amarlal Yadav</h5>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
               <span><img src="assets/images/star-yellow.png" alt="" class="img-fluid" width="20px"></span>
               <span><img src="assets/images/star-yellow.png" alt="" class="img-fluid" width="20px"></span>
               <span><img src="assets/images/star-yellow.png" alt="" class="img-fluid" width="20px"></span>
               <span><img src="assets/images/star-yellow.png" alt="" class="img-fluid" width="20px"></span>
               <span><img src="assets/img/star.png" alt="" class="img-fluid" width="20px"></span>
               <p class="mt-3">Outstanding lab for all kinds of tests! Their attention to detail is commendable.</p>
               <h5>-Pranay Sawant</h5>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
               <span><img src="assets/images/star-yellow.png" alt="" class="img-fluid" width="20px"></span>
               <span><img src="assets/images/star-yellow.png" alt="" class="img-fluid" width="20px"></span>
               <span><img src="assets/images/star-yellow.png" alt="" class="img-fluid" width="20px"></span>
               <span><img src="assets/img/star.png" alt="" class="img-fluid" width="20px"></span>
               <span><img src="assets/img/star.png" alt="" class="img-fluid" width="20px"></span>
               <p class="mt-3">Highly recommended lab for all your testing needs! The pathology services are
                  exceptional.</p>
               <h5>-Prince Chaurasiya</h5>
            </div>
            <div class="col-lg-3 col-md-4 mt-4">
               <span><img src="assets/images/star-yellow.png" alt="" class="img-fluid" width="20px"></span>
               <span><img src="assets/images/star-yellow.png" alt="" class="img-fluid" width="20px"></span>
               <span><img src="assets/images/star-yellow.png" alt="" class="img-fluid" width="20px"></span>
               <span><img src="assets/images/star-yellow.png" alt="" class="img-fluid" width="20px"></span>
               <span><img src="assets/img/star-yellow.png" alt="" class="img-fluid" width="20px"></span>
               <p class="mt-3">Superb service! I got all my lab tests done hassle-free. Highly satisfied with the
                  experience.</p>
               <h5>-Rohit Dubey</h5>
            </div>
         </div>

      </div>
   </section>
   <!-- end of testimonials sectm -->
   <!-- contact seccontact -->
   <section class="allsection" id="secContact">
      <div class="container-fluid">
         <div class="row justify-content-center">
            <div class="col-lg-10 allcol text-center">
               <h2 class="section-header grey-header animation-element slide-up">
                  CONTACT US
               </h2>
               <p class="section-subheader black-header animation-element slide-down">
                  Get In touch
               </p>
               <hr class="hrblack">
            </div>
         </div>
         <div class="row justify-content-center allcol">
            <div class="col-lg-10">
               <div class="row">
                  <div class="col-lg-5 allcol text-center animation-element slide-right" id="officeaddr">
                     <p class="addresstext black-header">
                        Address Of Lilawati Diagnostic Center
                     </p>
                     <p class="section-subtext">
                        Lilawati Diagnostic Center, Shop No. 7, next to Famous Bakery M.G. School Link Road, Behram
                        Baug,
                        Jogeshwari West, Mumbai, Maharashtra 400102.
                        <br>
                        Call - <span><a class="numlink" href="tel:+91-9967754237">+91-9967754237</a></span>
                     </p>
                  </div>
                  <div class="col-lg-1"></div>
                  <div class="col-lg-6 timing">
                     <p class="addresstext black-header">
                        <span class="icon-clock timeIcon"></span> <span class="timeIconText">Monday - Sunday 24 X
                           7</span>
                     </p>
                     <p class="addresstext black-header">
                        <span class="icon-call timeIcon"></span> <a href="tel: 9967754237" class="timeIconText">+91
                           9967754237</a>
                     </p>
                  </div>
               </div>
            </div>

         </div>
         <div class="row justify-content-center">
            <div class="col-lg-10 allcol p-0">
               <iframe id="mapframe" class="no-border" width="100%" height="450" src=""></iframe>
            </div>
         </div>
         <div class="row justify-content-center">
         </div>
         <div id="rrmodal" class="modal fade">
            <div class="modal-dialog modal-dialog-centered">
               <div class="modal-content frmbdr">
                  <div class="modal-body frmbox">
                     <div class="text-right">
                        <button class="close modal-close" data-dismiss="modal" aria-hidden="true">
                           <span class="icon-close"></span>
                        </button>
                     </div>
                     <form action="submit_form.php" method="get">
                        <p class="text-center form-header">
                           Get a Call Back
                        </p>
                        <div class="form-group">
                           <label for="namelabel" class="formlabel">
                              Name
                           </label>
                           <input type="text" class="form-control custfield " name="entry.1884265043" placeholder="Name"
                              required>
                        </div>
                        <div class="form-group">
                           <label for="emaillabel" class="formlabel">
                              Email
                           </label>
                           <input type="email" class="form-control custfield " name="entry.275365505"
                              placeholder="Email Address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,63}$">
                        </div>
                        <div class="form-group">
                           <label for="phonelabel" class="formlabel">
                              Phone
                           </label>
                           <div class="input-group">
                              <div class="input-group-prepend">
                                 <span class="input-group-text custigp">
                                    +91
                                 </span>
                              </div>
                              <input type="tel" placeholder="Mobile Number"
                                 class="form-control custfield custfieldphone" name="entry.1280777366"
                                 pattern="[6-9]{1}[0-9]{9}" required>
                           </div>
                        </div>
                        <div>
                           <input type="hidden" class="" name="form_id" value="popForm">
                        </div>
                        <div class="form-group frmsubmit">
                           <div class="text-center">
                              <button type="submit" class="btn btn-custom">
                                 Get a Call Back
                              </button>
                           </div>
                        </div>
                     </form>
                     <p class="text-center mb-0 p-2"><a class="numlink" href="tel:+91-9967754237"><span
                              class="icon-call pr-2"></span>+91-9967754237</a></p>
                  </div>
               </div>
            </div>
         </div>

      </div>
   </section>
   <!-- end of contact seccontact -->
   <!-- footer -->
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