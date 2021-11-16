<?php
session_start();
$url = isset($_GET['url']) ? $_GET['url'] : "/";
require_once './commons/utils.php';
require_once './dao/system_dao.php';
// dd($url);
switch ($url) {
    case '/':
        require_once './client/business/homepage.php';
        home();
        break;
    case 'trang-chu':
        require_once './client/business/homepage.php';
        home();
        break;

    case 'san-pham':
        require_once './client/business/product.php';
        list_product();
        break;

    case 'tin-tuc':
        require_once './client/business/blog.php';
        blog();
        break;

    case 'lien-he':
        require_once './client/business/contact.php';
        contact();
        break;


        // Controller Admin
    case 'cp-admin':
        require_once './admin/business/dashboard.php';
        dashboard_index();
        break;

    default:
        # code...
        break;
}
