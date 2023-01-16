<?php
session_start();
require("../../lib/mainconfig.php");

/* CHECK USER SESSION */
if (isset($_SESSION['user'])) {
    $sess_username = $_SESSION['user']['username'];
    $check_user = mysqli_query($db, "SELECT * FROM users WHERE username = '$sess_username'");
    $data_user = mysqli_fetch_assoc($check_user);
    if (mysqli_num_rows($check_user) == 0) {
        header("Location: " . $cfg_baseurl . "/logout/");
    } else if ($data_user['status'] == "Suspended") {
        header("Location: " . $cfg_baseurl . "/logout/");
    }
    $email = $data_user['email'];
    if ($email == "") {
        header("Location: " . $cfg_baseurl . "settings");
    }

    $title = "Order History";
    include("../../lib/header.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data_settings['web_name']; ?> | Riwayat Pemesanan</title>
    <?php echo $data_settings['seo_meta']; ?>
    <?php echo $data_settings['seo_analytics']; ?>
    <?php echo $data_settings['seo_chat']; ?>
    <link rel="stylesheet" href="<?php echo $cfg_baseurl; ?>/assets/css/main/app.css">
    <link rel="stylesheet" href="<?php echo $cfg_baseurl; ?>/assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="<?php echo $data_settings['link_fav']; ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $data_settings['link_fav']; ?>" type="image/png">
    
<link rel="stylesheet" href="<?php echo $cfg_baseurl; ?>/assets/extensions/simple-datatables/style.css">
<link rel="stylesheet" href="<?php echo $cfg_baseurl; ?>/assets/css/pages/simple-datatables.css">

</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
    <div class="sidebar-header position-relative">
        <div class="d-flex justify-content-between align-items-center">
            <div class="logo">
                <a href="<?= $cfg_baseurl ?>"><img src="<?php echo $data_settings['link_logo_dark']; ?>" alt="Logo" srcset=""></a>
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
                class="sidebar-item  ">
                <a href="<?php echo $cfg_baseurl; ?>/" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li
                class="sidebar-item">
                <a href="<?php echo $cfg_baseurl; ?>/order" class='sidebar-link'>
                    <i class="bi bi-cart-plus"></i>
                    <span>Pemesanan</span>
                </a>
            </li>
            <li
                class="sidebar-item">
                <a href="<?php echo $cfg_baseurl; ?>/tripay" class='sidebar-link'>
                    <i class="bi bi-credit-card-2-back-fill"></i>
                    <span>Deposit</span>
                </a>
            </li>
            <li
                class="sidebar-item active  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-clock-history"></i>
                    <span>Riwayat</span>
                </a>
                <ul class="submenu active">
                    <li class="submenu-item ">
                        <a href="<?php echo $cfg_baseurl; ?>/riwayat/pemesanan">Pemesanan</a>
                    </li>
                    <li class="submenu-item ">
                        <a href="<?php echo $cfg_baseurl; ?>/riwayat/deposit">Deposit</a>
                    </li>
                    
                </ul>
            </li>
            <li
                class="sidebar-item">
                <a href="<?php echo $cfg_baseurl; ?>/layanan" class='sidebar-link'>
                    <i class="bi bi-server"></i>
                    <span>Layanan</span>
                </a>
            </li>
            
            <li
                class="sidebar-item">
                <a href="<?php echo $cfg_baseurl; ?>/keluar" class='sidebar-link'>
                    <i class="bi bi-shield-lock-fill"></i>
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
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Riwayat Pemesanan</h3>
                <p class="text-subtitle text-muted">Data Keseluruhan Pemesanan Kamu</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $cfg_baseurl; ?>">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pesanan</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Data Pemesanan
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>OID</th>
                            <th>Waktu</th>
                            <th>Jumlah</th>
                            <th>Harga</th>
                            <th>Status</th>
                            <th>Remains</th>
                            <th>Start</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php
                                        // start paging config
                                        $query_order = mysqli_query($db, "SELECT * FROM orders WHERE user = '$sess_username' ORDER BY id DESC");
                                        // end paging config
                                        while ($data_order = mysqli_fetch_assoc($query_order)) {
                                            if ($data_order['status'] == "Pending") {
                                                $label = "warning";
                                            } else if ($data_order['status'] == "Processing") {
                                                $label = "info";
                                            } else if ($data_order['status'] == "In Progress") {
                                                $label = "info";
                                            } else if ($data_order['status'] == "Error") {
                                                $label = "danger";
                                            } else if ($data_order['status'] == "Canceled") {
                                                $label = "danger";
                                            } else if ($data_order['status'] == "Partial") {
                                                $label = "danger";
                                            } else if ($data_order['status'] == "Success") {
                                                $label = "success";
                                            } else if ($data_order['status'] == "Completed") {
                                                $label = "success";
                                            }
                                        ?>
                        <tr>
                            <td>#<?php echo $data_order['oid']; ?></td>
                            <td><?php echo $data_order['date']; ?> <?php echo $data_order['time']; ?></td>
                            <td><?php echo number_format($data_order['quantity'], 0, ',', '.'); ?></td>
                            <td><?php echo rupiah($data_order['price']); ?></td>
                            <td><span class="badge bg-<?php echo $label; ?>"><?php echo $data_order['status']; ?></span></td>
                            <td><?php echo $data_order['remains']; ?></td>
                            <td><?php echo $data_order['start_count']; ?></td>
                            <td>
                                <button type="button" class="btn btn-outline-primary block" data-bs-toggle="modal"
                                data-bs-target="#border-less<?php echo $data_order['oid']; ?>">
                                <i class="bi bi-eye"></i>
                            </button>
                            <div class="modal fade text-left modal-borderless" id="border-less<?php echo $data_order['oid']; ?>" tabindex="-1"
                                role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Detail #<?php echo $data_order['oid']; ?></h5>
                                            <button type="button" class="close rounded-pill" data-bs-dismiss="modal"
                                                aria-label="Close">
                                                <i data-feather="x"></i>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <li>Layanan: <?php echo $data_order['service']; ?></li>
                                            <li>Link: <?php echo $data_order['link']; ?></li>
                                            
                                        </div>
                                        <div class="modal-footer">
                                            
                                            <button type="button" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                                                <i class="bx bx-check d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Tutup</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                
                            </td>
                        </tr>

                        <?php
                                }
                                ?>
                    </tbody>
                </table>
            </div>
        </div>

    </section>
</div>

            <footer>
                <div class="footer clearfix mb-0 text-muted">
                    <div class="float-start">
                        <p>2021 &copy; Mazer</p>
                    </div>
                    <div class="float-end">
                        <p>Crafted with <span class="text-danger"><i class="bi bi-heart"></i></span> by <a
                                href="https://saugi.me">Saugi</a></p>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="<?php echo $cfg_baseurl; ?>/assets/js/bootstrap.js"></script>
    <script src="<?php echo $cfg_baseurl; ?>/assets/js/app.js"></script>
    
<script src="<?php echo $cfg_baseurl; ?>/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="<?php echo $cfg_baseurl; ?>/assets/js/pages/simple-datatables.js"></script>

</body>

</html>

            <?php
            
        } else {
            header("Location: " . $cfg_baseurl);
        }
