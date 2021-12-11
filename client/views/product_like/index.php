<?php

if (isset($_SESSION['auth']['id'])) {
    $check_login = "data-target='#modal-lg'";
    $log = "";
} else {
    $log = "swalDefaultWarning";
    $check_login = "";
}

?>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= CLIENT_ASSET ?>img/banner/banner-top2.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Sản Phẩm Yêu Thích</h2>
                    <div class="breadcrumb__option">
                        <a href="<?= BASE_URL ?>trang-chu">Trang Chủ</a>
                        <span>Sản Phẩm Yêu Thích</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Shoping Cart Section Begin -->
<section class="shoping-cart spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__table">
                    <table>
                        <thead>
                            <tr>
                                <th class="shoping__product"></th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá</th>
                                <th>Ngày Tạo</th>
                                <th>Mua Ngay</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $product_like = loadall_product_like(); ?>

                            <?php foreach ($product_like as $k => $like) : ?>
                                <?php if ($_SESSION['auth']['id'] == $like['user_id']) : ?>
                                    <tr>
                                        <?php $favorite_product = loadall_product_favorite_by_product_favorite($product_id = 0); ?>
                                        <?php foreach ($favorite_product as $k => $pf) : ?>
                                            <?php if ($pf['id'] == $like['product_id']) : ?>
                                                <p style="display: none;" class="product_id"><?php echo $pf['id'] ?></p>
                                                <td class="shoping__cart__item" style="width:200px;">
                                                    <img id="value_image" src="<?= IMG_URL . $pf['thumbnail'] ?>" alt="" style="width:90%" data="<?= IMG_URL . $pf['thumbnail'] ?>">
                                                </td>
                                                <td>
                                                    <h5 id="value_name"><?= $pf['name'] ?></h5>
                                                </td>
                                                <td id="value_price" class="shoping__cart__price" data="<?php echo $pf['price'] ?>">
                                                    <?= number_format($pf['price'], 0, '', ',') ?>đ
                                                </td>
                                                <td class="shoping__created_at" style="margin: 0;color: #111111;font-weight: 400;font-family:  Cairo, sans-serif;font-size:18px;">
                                                    <?= $like['created_at'] ?>
                                                </td>
                                                <td class="shoping__cart__item__close" style="text-align: center;">
                                                    <div><a class="<?php echo $log ?>" id="btn_cart" data-toggle="modal" <?php echo $check_login ?> data="<?php echo $k ?>"><i class="fa fa-shopping-cart"></i></a></div>
                                                </td>
                                                <td class="shoping__cart__item__close">
                                                    <a href="<?= BASE_URL . 'san-pham-yeu-thich/xoa?product_id=' . $pf['id'] ?>"><span class=" icon_close"></span></a>
                                                </td>
                                            <?php endif; ?>
                                        <?php endforeach ?>

                                    </tr>
                                <?php endif; ?>
                            <?php endforeach; ?>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->
<!-- Form_option start -->
<?php include_once "./client/views/layouts/form_option.php" ?>
<!-- Form_option end -->

<?php include_once "./client/views/layouts/oder-jQuery.php" ?>