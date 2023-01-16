<?php
session_start();
require("../../lib/mainconfig.php");
$msg_type = "nothing";

if (isset($_SESSION['user'])) {
    $sess_username = $_SESSION['user']['username'];
    $check_user = mysqli_query($db, "SELECT * FROM users WHERE username = '$sess_username'");
    $data_user = mysqli_fetch_assoc($check_user);
    if (mysqli_num_rows($check_user) == 0) {
        header("Location: ".$cfg_baseurl."/logout/");
    } else if ($data_user['status'] == "Suspended") {
        header("Location: ".$cfg_baseurl."/logout/");
    } else if ($data_user['level'] != "Developers") {
        header("Location: ".$cfg_baseurl);
    } else {
        if (isset($_POST['delete'])) {
            $post_sid = $_POST['sid'];
            $checkdb_service = mysqli_query($db, "SELECT * FROM services WHERE sid = '$post_sid'");
            if (mysqli_num_rows($checkdb_service) == 0) {
                $msg_type = "error";
                $msg_content = "Service Cannot Be Found.";
            } else {
                $delete_user = mysqli_query($db, "DELETE FROM services WHERE sid = '$post_sid'");
                if ($delete_user == TRUE) {
                    $msg_type = "success";
                    $msg_content = "Service Deleted.";
                }
            }
        }
    $title = "List of services";
    include("../../lib/header_admin.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data_settings['web_name']; ?> | Data Layanan Sosmed</title>
    
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
                class="sidebar-item  ">
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
                class="sidebar-item active  has-sub">
                <a href="#" class='sidebar-link'>
                    <i class="bi bi-archive-fill"></i>
                    <span>Layanan</span>
                </a>
                <ul class="submenu active">
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
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Layanan Sosmed</h3>
                <a href="add_sosmed" class="btn icon icon-left btn-primary btn-sm"><i data-feather="plus"></i> Tambah Layanan</a>
                <p>
            </div>
            <div class="col-12 col-md-6 order-md-2 order-first">
                <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?php echo $cfg_baseurl; ?>/admin">Dashboard</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Layanan Sosmed</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <section class="section">
        <div class="card">
            <div class="card-header">
                Data Layanan Sosmed
            </div>
            <div class="card-body">
                <table class="table table-striped" id="table1">
                    <thead>
                        <tr>
                            <th>PID</th>
                            <th>Kategori</th>
                            <th>Layanan</th>
                            <th>Min</th>
                            <th>Max</th>
                            <th>Harga</th>
                            <th>Provider</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            // start paging config
                            $query_list = mysqli_query($db, "SELECT * FROM services"); // edit
                            //$query_list1 = mysqli_query($db, "SELECT * FROM services ORDER BY sid ASC"); // edit
                            // end paging config
                            while ($data_show = mysqli_fetch_assoc($query_list)) {
                            ?>
                        <tr>
                            <td>#<?php echo $data_show['pid']; ?></td>
                            <td><?php echo $data_show['category']; ?></td>
                            <td><?php echo $data_show['service']; ?></td>
                            <td><?php echo number_format($data_show['min']); ?></td>
                            <td><?php echo number_format($data_show['max']); ?></td>
                            <td><?php echo rupiah($data_show['price']); ?>/K</td>
                            <td><?php echo $data_show['provider']; ?></td>
                            <td>
                                <a href="edit_sosmed.php?sid=<?php echo $data_show['sid']; ?>" class="btn icon btn-primary btn-sm"><i class="bi bi-pencil"></i></a>
                                <a href="delete_sosmed.php?sid=<?php echo $data_show['sid']; ?>" class="btn icon btn-danger btn-sm"><i class="bi bi-trash2"></i></a>
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
    
<script src="<?php echo $cfg_baseurl; ?>/assets/extensions/simple-datatables/umd/simple-datatables.js"></script>
<script src="<?php echo $cfg_baseurl; ?>/assets/js/pages/simple-datatables.js"></script>

</body>

</html>
<?php
    
    }
} else {
    header("Location: ".$cfg_baseurl);
}
?>