<?php
session_start();
require("../lib/mainconfig.php");
$check_settings = mysqli_query($db, "SELECT * FROM settings WHERE id = '1'");
$data_settings = mysqli_fetch_assoc($check_settings);
$msg_type = "nothing";

if (isset($_POST['signup'])) {
  $post_email = htmlspecialchars(trim($_POST['email']));
  $post_name = htmlspecialchars(trim($_POST['name']));
  $post_username = htmlspecialchars(trim($_POST['username']));
  $post_nohp = htmlspecialchars(trim($_POST['nohp']));
  $post_password = htmlspecialchars(trim($_POST['password']));
  $post_confirm = htmlspecialchars(trim($_POST['confirm']));

  $check_user = mysqli_query($db, "SELECT * FROM users WHERE username = '$post_username'");
  $check_email = mysqli_query($db, "SELECT * FROM users WHERE email = '$post_email'");
  $check_nohp = mysqli_query($db, "SELECT * FROM users WHERE email = '$post_nohp'");
  $ip = $_SERVER['REMOTE_ADDR'];
  if (empty($post_email) || empty($post_username) || empty($post_name) || empty($post_nohp) || empty($post_password)) {
    $msg_type = "error";
    $msg_content = "Input To Fill All.";
  } else if (mysqli_num_rows($check_email) > 0) {
    $msg_type = "error";
    $msg_content = "The Email You Enter is Registered.";
  } else if (mysqli_num_rows($check_user) > 0) {
    $msg_type = "error";
    $msg_content = "The username you entered is already registered.";
  } else if (strlen($post_password) < 5) {
    $msg_type = "error";
    $msg_content = "Minimum 5 characters password.";
  } else if ($post_password <> $post_confirm) {
    $msg_type = "error";
    $msg_content = "Password is not the same.";
  } else {
    $post_apikey = random(20);
    $post_kunci = random(5);
    $ip = $_SERVER['REMOTE_ADDR'];
    $hashed_password = password_hash($post_password, PASSWORD_DEFAULT);
    $insert_user = mysqli_query($db, "INSERT INTO users (email, name, username, password, nohp, balance, level, registered, status, api_key, uplink, otp, point, ip) 
    VALUES ('$post_email', '$post_name', '$post_username', '$hashed_password', '$post_nohp', '0', 'Member', '$date $time', 'Not Active', '$post_apikey', 'Server', '$post_kunci', '0', '$ip')");
    if ($insert_user == true) {
      $to = $post_email;
      $msg = "<hr></hr><br>Hallo <b> $post_username </b>, Please use input this OTP to verify your account<br><br>OTP: <b>$post_kunci<b> <br><br><br><hr></hr><br>You cannot contact this Noreply message, Please Contact Admin Contact Through the Application or via Ticket. <br><br>Thanks.<br><hr></hr>";
      $subject = "Verify Account";
      $headers = "From: SMM PANEL <$email_webmail_forgot> \r\n";
      $headers .= "Cc:$email_webmail_forgot \r\n";
      $headers .= "MIME-Version: 1.0\r\n";
      $headers .= "Content-type: text/html\r\n";
      $send = mail($to, $subject, $msg, $headers);
      if ($send == true) {
        header("Location: $cfg_baseurl/login/verification.php");
      } else {
        $msg_type = "error";
        $msg_content = "<script>swal('Error!', 'Error system (1).', 'error');</script><b>Failed:</b> Error system (1).";
      }
    } else {
      $msg_type = "error";
      $msg_content = "A System Error Occurred.";
    }
  }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
  <title>Halaman Pendaftaran</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="./favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../themes/assets/vendor/bootstrap-icons/font/bootstrap-icons.css">
  <link rel="stylesheet" href="../themes/assets/vendor/tom-select/dist/css/tom-select.bootstrap5.css">

  <!-- CSS Front Template -->

  <link rel="preload" href="../themes/assets/css/theme.min.css" data-hs-appearance="default" as="style">
  <link rel="preload" href="../themes/assets/css/theme-dark.min.css" data-hs-appearance="dark" as="style">

  <style data-hs-appearance-onload-styles>
    *
    {
      transition: unset !important;
    }

    body
    {
      opacity: 0;
    }
  </style>

  <script>
            window.hs_config = {"autopath":"@@autopath","deleteLine":"hs-builder:delete","deleteLine:build":"hs-builder:build-delete","deleteLine:dist":"hs-builder:dist-delete","previewMode":false,"startPath":"/index.html","vars":{"themeFont":"https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap","version":"?v=1.0"},"layoutBuilder":{"extend":{"switcherSupport":true},"header":{"layoutMode":"default","containerMode":"container-fluid"},"sidebarLayout":"default"},"themeAppearance":{"layoutSkin":"default","sidebarSkin":"default","styles":{"colors":{"primary":"#377dff","transparent":"transparent","white":"#fff","dark":"132144","gray":{"100":"#f9fafc","900":"#1e2022"}},"font":"Inter"}},"languageDirection":{"lang":"en"},"skipFilesFromBundle":{"dist":["assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","assets/js/demo.js"],"build":["assets/css/theme.css","assets/vendor/hs-navbar-vertical-aside/dist/hs-navbar-vertical-aside-mini-cache.js","assets/js/demo.js","assets/css/theme-dark.css","assets/css/docs.css","assets/vendor/icon-set/style.css","assets/js/hs.theme-appearance.js","assets/js/hs.theme-appearance-charts.js","node_modules/chartjs-plugin-datalabels/dist/chartjs-plugin-datalabels.min.js","assets/js/demo.js"]},"minifyCSSFiles":["assets/css/theme.css","assets/css/theme-dark.css"],"copyDependencies":{"dist":{"*assets/js/theme-custom.js":""},"build":{"*assets/js/theme-custom.js":"","node_modules/bootstrap-icons/font/*fonts/**":"assets/css"}},"buildFolder":"","replacePathsToCDN":{},"directoryNames":{"src":"./src","dist":"./dist","build":"./build"},"fileNames":{"dist":{"js":"theme.min.js","css":"theme.min.css"},"build":{"css":"theme.min.css","js":"theme.min.js","vendorCSS":"vendor.min.css","vendorJS":"vendor.min.js"}},"fileTypes":"jpg|png|svg|mp4|webm|ogv|json"}
            window.hs_config.gulpRGBA = (p1) => {
  const options = p1.split(',')
  const hex = options[0].toString()
  const transparent = options[1].toString()

  var c;
  if(/^#([A-Fa-f0-9]{3}){1,2}$/.test(hex)){
    c= hex.substring(1).split('');
    if(c.length== 3){
      c= [c[0], c[0], c[1], c[1], c[2], c[2]];
    }
    c= '0x'+c.join('');
    return 'rgba('+[(c>>16)&255, (c>>8)&255, c&255].join(',')+',' + transparent + ')';
  }
  throw new Error('Bad Hex');
}
            window.hs_config.gulpDarken = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = -parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            window.hs_config.gulpLighten = (p1) => {
  const options = p1.split(',')

  let col = options[0].toString()
  let amt = parseInt(options[1])
  var usePound = false

  if (col[0] == "#") {
    col = col.slice(1)
    usePound = true
  }
  var num = parseInt(col, 16)
  var r = (num >> 16) + amt
  if (r > 255) {
    r = 255
  } else if (r < 0) {
    r = 0
  }
  var b = ((num >> 8) & 0x00FF) + amt
  if (b > 255) {
    b = 255
  } else if (b < 0) {
    b = 0
  }
  var g = (num & 0x0000FF) + amt
  if (g > 255) {
    g = 255
  } else if (g < 0) {
    g = 0
  }
  return (usePound ? "#" : "") + (g | (b << 8) | (r << 16)).toString(16)
}
            </script>
</head>

<body class="d-flex align-items-center min-h-100">

  <script src="../themes/assets/js/hs.theme-appearance.js"></script>

  <!-- ========== HEADER ========== -->
  <header class="position-absolute top-0 start-0 end-0 mt-3 mx-3">
    <div class="d-flex d-lg-none justify-content-between">
      <a href="./index.html">
        <img class="w-100" src="<?php echo $data_settings['link_logo_dark']; ?>" alt="Image Description" data-hs-theme-appearance="default" style="min-width: 7rem; max-width: 7rem;">
        <img class="w-100" src="<?php echo $data_settings['link_logo_dark']; ?>" alt="Image Description" data-hs-theme-appearance="dark" style="min-width: 7rem; max-width: 7rem;">
      </a>

      
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
  <main id="content" role="main" class="main pt-0">
    <!-- Content -->
    <div class="container-fluid px-3">
      <div class="row">
        <div class="col-lg-6 d-none d-lg-flex justify-content-center align-items-center min-vh-lg-100 position-relative bg-light px-0">
          <!-- Logo & Language -->
          <div class="position-absolute top-0 start-0 end-0 mt-3 mx-3">
            <div class="d-none d-lg-flex justify-content-between">
              <a href="<?= $cfg_baseurl ?>">
                <img class="w-100" src="<?php echo $data_settings['link_logo_dark']; ?>" alt="Image Description" data-hs-theme-appearance="default" style="min-width: 7rem; max-width: 7rem;">
                <img class="w-100" src="<?php echo $data_settings['link_logo_dark']; ?>" alt="Image Description" data-hs-theme-appearance="dark" style="min-width: 7rem; max-width: 7rem;">
              </a>

              
            </div>
          </div>
          <!-- End Logo & Language -->

          <div style="max-width: 23rem;">
            <div class="text-center mb-5">
              <img class="img-fluid" src="../themes/assets/svg/illustrations/oc-chatting.svg" alt="Image Description" style="width: 12rem;" data-hs-theme-appearance="default">
              <img class="img-fluid" src="../themes/assets/svg/illustrations-light/oc-chatting.svg" alt="Image Description" style="width: 12rem;" data-hs-theme-appearance="dark">
            </div>

            <div class="mb-5">
              <h2 class="display-5"><?php echo $data_settings['web_name']; ?> Menyediakan:</h2>
            </div>

            <!-- List Checked -->
            <ul class="list-checked list-checked-lg list-checked-primary list-py-2">
              <li class="list-checked-item">
                <span class="d-block fw-semibold mb-1">All Media Social</span>
                Youtube, Twitter, instagram, Facebook, Tiktok, dll.
              </li>

              <li class="list-checked-item">
                <span class="d-block fw-semibold mb-1">Multi Payment</span>
                Website Kami menyediakan beragam jenis pembayaran otomatis
              </li>
            </ul>
            <!-- End List Checked -->

            <div class="row justify-content-between mt-5 gx-3">
              <div class="col">
                <img class="img-fluid" src="../login/tripay/ALFAMART.webp" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="../login/tripay/BCAVA.webp" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="../login/tripay/MANDIRIVA.webp" alt="Logo">
              </div>
              <!-- End Col -->

              <div class="col">
                <img class="img-fluid" src="../login/tripay/SMSVA.webp" alt="Logo">
              </div>
              <div class="col">
                <img class="img-fluid" src="../login/tripay/BRIVA.webp" alt="Logo">
              </div>
              <!-- End Col -->
            </div>
            <!-- End Row -->
          </div>
        </div>
        <!-- End Col -->

        <div class="col-lg-6 d-flex justify-content-center align-items-center min-vh-lg-100">
          <div class="w-100 content-space-t-4 content-space-t-lg-2 content-space-b-1" style="max-width: 25rem;">
            <!-- Form -->
            <form class="js-validate needs-validation" method="POST">
              <div class="text-center">
                <div class="mb-5">
                  <h1 class="display-5">Buat Akun Baru</h1>
                  <p>Sudah Punya akun? <a class="link" href="../login">Login disini</a></p>
                </div>
              </div>

              <label class="form-label" for="fullNameSrEmail">Nama dan Username</label>

              <!-- Form -->
              <div class="row">
                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-4">
                    <input type="text" class="form-control form-control-lg" name="name"  placeholder="Nama Lengkap" required>
                    <span class="invalid-feedback">Buat Nama Lengkap Anda.</span>
                  </div>
                  <!-- End Form -->
                </div>

                <div class="col-sm-6">
                  <!-- Form -->
                  <div class="mb-4">
                    <input type="text" class="form-control form-control-lg" placeholder="Username" name="username" required>
                    <span class="invalid-feedback">Buat Nama Username Kamu.</span>
                  </div>
                  <!-- End Form -->
                </div>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label class="form-label">Email</label>
                <input type="email" class="form-control form-control-lg" name="email"  placeholder="Markwilliams@site.com"  required>
                <span class="invalid-feedback">Masukan Email Kamu.</span>
              </div>
              <!-- End Form -->
              <!-- Form -->
              <div class="mb-4">
                <label class="form-label">No Whatsapp</label>
                <input type="number" class="form-control form-control-lg" name="nohp"  placeholder="08xxx"  required>
                <span class="invalid-feedback">Masukan No. Whatsapp Kamu.</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label class="form-label" for="signupSrPassword">Password</label>

                <div class="input-group input-group-merge" data-hs-validation-validate-class>
                  <input type="password" class="js-toggle-password form-control form-control-lg" name="password" id="signupSrPassword" placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8" data-hs-toggle-password-options='{
                           "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                           "defaultClass": "bi-eye-slash",
                           "showClass": "bi-eye",
                           "classChangeTarget": ".js-toggle-password-show-icon-1"
                         }'>
                  <a class="js-toggle-password-target-1 input-group-append input-group-text" href="javascript:;">
                    <i class="js-toggle-password-show-icon-1 bi-eye"></i>
                  </a>
                </div>

                <span class="invalid-feedback">Your password is invalid. Please try again.</span>
              </div>
              <!-- End Form -->

              <!-- Form -->
              <div class="mb-4">
                <label class="form-label" for="signupSrConfirmPassword">Confirm password</label>

                <div class="input-group input-group-merge" data-hs-validation-validate-class>
                  <input type="password" class="js-toggle-password form-control form-control-lg" name="confirm"  placeholder="8+ characters required" aria-label="8+ characters required" required minlength="8" data-hs-toggle-password-options='{
                           "target": [".js-toggle-password-target-1", ".js-toggle-password-target-2"],
                           "defaultClass": "bi-eye-slash",
                           "showClass": "bi-eye",
                           "classChangeTarget": ".js-toggle-password-show-icon-2"
                         }'>
                  <a class="js-toggle-password-target-2 input-group-append input-group-text" href="javascript:;">
                    <i class="js-toggle-password-show-icon-2 bi-eye"></i>
                  </a>
                </div>

                <span class="invalid-feedback">Password does not match the confirm password.</span>
              </div>
              <!-- End Form -->

              <!-- Form Check -->
              <div class="form-check mb-4">
                <input class="form-check-input" type="checkbox" value="" id="termsCheckbox" required>
                <label class="form-check-label" for="termsCheckbox">
                  I accept the <a href="#">Terms and Conditions</a>
                </label>
                <span class="invalid-feedback">Please accept our Terms and Conditions.</span>
              </div>
              <!-- End Form Check -->

              <div class="d-grid gap-2">
                <button type="submit" name="signup" class="btn btn-primary btn-lg"> Buat Akun Baru</button>

                
              </div>
            </form>
            <!-- End Form -->
          </div>
        </div>
        <!-- End Col -->
      </div>
      <!-- End Row -->
    </div>
    <!-- End Content -->
  </main>
  <!-- ========== END MAIN CONTENT ========== -->

  <!-- JS Global Compulsory  -->
  <script src="../themes/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../themes/assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../themes/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="../themes/assets/vendor/hs-toggle-password/dist/js/hs-toggle-password.js"></script>
  <script src="../themes/assets/vendor/tom-select/dist/js/tom-select.complete.min.js"></script>

  <!-- JS Front -->
  <script src="../themes/assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    (function() {
      window.onload = function () {
        // INITIALIZATION OF BOOTSTRAP VALIDATION
        // =======================================================
        HSBsValidation.init('.js-validate', {
          onSubmit: data => {
            data.event.preventDefault()
            alert('Submited')
          }
        })


        // INITIALIZATION OF TOGGLE PASSWORD
        // =======================================================
        new HSTogglePassword('.js-toggle-password')


        // INITIALIZATION OF SELECT
        // =======================================================
        HSCore.components.HSTomSelect.init('.js-select')
      }
    })()
  </script>
</body>
</html>