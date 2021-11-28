<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= CLIENT_ASSET ?>img/banner/banner-top2.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Sản phẩm</h2>
                    <div class="breadcrumb__option">
                        <a href="trang-chủ">Trang chủ</a>
                        <span>Sản phẩm</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Product Section Begin -->
<section class="product spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-7">
                <!-- <div>
                    <div class="section-title product__discount__title">
                        <h2>Sale Off</h2>
                    </div>

                </div> -->
                <div class="">
                    <div class="section-title product__discount__title">
                        <h2>Sản Phẩm Yêu Thích</h2>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-5">
                            <div class="filter__sort">
                                <span>Kiểu lọc</span>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row">
                    <?php if (!empty($products_like)) : ?>
                        <?php $products_like=loadall_product_like(); ?>
                        <?php foreach ($products_like as $product) : ?>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="<?= CLIENT_ASSET ?>img/product/sp1.jpg">
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="#"><?= $product['id'] ?></a></h6>
                                        <h6><a href="#"><?= $product['user_id'] ?></a></h6>
                                        <h6><a href="#"><?= $product['product_id'] ?></a></h6>
                                        <h6><a href="#"><?= $product['created_at'] ?></a></h6>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach ?>
                    <?php else : ?>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <span class="text-danger">Không có sản phẩm nào</span>
                        </div>
                    <?php endif ?>
                </div>
                
            </div>
        </div>
    </div>
</section>
<!-- Product Section End -->