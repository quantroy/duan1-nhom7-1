<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= CLIENT_ASSET ?>img/banner/banner-top2.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Sản Phẩm Yêu Thích</h2>
                    <div class="breadcrumb__option">
                        <a href="<?= BASE_URL ?>trang-chu">Trang Chủ</a>
                        <span>Shopping Cart</span>
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
                                <th class="shoping__product">Sản Phẩm</th>
                                <th>Tên Sản Phẩm</th>
                                <th>Giá</th>
                                <th>Mua Ngay</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $product_like = loadall_product_like(); ?>
                            <?php foreach ($product_like as $like) : ?>
                                <?php if ($_SESSION['auth']['id'] == $like['user_id']) : ?>
                                    <tr>
                                        <?php $favorite_product = loadall_product_favorite_by_product_favorite($product_id = 0); ?>
                                        <?php foreach ($favorite_product as $pf) : ?>
                                            <?php if ($pf['id'] == $like['product_id']) : ?>
                                                <td class="shoping__cart__item" style="width:200px;">
                                                    <img src="<?= $pf['thumbnail'] ?>" alt="" style="width:90%">
                                                </td>
                                                <td>
                                                    <h5><?= $pf['name'] ?></h5>
                                                </td>
                                                <td class="shoping__cart__price">
                                                    <?= number_format($pf['price'], 0, '', ',') ?>đ
                                                </td>
                                                <td class="shoping__cart__item__close" style="text-align: center;">
                                                    <span class="fa fa-shopping-cart" style="color:green;"></span>
                                                </td>
                                                <td class="shoping__cart__item__close">
                                                    <a href="<?= BASE_URL . 'san-pham-yeu-thich/xoa?id=' . $pf['id'] ?>"><span class=" icon_close"></span></a>
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