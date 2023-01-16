<?php
session_start();
require("../lib/mainconfig.php");
$msg_type = "nothing";

/* CHECK FOR MAINTENANCE */
if ($cfg_mt == 1) {
    die("Web is under maintenance.");
} else {

    /* CHECK USER SESSION */
    if (isset($_SESSION['user'])) {
        $sess_username = $_SESSION['user']['username'];
        $check_user = mysqli_query($db, "SELECT * FROM users WHERE username = '$sess_username'");
        $data_user = mysqli_fetch_assoc($check_user);
        if (mysqli_num_rows($check_user) == 0) {
            header("Location: " . $cfg_baseurl . "/logout/");
        } else if ($data_user['status'] == "Suspended") {
            header("Location: " . $cfg_baseurl . "/logout/");
        } else if ($data_user['level'] != "Developers") {
            header("Location: " . $cfg_baseurl);
        }

        /* DATA FOR DASHBOARD */
        $check_order = mysqli_query($db, "SELECT SUM(jumlah_transfer) AS total FROM history_topup WHERE status = 'YES'");
        $data_order = mysqli_fetch_assoc($check_order);

        $number_users = mysqli_num_rows(mysqli_query($db, "SELECT * FROM users"));

        $number_tickets = mysqli_num_rows(mysqli_query($db, "SELECT * FROM tickets"));

        $number_order = mysqli_num_rows(mysqli_query($db, "SELECT * FROM orders"));

        $check_earnings = mysqli_query($db, "SELECT SUM(price - price_provider) AS total FROM orders WHERE status = 'Success'");
        $data_earnings = mysqli_fetch_assoc($check_earnings);

        $check_earnings_today = mysqli_query($db, "SELECT COALESCE(SUM(price - price_provider),0) AS total FROM orders WHERE status = 'Success' AND date = '$date'");
        $data_earnings_today = mysqli_fetch_assoc($check_earnings_today);


        $number_order_completed = mysqli_num_rows(mysqli_query($db, "SELECT * FROM orders WHERE status = 'Success'"));
        $number_order_pending = mysqli_num_rows(mysqli_query($db, "SELECT * FROM orders WHERE status = 'Pending' OR  status = 'Processing' OR status = 'In Progress'"));

        /* DATA FOR ORDERS STATISTICS CHART */
        $date_1 = date('Y-m-d', (strtotime('-5 day', strtotime($date))));
        $date_2 = date('Y-m-d', (strtotime('-4 day', strtotime($date))));
        $date_3 = date('Y-m-d', (strtotime('-3 day', strtotime($date))));
        $date_4 = date('Y-m-d', (strtotime('-2 day', strtotime($date))));
        $date_5 = date('Y-m-d', (strtotime('-1 day', strtotime($date))));
        $date_6 = $date;

        $check_earning_date_1 = mysqli_query($db, "SELECT COALESCE(SUM(price - price_provider),0) AS total FROM orders WHERE status = 'Success' AND date = '$date_1'");
        $check_earning_date_2 = mysqli_query($db, "SELECT COALESCE(SUM(price - price_provider),0) AS total FROM orders WHERE status = 'Success' AND date = '$date_2'");
        $check_earning_date_3 = mysqli_query($db, "SELECT COALESCE(SUM(price - price_provider),0) AS total FROM orders WHERE status = 'Success' AND date = '$date_3'");
        $check_earning_date_4 = mysqli_query($db, "SELECT COALESCE(SUM(price - price_provider),0) AS total FROM orders WHERE status = 'Success' AND date = '$date_4'");
        $check_earning_date_5 = mysqli_query($db, "SELECT COALESCE(SUM(price - price_provider),0) AS total FROM orders WHERE status = 'Success' AND date = '$date_5'");
        $check_earning_date_6 = mysqli_query($db, "SELECT COALESCE(SUM(price - price_provider),0) AS total FROM orders WHERE status = 'Success' AND date = '$date_6'");

        $data_earnings_date_1 = mysqli_fetch_assoc($check_earning_date_1);
        $data_earnings_date_2 = mysqli_fetch_assoc($check_earning_date_2);
        $data_earnings_date_3 = mysqli_fetch_assoc($check_earning_date_3);
        $data_earnings_date_4 = mysqli_fetch_assoc($check_earning_date_4);
        $data_earnings_date_5 = mysqli_fetch_assoc($check_earning_date_5);
        $data_earnings_date_6 = mysqli_fetch_assoc($check_earning_date_6);

        /* GENERAL WEB SETTINGS */
        $check_settings = mysqli_query($db, "SELECT * FROM settings WHERE id = '1'");
        $data_settings = mysqli_fetch_assoc($check_settings);

        $email = $data_user['email'];
        $hp = $data_user['nohp'];
        /* if ($email == "") {
    header("Location: ".$cfg_baseurl2."settings.php");
    } */
    } else {
        header("Location: ../home");
    }
    $title = "Admin Dashboard";
    include("../lib/header_admin.php");
    if (isset($_SESSION['user'])) {
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data_settings['web_name']; ?> | Admin Dashboard</title>
    
    <link rel="stylesheet" href="<?php echo $cfg_baseurl; ?>/assets/css/main/app.css">
    <link rel="stylesheet" href="<?php echo $cfg_baseurl; ?>/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="<?php echo $data_settings['link_fav']; ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $data_settings['link_fav']; ?>" type="image/png">
    
<link rel="stylesheet" href="<?php echo $cfg_baseurl; ?>/assets/css/shared/iconly.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="<?php echo $cfg_baseurl; ?>"><img src="<?php echo $data_settings['link_logo_dark']; ?>" alt="Logo" srcset=""></a>
            </div>
            <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--system-uicons" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 21 21"><g fill="none" fill-rule="evenodd" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"><path d="M10.5 14.5c2.219 0 4-1.763 4-3.982a4.003 4.003 0 0 0-4-4.018c-2.219 0-4 1.781-4 4c0 2.219 1.781 4 4 4zM4.136 4.136L5.55 5.55m9.9 9.9l1.414 1.414M1.5 10.5h2m14 0h2M4.135 16.863L5.55 15.45m9.899-9.9l1.414-1.415M10.5 19.5v-2m0-14v-2" opacity=".3"></path><g transform="translate(-210 -1)"><path d="M220.5 2.5v2m6.5.5l-1.5 1.5"></path><circle cx="220.5" cy="11.5" r="4"></circle><path d="m214 5l1.5 1.5m5 14v-2m6.5-.5l-1.5-1.5M214 18l1.5-1.5m-4-5h2m14 0h2"></path></g></g></svg>
                <div class="form-check form-switch fs-6">
                    <input class="form-check-input  me-0" type="checkbox" id="toggle-dark" >
                    <label class="form-check-label" ></label>
                </div>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" role="img" class="iconify iconify--mdi" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path fill="currentColor" d="m17.75 4.09l-2.53 1.94l.91 3.06l-2.63-1.81l-2.63 1.81l.91-3.06l-2.53-1.94L12.44 4l1.06-3l1.06 3l3.19.09m3.5 6.91l-1.64 1.25l.59 1.98l-1.7-1.17l-1.7 1.17l.59-1.98L15.75 11l2.06-.05L18.5 9l.69 1.95l2.06.05m-2.28 4.95c.83-.08 1.72 1.1 1.19 1.85c-.32.45-.66.87-1.08 1.27C15.17 23 8.84 23 4.94 19.07c-3.91-3.9-3.91-10.24 0-14.14c.4-.4.82-.76 1.27-1.08c.75-.53 1.93.36 1.85 1.19c-.27 2.86.69 5.83 2.89 8.02a9.96 9.96 0 0 0 8.02 2.89m-1.64 2.02a12.08 12.08 0 0 1-7.8-3.47c-2.17-2.19-3.33-5-3.49-7.82c-2.81 3.14-2.7 7.96.31 10.98c3.02 3.01 7.84 3.12 10.98.31Z"></path></svg>
            </div>
            <div class="sidebar-toggler  x">
                <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
            </div>
        </div>
    </div>
    <div class="sidebar-menu">
        <ul class="menu">
            
            
            <li
                class="sidebar-item active ">
                <a href="<?php echo $cfg_baseurl; ?>/admin" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li
                class="sidebar-item  ">
                <a href="<?php echo $cfg_baseurl; ?>/admin/user" class='sidebar-link'>
                    <i class="bi bi-people-fill"></i>
                    <span>Data User</span>
                </a>
            </li>
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-gear-fill"></i>
                    <span>Pengaturan</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="<?php echo $cfg_baseurl; ?>/admin/pengaturan/website">Website</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo $cfg_baseurl; ?>/admin/pengaturan/seo">SEO</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo $cfg_baseurl; ?>/admin/pengaturan/deposit">Pembayaran</a>
                    </li>
                    
                </ul>
            </li>
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-clock-fill"></i>
                    <span>Transaksi</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="<?php echo $cfg_baseurl; ?>/admin/transaksi/deposit">Deposit</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo $cfg_baseurl; ?>/admin/transaksi/pemesanan">Pemesanan</a>
                    </li>
                    
                </ul>
            </li>
            <li
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-archive-fill"></i>
                    <span>Layanan</span>
                </a>
                <ul class="submenu ">
                    <li class="submenu-item ">
                        <a href="<?php echo $cfg_baseurl; ?>/admin/produk/sosmed">Sosial Media</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo $cfg_baseurl; ?>/admin/produk/kategori">Kategori</a>
                    </li>
                    
                </ul>
            </li>
            <li
                class="sidebar-item  ">
                <a href="<?php echo $cfg_baseurl; ?>/admin/provider" class='sidebar-link'>
                    <i class="bi bi-award-fill"></i>
                    <span>Provider</span>
                </a>
            </li>
            <li
                class="sidebar-item  ">
                <a href="<?php echo $cfg_baseurl; ?>/admin/grab" class='sidebar-link'>
                    <i class="bi bi-cloud-download-fill"></i>
                    <span>Import</span>
                </a>
            </li>
            <li
                class="sidebar-item  ">
                <a href="<?php echo $cfg_baseurl; ?>/admin/delete" class='sidebar-link'>
                    <i class="bi bi-trash2"></i>
                    <span>Hapus Layanan</span>
                </a>
            </li>
            <li
                class="sidebar-item  ">
                <a href="<?php echo $cfg_baseurl; ?>/keluar" class='sidebar-link'>
                    <i class="bi bi-lock-fill"></i>
                    <span>Keluar</span>
                </a>
            </li>
            
            
        </ul>
    </div>
</div>
        </div>
        <div id="main">
            <header class="mb-3">
                <a href="#" class="burger-btn d-block d-xl-none">
                    <i class="bi bi-justify fs-3"></i>
                </a>
            </header>
            
<div class="page-heading">
    <h3>Admin Dashboard</h3>
</div>
<div class="page-content">
    <section class="row">
        <div class="col-12">
            <div class="row">
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon purple mb-2">
                                    <i class="iconly-boldProfile"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Total User</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo $number_users; ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon blue mb-2">
                                        <i class="iconly-boldWallet"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Omzet</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo rupiah($data_order['total']); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon green mb-2">
                                    <i class="iconly-boldBookmark"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Total Order</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo $number_order; ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-lg-3 col-md-6">
                    <div class="card">
                        <div class="card-body px-4 py-4-5">
                            <div class="row">
                                <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                    <div class="stats-icon red mb-2">
                                        <i class="iconly-boldWallet"></i>
                                    </div>
                                </div>
                                <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                    <h6 class="text-muted font-semibold">Omzet Harian</h6>
                                    <h6 class="font-extrabold mb-0"><?php echo rupiah($data_earnings_today['total']); ?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Informasi Update</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover table-lg">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Keterangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="col-3">
                                                <div class="d-flex align-items-center">
                                                    
                                                    <span class="badge bg-primary">New Upade !</span>
                                                </div>
                                            </td>
                                            <td class="col-auto">
                                                <a href="" class=" mb-0">Kami telah melakukan update script, silahkan cek update terbaru</a>
                                            </td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Promo Untuk Kamu</h4>
                        </div>
                        <div class="card-body">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                    <img src="https://static.wingify.com/gcp/uploads/sites/3/2013/08/OG-image_How-to-Use-Image-Carousels-the-Right-Way.png" class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                    <img src="https://static.wingify.com/gcp/uploads/sites/3/2021/07/Banner_-How-to-Use-Image-Carousels-the-Right-Way.png" class="d-block w-100" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>
</div>

<footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p><?php echo date("Y"); ?> &copy; <?php echo $data_settings['web_copyright']; ?></p>
                    </div>
                    <div class="float-end">
                        <p>Web Dev <span class="text-danger"><i class="bi bi-code"></i></span> by <a
                                href="https://softwarepedia.my.id">Softwarepedia</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?php echo $cfg_baseurl; ?>/assets/js/bootstrap.js"></script>
    <script src="<?php echo $cfg_baseurl; ?>/assets/js/app.js"></script>
    
<!-- Need: Apexcharts -->
<script src="<?php echo $cfg_baseurl; ?>/assets/extensions/apexcharts/apexcharts.min.js"></script>
<script src="<?php echo $cfg_baseurl; ?>/assets/js/pages/dashboard.js"></script>

</body>

</html>
    <?php
    }
    
}
    ?>