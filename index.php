<?php
session_start();
ob_start();
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : "/";

require_once './commons/utils.php';
require_once './mail/index.php';
require_once './dao/system_dao.php';
require_once './client/business/product.php';
require_once './client/business/categories.php';

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

        // controller Product
    case 'san-pham':
        require_once './client/business/product.php';
        product_index();
        break;

    case 'tin-tuc':
        require_once './client/business/blog.php';
        blog();

        break;

    case 'lien-he':
        require_once './client/business/contact.php';
        contact();
        break;

        // controller tài khoản
    case 'tai-khoan':
        require_once './client/business/account.php';
        //Viết hàm hiển thị thông tin người dùng
        break;
    case 'tai-khoan/quen-mat-khau':
        require_once './client/business/account.php';
        forgot_password();
        break;
    case 'tai-khoan/kiem-tra-ma':
        require_once './client/business/account.php';
        code_check();
        break;
    case 'tai-khoan/doi-mat-khau':
        require_once './client/business/account.php';
        reset_password();
        break;
    case 'tai-khoan/dang-ky':
        require_once './client/business/account.php';
        register();
        break;

        // Controller Admin
    case 'cp-admin':
        require_once './admin/business/dashboard.php';
        dashboard_index();
        break;
    case 'cp-admin/danh-muc':
        require_once './admin/business/category.php';
        cate_index();
        break;
    case 'cp-admin/danh-muc/xoa':
        require_once './admin/business/category.php';
        cate_remove();
        break;
    case 'cp-admin/danh-muc/tao-moi':
        require_once './admin/business/category.php';
        cate_add_form();
        break;
    case 'cp-admin/danh-muc/luu-tao-moi':
        require_once './admin/business/category.php';
        cate_save_add();
        break;

    default:
        include_once './client/views/404.php';
        break;
}
