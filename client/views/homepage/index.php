<!-- Banner Begin -->
<section>
    <div class="container mb-5">
        <img width="100%" src="<?= CLIENT_ASSET ?>img/banner/banner-top.png" alt="banner">

    </div>
</section>
<!-- Categories Section Begin -->

<?php include_once './client/views/layouts/categories.php'; ?>
<!-- Categories Section End -->

<!-- Featured Section Begin -->
<?php include_once './client/views/layouts/featuredProduct.php'; ?>

<!-- Featured Section End -->

<!-- Banner Begin -->

<?php include_once './client/views/layouts/subBanner.php'; ?>
<!-- Banner End -->

<!-- Blog Section Begin -->

<?php include_once './client/views/layouts/blog.php'; ?>
<!-- Blog Section End -->




<!-- check login dạt hang -->
<?php

if (isset($_SESSION['auth']['id'])) {
    $check_login = "#modal-lg";
    $log_success = 'none';
    $log_error = 'none';
    $log_note = 'none';
} else {
    $check_login = "";
    $log_note = 'flex';
    $log_error = 'none';
    $log_success = 'none';
    $mesNote = "Hãy đăng nhập để đặt hàng và nhận thưởng";
}


?>
<!-- logmes star -->
<?php include_once "./client/views/layouts/log.php" ?>
<!-- logmes end -->