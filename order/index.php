<?php
session_start();
require("../lib/mainconfig.php");

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

    include("../lib/header.php");
    $msg_type = "nothing";


    /* NEW ORDER HANDLER */
    if (isset($_POST['order'])) {
        $post_service = htmlspecialchars($_POST['service']);
        if (isset($_POST['comments'])) {
            $post_quantity = htmlspecialchars($_POST['quantity']);
            $post_comments = htmlspecialchars($_POST['comments']);
        } else if (isset($_POST['custom_mentions'])) {
            $post_quantity = htmlspecialchars($_POST['quantity']);
            $post_custom_mentions = str_replace(array("\r", "\n"), "\r\n", $_POST['custom_mentions']);
        } else {
            $post_quantity = htmlspecialchars($_POST['quantity']);
        }
        $post_comment = urlencode($_POST['comments']);
        $post_comment = str_replace('%5Cr%5Cn', "\r\n", $post_comment);
        $post_custom_mentions = urlencode($_POST['custom_mentions']);
        $post_custom_mentions = str_replace('%5Cr%5Cn', "\r\n", $post_custom_mentions);
        $post_custom_link = trim($_POST['custom_link']);
        $post_link = htmlspecialchars(trim($_POST['link']));
        $post_category = htmlspecialchars($_POST['category']);
        $post_notes = htmlspecialchars($_POST['notes']);
        $check_service = mysqli_query($db, "SELECT * FROM services WHERE sid = '$post_service' AND status = 'Active'");
        $data_service = mysqli_fetch_assoc($check_service);

        $check_orders = mysqli_query($db, "SELECT * FROM orders WHERE link = '$post_link' AND status IN ('Pending','Processing')");
        $data_orders = mysqli_fetch_assoc($check_orders);
        $rate = $data_service['price'] / 1000;
        $rate2 = $data_service['price_provider'] / 1000;
        $price = $rate * $post_quantity;
        $price_provider = $rate2 * $post_quantity;
        $service = $data_service['service'];
        $provider = $data_service['provider'];
        $post_category = $data_service['category'];
        $pid = $data_service['pid'];

        $check_highest_oid = mysqli_query($db, "SELECT * FROM `orders` ORDER BY `oid` DESC LIMIT 1");
        $highest_oid = mysqli_fetch_array($check_highest_oid);
        $oid = $highest_oid['oid'] + 1;

        $check_provider = mysqli_query($db, "SELECT * FROM provider WHERE code = '$provider'");
        $data_provider = mysqli_fetch_assoc($check_provider);


        if ($post_category == "IGF") {
            $id = file_get_contents("https://instagram.com/" . $post_link . "?__a=1");
            $id = json_decode($id, true);
            $start_count = $id['graphql']['user']['edge_followed_by']['count'];
        } else if ($post_category == "IGL") {
            $id = file_get_contents("" . $post_link . "?__a=1");
            $id = json_decode($id, true);
            $start_count = $id['graphql']['shortcode_media']['edge_media_preview_like']['count'];
        } else if ($post_category == "IGV") {
            $id = file_get_contents("" . $post_link . "?__a=1");
            $id = json_decode($id, true);
            $start_count = $id['graphql']['shortcode_media']['video_view_count'];
        } else {
            $start_count = "0";
        }
        if (empty($post_service) || empty($post_link) || empty($post_quantity)) {
            $msg_type = "error";
            $msg_content = "<script>swal('Error!', 'Please fill in the input.', 'error');</script> Please fill in the input.";
        } else if (mysqli_num_rows($check_service) == 0) {
            $msg_type = "error";
            $msg_content = "<script>swal('Error!', 'Service not found.', 'error');</script> Service not found.";
        } else if ($post_quantity < $data_service['min']) {
            $msg_type = "error";
            $msg_content = "<script>swal('Error!', 'The minimum number of orders is " . $data_service['min'] . ".', 'error');</script>The minimum number of orders is " . $data_service['min'] . ".";
        } else if ($post_quantity > $data_service['max']) {
            $msg_type = "error";
            $msg_content = "<script>swal('Error!', 'The maximum number of orders is " . $data_service['max'] . ".', 'error');</script>The maximum number of orders is " . $data_service['max'] . ".";
        } else if ($data_user['balance'] < $price) {
            $msg_type = "error";
            $msg_content = "<script>swal('Error!', 'Your balance is insufficient to make this purchase.', 'error');</script>Your balance is insufficient to make this purchase.";
        } else {

            // api data
            $api_link = $data_provider['link'];
            $api_key = $data_provider['api_key'];
            $api_id = $data_provider['api_id'];
            $pin = $data_provider["pin"];
            $code = $data_provider["code"];
            // end api data

            if ($provider == "MANUAL" || empty($provider)) {

                /* NEW ORDER MANUALLY */

                $api_postdata = "";
                $poid = $oid;
            } else {

                /* NEW ORDER VIA API */

                if (isset($pin)) {
                    //Check if have PIN (Dailypanel)
                    $api_postdata = "pin=$pin&api_key=$api_key&action=order&service=$pid&target=$post_link&quantity=$post_quantity&custom_comment=$post_comment&custom_link=$post_custom_link&usernames=$post_custom_mentions";
                } elseif (isset($api_id)) {
                    //IRVANKEDE
                    $api_link = $api_link . '/order';
                    $api_postdata = "api_id=$api_id&api_key=$api_key&service=$pid&target=$post_link&quantity=$post_quantity&custom_comments=$post_comment&custom_link=$post_custom_link";
                } elseif (!isset($api_id) && !isset($pin) && $code == "SMMTRY") {
                    //SMMTRY
                    $api_postdata = "api_key=$api_key&action=order&service=$pid&data=$post_link&quantity=$post_quantity&custom_comments=$post_comment&custom_link=$post_custom_link";
                } else {
                    $api_postdata = "key=$api_key&action=add&service=$pid&link=$post_link&quantity=$post_quantity&comments=$post_comment&username=$post_custom_link&usernames=$post_custom_mentions";
                }

                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $api_link);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS, $api_postdata);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
                $chresult = curl_exec($ch);
                curl_close($ch);
                $json_result = json_decode($chresult);

                // var_dump($json_result);
                // die();

                if (isset($pin)) {
                    //Check if have PIN (Dailypanel)
                    $poid = $json_result->msg->order_id;
                } else if (isset($api_id)) {
                    //Check if have api_id (IRVANKEDE)
                    $poid = $json_result->data->id;
                } elseif (!isset($api_id) && !isset($pin) && $code == "SMMTRY") {
                    //SMMTRY
                    $poid = $json_result->data->id;
                } else {
                    $poid = $json_result->order;
                }

                $type = "- Rp";
                $check_highest_oid = mysqli_query($db, "SELECT * FROM `orders` ORDER BY `oid` DESC LIMIT 1");
                $highest_oid = mysqli_fetch_array($check_highest_oid);
                $oid = $highest_oid['oid'] + 1;
            }
?>

            <!-- CLEAR POST DATA ON REFRESH -->
            <script>
                history.pushState({}, "", "")
            </script>

    <?php

            if (empty($poid)) {
                $msg_type = "error";
                $msg_content = "<script>swal('Error!', 'Server Maintenance.', 'error');</script> Server Maintenance.";
            } else {

                /* BALANCE DEDUCTION */

                $update_user = mysqli_query($db, "UPDATE users SET balance = balance-$price WHERE username = '$sess_username'");
                if ($update_user == TRUE) {

                    $check_balance = mysqli_query($db, "SELECT * FROM users WHERE username = '$sess_username'");
                    $data_balance = mysqli_fetch_assoc($check_balance);
                    $temp_balance = rupiah($data_balance['balance']);


                    /* BALANCE HISTORY */

                    $insert_order = mysqli_query($db, "INSERT INTO balance_history (username, action, quantity, clearance, msg, date, time, type) 
                                                        VALUES ('$sess_username', 'Cut Balance', '$price', '$temp_balance', 'Balance deducted for purchase $post_quantity $service OID : $oid', '$date', '$time', '$type')");
                    $insert_order = mysqli_query($db, "INSERT INTO orders (oid, poid, user, service, link, quantity, remains, start_count, price, price_provider, status, date, time, provider, place_from, top_ten) 
                                                        VALUES ('$oid', '$poid', '$sess_username', '$service', '$post_link', '$post_quantity', '$post_quantity', '$start_count', '$price', '$price_provider', 'Pending', '$date', '$time', '$provider', 'WEB', 'ON')");
                    $insert_order = mysqli_query($db, "INSERT INTO profit (oid, poid, user, service, link, quantity, remains, start_count, price, price_provider, status, date, time, provider, place_from, datetime) 
                                                        VALUES ('$oid', '$poid', '$sess_username', '$service', '$post_link', '$post_quantity', '$post_quantity', '$start_count', '$price', '$price_provider', 'Pending', '$date', '$time', '$provider', 'WEB', '$date $time')");
                    if ($insert_order == TRUE) {
                        $msg_type = "success";
                        $msg_content = "<script>swal('Success!', 'Your order was successfully placed.', 'success');</script><b>Order Received.</b><br /><b>Service:</b> $service<br /><b>Details:</b> $post_link<br /><b>Quantity:</b> " . number_format($post_quantity) . "<br><b>Price:</b> " . rupiah($price);
                    } else {
                        $msg_type = "error";
                        $msg_content = "<script>swal('Error!', 'Error system (2).', 'error');</script> Error system (2).";
                    }
                } else {
                    $msg_type = "error";
                    $msg_content = "<script>swal('Error!', 'Error system (1).', 'error');</script> Error system (1).";
                }
            }
        }
    }

    /* GENERAL WEB SETTINGS */

    $check_settings = mysqli_query($db, "SELECT * FROM settings WHERE id = '1'");
    $data_settings = mysqli_fetch_assoc($check_settings);
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data_settings['web_name']; ?> | Halaman Pemesanan</title>
    <?php echo $data_settings['seo_meta']; ?>
    <?php echo $data_settings['seo_analytics']; ?>
    <?php echo $data_settings['seo_chat']; ?>
    <link rel="stylesheet" href="../assets/css/main/app.css">
    <link rel="stylesheet" href="../assets/css/main/app-dark.css">
    <link rel="shortcut icon" href="<?php echo $data_settings['link_fav']; ?>" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $data_settings['link_fav']; ?>" type="image/png">
    
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
                class="sidebar-item">
                <a href="<?php echo $cfg_baseurl; ?>/" class='sidebar-link'>
                    <i class="bi bi-grid-fill"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            
            <li
                class="sidebar-item active">
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
                class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-clock-history"></i>
                    <span>Riwayat</span>
                </a>
                <ul class="submenu ">
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
                <h3>Halaman Pemesanan</h3>
                <p class="text-subtitle text-muted">Pemesanan Sosial Media</p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="../">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pemesanan Sosmed</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>

    <!-- Basic Horizontal form layout section start -->
    <section id="basic-horizontal-layouts">
        <div class="row match-height">
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Pemesanan</h4>
                    </div>

                    <div class="card-content">
                        <div class="card-body">
                            <?php
                                    if ($msg_type == "success") {
                                    ?>
                            <div class="alert alert-primary alert-dismissible fade show" role="alert">
                            Pesanan Berhasil dibuat, sistem kami akan proses secara otomatis
                            
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <?php
                                    } else if ($msg_type == "error") {
                                    ?>
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <?php echo $msg_content; ?>.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div><?php
                                    }
                                    ?>


                            <form class="form form-vertical" method="POST">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="category">Kategori Layanan</label>
                                                <select class="form-control" id="category" name="category">
                                                    <option value="0">Pilih Salah Satu</option>
                                                    <?php
                                                    $check_cat = mysqli_query($db, "SELECT * FROM service_cat WHERE status = 'Active' ORDER BY name ASC");
                                                    while ($data_cat = mysqli_fetch_assoc($check_cat)) {
                                                    ?>
                                                        <option value="<?php echo $data_cat['code']; ?>"><?php echo $data_cat['name']; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label for="service">Layanan</label>
                                                <select class="form-control" name="service" id="service">
                                                    <option value="0">Pilih Salah Satu</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div id="note" class="col-12">
                                        </div>
                                        <div id="input_data" class="col-12">
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1" name="order"><i class="bi bi-cart-plus"></i> Order</button>
                                            <button type="reset"
                                                class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Informasi Website</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <?php echo $data_settings['new_order_ins']; ?>
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
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="../js/order.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
    <script src="../assets/js/app.js"></script>
    
    
</body>

</html>
<?php
            
        } else {
            header("Location: " . $cfg_baseurl);
        }
            ?>