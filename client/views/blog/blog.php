<section class="blog-details-hero set-bg" data-setbg="<?= CLIENT_ASSET ?>img/banner/banner-top2.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog__details__hero__text">
                    <h2>Blog</h2>
                    <div class="breadcrumb__option">
                        <a href="<?= BASE_URL ?>trang-chu">Trang chủ</a>
                        <span>Tin Tức</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Blog Details Hero End -->

<!-- Blog Details Section Begin -->
<section class="blog-details spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 order-md-1 order-2">
                <div class="blog__sidebar">
                    <div class="blog__sidebar__item">
                        <h4>Danh Mục Sản Phẩm</h4>
                        <ul>
                            <?php
                            $listdanhmuc = loadall_danhmuc();
                            ?>
                            <?php foreach ($listdanhmuc as $danhmuc) : ?>
                                <?php if ($danhmuc['show_menu'] == 1) : ?>
                                    <li><a href="<?= BASE_URL . 'san-pham?id-danhmuc=' . $danhmuc['id'] ?>"><?= $danhmuc['name'] ?></a></li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="blog__sidebar__item">
                        <h4>Tin Tức Mới</h4>
                        <?php $post_new = loadall_blog_new(); ?>
                        <?php foreach ($post_new as $p) : ?>
                            <div class="blog__sidebar__recent">
                                <a href="<?= BASE_URL . 'tin-tuc?id=' . $p['id'] ?>" class="blog__sidebar__recent__item" style="margin-bottom:10px;">
                                    <div class="blog__sidebar__recent__item__pic" style="width:100px">
                                        <img src="<?= IMG_URL . $p['thumbnail'] ?>" alt="">
                                    </div>
                                    <div class="blog__sidebar__recent__item__text" style="width:240px;">
                                        <h6><?= $p['title'] ?></h6>
                                        <span><?= $p['created_at'] ?></span>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <?php foreach ($post as $post) : ?>
                <div class="col-lg-8 col-md-7 order-md-1 order-1">
                    <div class="blog__details__text">
                        <h3><?= $post['title'] ?></h3>
                        <p><?= $post['content1'] ?></p>
                        <img src="<?= IMG_URL . $post['thumbnail'] ?>" alt="" style="width:70%">
                        <p><?= $post['content2'] ?></p>
                    </div>
                    <div class="blog__details__content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="blog__details__author">
                                    <div class="blog__details__author__text" style="margin-top: -45px;">
                                        <h6>Tác Giả : <?= $post['created_by'] ?></h6>
                                        <span>Ngày Đăng : <?= $post['created_at'] ?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="blog__details__widget">
                                    <div class="blog__details__social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                        <a href="#"><i class="fa fa-linkedin"></i></a>
                                        <a href="#"><i class="fa fa-envelope"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- Blog Details Section End -->