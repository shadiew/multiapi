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
                        <img src="<?php echo $data_settings['link_logo']; ?>" alt="Logo <?php echo $data_settings['web_name']; ?>">
                     </a>
                  </div>
               </div>
               <div class="col-md-10">
                  <div class="download-btn float-right"> <a href="../daftar" class="orange">Daftar</a>
                  </div>
                  <div class="main-menu float-right">
                     <nav>
                        <ul>
                        <li><a href="<?php echo $cfg_baseurl; ?>" >Beranda</a>
                           <li><a href="#" data-scroll-nav="1">Features</a>
                           </li>
                           
                           <li><a href="#" data-scroll-nav="4">FAQ</a>
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
                     <h3><?php echo $data_settings['web_slogan']; ?></h3>
                     <p>
                        Menyediakan layanan jasa tambah follower, like views, subscriber, berbagai macam jenis sosial media
                     </p> <a href="../login" class="hero-btn orange">Login/Signup</a>
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
                     <h2>Layanan dan Pelayanan Terbaik di Indonesia</h2>
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
                           <h4>100% Aman</h4>
                           <p>Akun Sosial media Anda kami jamin 100% aman karena tanpa membutuhkan password.</p>
                        </div>
                     </div>
                     <!--Single Feature Box-->
                     <!--Single Feature Box-->
                     <div class="col-md-6">
                        <div class="feature-box">
                           <div class="feature-icon">
                              <img src="assets/img/icon-img2.png" alt="">
                           </div>
                           <h4>Pelayanan Terbaik</h4>
                           <p>Lebih dari 6 CS yang siap membantu menyelesaikan masalah kamu</p>
                        </div>
                     </div>
                     <!--Single Feature Box-->
                     <!--Single Feature Box-->
                     <div class="col-md-6">
                        <div class="feature-box">
                           <div class="feature-icon">
                              <img src="assets/img/icon-img3.png" alt="">
                           </div>
                           <h4>Tanpa Ribet</h4>
                           <p>Layanan dan produk dikerjakan oleh otomatis oleh sistem server kami 1x24 jam aktif</p>
                        </div>
                     </div>
                     <!--Single Feature Box-->
                     <!--Single Feature Box-->
                     <div class="col-md-6">
                        <div class="feature-box">
                           <div class="feature-icon">
                              <img src="assets/img/icon-img4.png" alt="">
                           </div>
                           <h4>Pembayaran Mudah</h4>
                           <p>Kami menyediakan berbagai metode pembayaran mulai dari bank transfer hingga ewallet</p>
                        </div>
                     </div>
                     <!--Single Feature Box-->
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Feature Area End!-->

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

      

      <!-- FAQ & Conatct Area Starts-->
      <div class="faq-contact-area home-2" data-scroll-index="4">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="section-title">
                     <h2>Pertanyaan Umum</h2>
                  </div>
               </div>
            </div>
            <div class="row pt-65">
               <div class="col-md-6">
                  <div id="accordion" class=" style-2">
                     <div class="card">
                        <div class="card-header"> <a class="card-link" data-toggle="collapse" href="#Xprosik">
                        Apa itu <?php echo $data_settings['web_name']; ?>?
                                  <i class="fa fa-angle-down" aria-hidden="true"></i>
                                  <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </a>
                        </div>
                        <div id="Xprosik" class="collapse show" data-parent="#accordion">
                           <div class="card-body"><?php echo $data_settings['web_name']; ?> adalah sebuah platform bisnis yang menyediakan berbagai layanan social media marketing yang bergerak terutama di Indonesia. Dengan bergabung bersama kami, Anda dapat menjadi penyedia jasa social media atau reseller social media seperti jasa penambah Followers, Likes, dll.</div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#purchase">
                        Bagaimana cara mendaftar <?php echo $data_settings['web_name']; ?> ?
                                <i class="fa fa-angle-down" aria-hidden="true"></i>
                                <i class="fa fa-angle-up" aria-hidden="true"></i>
                              </a>
                        </div>
                        <div id="purchase" class="collapse" data-parent="#accordion">
                           <div class="card-body">Anda dapat langsung mendaftar di website Irvan Kede pada halaman Daftar</div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#free">
                        Bagaimana cara membuat pesanan ?
                                  <i class="fa fa-angle-down" aria-hidden="true"></i>
                                  <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </a>
                        </div>
                        <div id="free" class="collapse" data-parent="#accordion">
                           <div class="card-body">Untuk membuat pesanan sangatlah mudah, Anda hanya perlu masuk terlebih dahulu ke akun Anda dan menuju halaman pemesanan dengan mengklik menu yang sudah tersedia. Selain itu Anda juga dapat melakukan pemesanan melalui request API.</div>
                        </div>
                     </div>
                     <div class="card">
                        <div class="card-header"> <a class="collapsed card-link" data-toggle="collapse" href="#refund">
                        Bagaimana cara melakukan deposit/isi saldo ?
                                  <i class="fa fa-angle-down" aria-hidden="true"></i>
                                  <i class="fa fa-angle-up" aria-hidden="true"></i>
                                </a>
                        </div>
                        <div id="refund" class="collapse" data-parent="#accordion">
                           <div class="card-body">Untuk melakukan deposit/isi saldo, Anda hanya perlu masuk terlebih dahulu ke akun Anda dan menuju halaman deposit dengan mengklik menu yang sudah tersedia. Kami menyediakan deposit melalui bank dan pulsa.</div>
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
               
               <div class="row">
                  <div class="col-md-8 offset-md-2">
                     <div class="subscribe-box">
                        <div class="section-title">
                           
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