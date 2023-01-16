<?php
session_start();
require("../lib/mainconfig.php");
$check_settings = mysqli_query($db, "SELECT * FROM settings WHERE id = '1'");
$data_settings = mysqli_fetch_assoc($check_settings);
$msg_type = "nothing";

if (isset($_POST['login'])) {
  $post_username = htmlspecialchars(trim($_POST['username']));
  $post_password = htmlspecialchars(trim($_POST['password']));
  $ip = $_SERVER['REMOTE_ADDR'];
  if (empty($post_username) || empty($post_password)) {
    $msg_type = "error";
    $msg_content = "Please Fill In All Inputs.";
  } else {
    $check_user = mysqli_query($db, "SELECT * FROM users WHERE username = '$post_username'");
    if (mysqli_num_rows($check_user) == 0) {
      $msg_type = "error";
      $msg_content = "The username you entered is not registered.";
    } else {
      $data_user = mysqli_fetch_assoc($check_user);
      if (password_verify($post_password, $data_user['password'])) {
        $verified = true;
      } else {
        $verified = false;
      }

      if ($data_user['level'] == "Developers" && !$verified) {
        $ip = $_SERVER['REMOTE_ADDR'];
        $msg_type = "error";
        $msg_content = "The Password You Enter Is Wrong.";
      } else if (!$verified) {
        $msg_type = "error";
        $msg_content = "The Password You Enter Is Wrong!.";
      } else if ($data_user['status'] == "Suspended") {
        $msg_type = "error";
        $msg_content = "Account Suspended.";
      } else if ($data_user['status'] == "Not Active") {
        header("Location: " . $cfg_baseurl . "/login/verification.php");
      } else {
        $_SESSION['user'] = $data_user;
        header("Location: " . $cfg_baseurl);
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   <!-- Meta Tags -->
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <meta name="author" content="<?php echo $data_settings['author']; ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <!-- Page Title -->
   <title><?php echo $data_settings['web_title']; ?></title>
   <meta name="description" content="<?php echo $data_settings['web_description']; ?>" />
   <meta name="keywords" content="<?php echo $data_settings['seo_keywords']; ?>" />
   <!-- Favicon Icon -->
   <link rel="shortcut icon" type="image/png" href="<?php echo $data_settings['link_fav']; ?>">
   <!-- Stylesheets -->
   <link rel="stylesheet" href="assets/css/font-awesome.min.css">
   <link rel="stylesheet" href="assets/css/animate.min.css">
   <link rel="stylesheet" href="assets/css/slicknav.min.css">
   <link rel="stylesheet" href="assets/css/magnific-popup.css">
   <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="assets/fonts/flaticon.css">
   <link rel="stylesheet" href="assets/css/style.css">
   <link rel="stylesheet" href="assets/css/responsive.css">
   <?php echo $data_settings['seo_meta']; ?>
   <?php echo $data_settings['seo_analytics']; ?>
</head>

<body>
   <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
      <![endif]-->

      
   <!-- Main Content site -->
   <div class="main-site">
      <!--preloader  -->
      <div id="loader-wrapper">
         <div id="loader"></div>
         <div class="loader-section section-left"></div>
         <div class="loader-section section-right"></div>
      </div>
      <!--/End preloader  -->

      <!-- Header Area Start-->
      <header class="sticky-header home-2">
         <div class="container">
            <div class="row">
               <div class="col-md-2 d-flex align-items-center">
                  <div class="logo">
                     <a href="index2.html">
                        <img src="assets/img/logo-2.png" alt="">
                     </a>
                  </div>
               </div>
               <div class="col-md-10">
                  <div class="download-btn float-right"> <a href="#" class="orange">Download</a>
                  </div>
                  <div class="main-menu float-right">
                     <nav>
                        <ul>
                           <li class="dropdown"><a href="#" data-scroll-nav="0">Home</a>
                              <ul>
                                 <li><a href="index.html">Home One</a></li>
                                 <li><a href="index2.html">Home Two</a></li>
                                 <li><a href="index3.html">Home Three</a></li>
                                 <li><a href="index4.html">Apps Landing </a></li>
                              </ul>
                           </li>
                           <li><a href="#" data-scroll-nav="1">Features</a>
                           </li>
                           <li><a href="#" data-scroll-nav="2">Overview</a>
                           </li>
                           <li><a href="#" data-scroll-nav="3">Pricing</a>
                           </li>
                           <li><a href="#" data-scroll-nav="4">FAQ</a>
                           </li> 
                           <li class="dropdown"><a href="#" data-scroll-nav="0">Blog</a>
                              <ul>
                                 <li><a href="blog.html">Blog Page</a></li>
                                 <li><a href="single-blog.html">Single Blog</a></li>
                              </ul>
                           </li>
                        </ul>
                     </nav>
                  </div>
                  <div id="mobile-menu"></div>
               </div>
            </div>
         </div>
      </header>
      <!-- Header Area End!-->

      <!-- Hero Area Start-->
      <div class="hero-area home-2" data-scroll-index="0">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2 text-center">
                  <div class="hero-content">
                     <h3>Easy to build landing</h3>
                     <p>See all your relevant tracked data at the glance in one place. With the new daily view you can easily review</p> <a href="#" class="hero-btn orange">Try it Free for 30 Days</a>
                     <a href="#" class="hero-btn-2nd">Version 2.0 ∙ Release Notes</a>
                     <img src="assets/img/hero2-single.png" alt="">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Hero Area End!-->

      <!-- Feature Area Start-->
      <div class="feature-area section-padding" data-scroll-index="1">
         <div class="container">
            <div class="row">
               <div class="col-md-8 offset-md-2">
                  <div class="section-title m-b-50">
                     <h2>Focus on your work our app remember and track </h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="row">
                     <!--Single Feature Box-->
                     <div class="col-md-6">
                        <div class="feature-box">
                           <div class="feature-icon">
                              <img src="assets/img/icon-img1.png" alt="">
                           </div>
                           <h4>Automatic backups</h4>
                           <p>It doesn't matter if you are in an office or on an airplane. You will never lose a second just because there is no internet connection.</p>
                        </div>
                     </div>
                     <!--Single Feature Box-->
                     <!--Single Feature Box-->
                     <div class="col-md-6">
                        <div class="feature-box">
                           <div class="feature-icon">
                              <img src="assets/img/icon-img2.png" alt="">
                           </div>
                           <h4>Best Privacy for document</h4>
                           <p>It doesn't matter if you are in an office or on an airplane. You will never lose a second just because there is no internet connection.</p>
                        </div>
                     </div>
                     <!--Single Feature Box-->
                     <!--Single Feature Box-->
                     <div class="col-md-6">
                        <div class="feature-box">
                           <div class="feature-icon">
                              <img src="assets/img/icon-img3.png" alt="">
                           </div>
                           <h4>Easily manage works.</h4>
                           <p>It doesn't matter if you are in an office or on an airplane. You will never lose a second just because there is no internet connection.</p>
                        </div>
                     </div>
                     <!--Single Feature Box-->
                     <!--Single Feature Box-->
                     <div class="col-md-6">
                        <div class="feature-box">
                           <div class="feature-icon">
                              <img src="assets/img/icon-img4.png" alt="">
                           </div>
                           <h4>Works completely offline</h4>
                           <p>It doesn't matter if you are in an office or on an airplane. You will never lose a second just because there is no internet connection.</p>
                        </div>
                     </div>
                     <!--Single Feature Box-->
                  </div>
               </div>
            </div>
            <!--Call To Action -->
            <div class="row">
               <div class="col-md-12">
                  <div class="cta-box home-2">
                     <div class="row">
                        <div class="col-md-8">
                           <h2>Start your <span>30-days</span> Free Trial today</h2>
                        </div>
                        <div class="col-md-4"> <a href="#" class="cta-btn orange">Try It Free For 30 Days</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!--Call To Action -->
         </div>
      </div>
      <!-- Feature Area End!-->

      <!-- Overvew List Area Start-->
      <div class="overvew-area-home-2" data-scroll-index="2">
         <div class="container">
            <div class="signle-overview one">
               <div class="row">
                  <div class="col-md-6">
                     <div class="overview-content-home2">
                        <div class="section-title text-left">
                           <h2>A faster, easier to create organized lists</h2>
                           <p>Once you open your working file or application, our app will start the timer for you automatically.</p>
                        </div>
                        <div class="overview-lists">
                           <div class="single-list">
                              <img src="assets/img/overview-list1.png" alt="">
                              <div class="list-content">
                                 <h3> Offline browsing</h3>
                                 <p>It doesn't matter if you are in an office or on an airplane. You will never lose a second just because there is no internet connection.</p>
                              </div>
                           </div>
                           <div class="single-list">
                              <img src="assets/img/overview-list2.png" alt="">
                              <div class="list-content">
                                 <h3> Manage works</h3>
                                 <p>It doesn't matter if you are in an office or on an airplane. You will never lose a second just because there is no internet connection.</p>
                              </div>
                           </div>
                           <div class="single-list">
                              <img src="assets/img/overview-list3.png" alt="">
                              <div class="list-content">
                                 <h3> backups document</h3>
                                 <p>It doesn't matter if you are in an office or on an airplane. You will never lose a second just because there is no internet connection.</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="overview-image wide-box">
                        <img src="assets/img/overview-1nd.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Overvew List Area End!-->

      <!-- video overview Area start-->
      <div class="video-overview home-2">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="popup-video text-center">
                     <a class="mfp-iframe video-play-button" href="https://www.youtube.com/watch?v=t5wbuS9Wek4"> <i class="fa fa-play"></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- video overview Area End!-->

      <!-- Overvew Area Start-->
      <div class="overvew-area-home-2">
         <div class="container">
            <div class="signle-overview two">
               <div class="row">
                  <div class="col-md-6">
                     <div class="overview-content">
                        <div class="overview-icon"> <i class="fa fa-commenting-o" aria-hidden="true"></i>
                        </div>
                        <h2>Quick messaging with clients</h2>
                        <p>It doesn't matter if you are in an office or on an airplane. You will never lose a second just because there is no internet connection. In addition to Auto-tracking you can still use the traditional.</p>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="overview-image">
                        <img src="assets/img/overview-3nd.png" alt="">
                     </div>
                  </div>
               </div>
            </div>
            <div class="signle-overview two pd-70">
               <div class="row">
                  <div class="col-md-6">
                     <div class="overview-image">
                        <img src="assets/img/overview-2nd.png" alt="">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="overview-content">
                        <div class="overview-icon"> <i class="fa fa-clock-o" aria-hidden="true"></i>
                        </div>
                        <h2>Easily manage <br> your works</h2>
                        <p>It doesn't matter if you are in an office or on an airplane. You will never lose a second just because there is no internet connection. In addition to Auto-tracking you can still use the traditional.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Overvew Area End!-->

      <!-- Testimonial Area Start-->
      <div class="testimonail-area home-2">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-title text-center">
                     <h2>24k+ users love us</h2>
                  </div>
               </div>
            </div>
            <div class="testimonial-main">
               <div class="container">
                  <div class="row">
                     <div class="col-md-12">
                        <div id="testimonial-active" class="testimonial-wrapper owl-carousel">
                           <!-- Single Testimonial -->
                           <div class="single-testimonial style-two">
                              <div class="author-image">
                                 <img src="assets/img/feedback1.png" alt="">
                              </div>
                              <div class="testimonial-content">
                                 <p>They knows when you design in your favorite layout app, have your project files open, search for inspiration or have a meeting with your client.</p>
                                 <div class="author-details">
                                    <div class="ratting"> <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                       <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                       <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                       <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                       <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    </div>
                                    <h4>Mario Hedge</h4>
                                 </div>
                              </div>
                           </div>
                           <!-- Single Testimonial End -->
                           <!-- Single Testimonial -->
                           <div class="single-testimonial style-two">
                              <div class="author-image">
                                 <img src="assets/img/feedback2.png" alt="">
                              </div>
                              <div class="testimonial-content">
                                 <p>They knows when you design in your favorite layout app, have your project files open, search for inspiration or have a meeting with your client.</p>
                                 <div class="author-details">
                                    <div class="ratting"> <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                       <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                       <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                       <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                       <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    </div>
                                    <h4>Mario Hedge</h4>
                                 </div>
                              </div>
                           </div>
                           <!-- Single Testimonial End -->
                           <!-- Single Testimonial -->
                           <div class="single-testimonial style-two">
                              <div class="author-image">
                                 <img src="assets/img/feedback3.png" alt="">
                              </div>
                              <div class="testimonial-content">
                                 <p>They knows when you design in your favorite layout app, have your project files open, search for inspiration or have a meeting with your client.</p>
                                 <div class="author-details">
                                    <div class="ratting"> <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                       <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                       <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                       <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                       <a href="#"><i class="fa fa-star" aria-hidden="true"></i></a>
                                    </div>
                                    <h4>Mario Hedge</h4>
                                 </div>
                              </div>
                           </div>
                           <!-- Single Testimonial End -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Testimonial Area End!-->

      <!-- pricing Area Start-->
      <div class="pricing-area home-2" data-scroll-index="3">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <div class="section-title text-left">
                     <h3><i class="fa fa-usd" aria-hidden="true"></i> Our Pricing Plans</h3>
                     <h2>Choose the best pricing for start your journey</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <!--Single Pricing Table-->
               <div class="col-md-4">
                  <div class="single-pricing-table">
                     <h4>Free</h4>
                     <h2>$0<span>/mo</span></h2>
                     <ul>
                        <li>Unlimited Pages</li>
                        <li>All Team Members</li>
                        <li>Unlimited Leads</li>
                        <li>Unlimited Page Views</li>
                        <li>Export in HTML/CSS</li>
                     </ul> <a href="#" class="price-btn">Get Started</a>
                  </div>
               </div>
               <!--//Single Pricing Table-->
               <!--Single Pricing Table-->
               <div class="col-md-4">
                  <div class="single-pricing-table popular">
                     <h4>Popular</h4>
                     <h2>$20<span>/mo</span></h2>
                     <ul>
                        <li>Unlimited Pages</li>
                        <li>All Team Members</li>
                        <li>Unlimited Leads</li>
                        <li>Unlimited Page Views</li>
                        <li>Export in HTML/CSS</li>
                     </ul> <a href="#" class="price-btn orange">Get Started</a>
                  </div>
               </div>
               <!--//Single Pricing Table-->
               <!--Single Pricing Table-->
               <div class="col-md-4">
                  <div class="single-pricing-table">
                     <h4>Professional</h4>
                     <h2>$30<span>/mo</span></h2>
                     <ul>
                        <li>Unlimited Pages</li>
                        <li>All Team Members</li>
                        <li>Unlimited Leads</li>
                        <li>Unlimited Page Views</li>
                        <li>Export in HTML/CSS</li>
                     </ul> <a href="#" class="price-btn">Get Started</a>
                  </div>
                  <!--//Single Pricing Table-->
               </div>
            </div>
         </div>
      </div>
      <!-- pricing Area End!-->

      <!-- FAQ & Conatct Area Starts-->
      <div class="faq-contact-area home-2" data-scroll-index="4">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-title">
                     <h2>Frequently Asked Qutions</h2>
                  </div>
               </div>
            </div>
            <div class="row pt-65">
               <div class="col-md-6">
                  <div id="accordion" class=" style-2">
                     <div class="card">
                        <div class="card-header"> <a class="card-link" data-toggle="collapse" href="#Xprosik">
                                  What Is Xprosik?
                                  <i class="fa fa-angle-down" aria-hidden="true"></i>
                                  <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </a>
                        </div>
                        <div id="Xprosik" class="collapse show" data-parent="#accordion">
                           <div class="card-body">It doesn't matter if you are in an office or on an airplane. You will never lose a second just because there is no internet connection. In addition to Auto-tracking you can still use the traditional.</div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#purchase">
                                How to purchase?
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                <i class="fa fa-angle-up" aria-hidden="true"></i>
                              </a>
                        </div>
                        <div id="purchase" class="collapse" data-parent="#accordion">
                           <div class="card-body">It doesn't matter if you are in an office or on an airplane. You will never lose a second just because there is no internet connection. In addition to Auto-tracking you can still use the traditional.</div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#free">
                                  Can i use for free ?
                                  <i class="fa fa-angle-down" aria-hidden="true"></i>
                                  <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </a>
                        </div>
                        <div id="free" class="collapse" data-parent="#accordion">
                           <div class="card-body">It doesn't matter if you are in an office or on an airplane. You will never lose a second just because there is no internet connection. In addition to Auto-tracking you can still use the traditional.</div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#refund">
                                  Hot to  get refund ?
                                  <i class="fa fa-angle-down" aria-hidden="true"></i>
                                  <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </a>
                        </div>
                        <div id="refund" class="collapse" data-parent="#accordion">
                           <div class="card-body">It doesn't matter if you are in an office or on an airplane. You will never lose a second just because there is no internet connection. In addition to Auto-tracking you can still use the traditional.</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-5 offset-md-1">
                  <div class="contact-form">
                     <h5>Need help? Contact us</h5>
                     <form id="contact-form" class="custom-form" method="post" action="#">
                        <div class="controls">
                           <div class="form-group">
                              <input id="form_name" type="text" name="name" class="form-control" placeholder="Your Name *" required="required" data-error="Name is required.">
                           </div>
                           <div class="form-group">
                              <input id="form_email" type="email" name="email" class="form-control" placeholder="Your Mail *" required="required" data-error="Valid email is required.">
                           </div>
                           <div class="form-group">
                              <textarea id="form_message" name="message" class="form-control" placeholder="Your Message*" rows="4" required="required" data-error="Please,leave us a message."></textarea>
                           </div>
                           <input type="submit" class="submit-btn home-2" value="Submit Request">
                        </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- FAQ & Conatct Area End!-->

      <!-- Footer Area Start-->
      <footer class="home-2">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="cta-box">
                     <div class="row">
                        <div class="col-md-8">
                           <h2>Start your <span>30-days</span> Free Trial today</h2>
                        </div>
                        <div class="col-md-4"> <a href="#" class="cta-btn orange">Get Started Now</a>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="subscribe-box">
                        <div class="section-title">
                           <h2>Subscribe to our newsletter for fast updates & news</h2>
                        </div>
                        <form class="subscribe-form" action="#" method="post">
                           <div class="form-group">
                              <label style="display:none;" for="subscribe-email"></label>
                              <input type="text" name="email" placeholder="Enter Email Address" class="subscribe-email form-control" id="subscribe-email">
                           </div>
                           <button type="submit" class="subscribe-btn btn orange grdnt-blue">Subscribe Now!</button>
                        </form>
                     </div>
                     <div class="footer-bottom">
                        <div class="footer-logo">
                           <a href="index.html">
                              <img src="assets/img/logo-2.png" alt="">
                           </a>
                        </div>
                        <p class="copyright-text">2019 Copyright Xprosik . All Rights Reserved</p>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Scroll To Top -->
            <a href="#" class="scrollup"><i class="fa fa-angle-double-up"></i></a>
         </div>
      </footer>
      <!-- Footer Area End!-->

   </div>
   <!-- /End Main Site -->
   
   <!-- Js File-->
   <script src="assets/js/jquery.v3.4.1.min.js"></script>
   <script src="assets/js/bootstrap.min.js"></script>
   <script src="assets/js/scrollIt.min.js"></script>
   <script src="assets/js/jquery.slicknav.min.js"></script>
   <script src="assets/js/owl.carousel.min.js"></script>
   <script src="assets/js/jquery.magnific-popup.min.js"></script>
   <script src="assets/js/plugins.js"></script>
   <script src="assets/js/main.js"></script>
</body>

</html>