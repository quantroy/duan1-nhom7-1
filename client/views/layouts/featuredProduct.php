<?php

if (isset($_SESSION['auth']['id'])) {
    $check_login = "data-target='#modal-lg'";
    $log = "";
} else {
    $log = "swalDefaultWarning";
    $check_login = "";
    $check_login = "";
}


?>
<section class="featured spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Sản phẩm mới nhất</h2>
                </div>
                <div class="featured__controls">
                </div>
            </div>
        </div>
        <div class="row featured__filter">
            <?php foreach (selectDb("SELECT * FROM products ORDER BY id DESC LIMIT 8") as $items) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="<?php echo $items['thumbnail'] ?>">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="<?= BASE_URL . 'danh-muc/san-pham?id=' . $items['id'] ?>"><?php echo $items['name'] ?></a></h6>
                            <h5><?php echo $items['price'] ?>đ</h5>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Form_option start -->
<?php include_once "./client/views/layouts/form_option.php" ?>
<!-- Form_option end -->