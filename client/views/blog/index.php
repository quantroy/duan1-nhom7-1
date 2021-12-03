<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= CLIENT_ASSET ?>img/banner/banner-top2.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Blog</h2>
                    <div class="breadcrumb__option">
                        <a href="<?= BASE_URL ?>trang-chu">Trang chủ</a>
                        <span>Tin Tức</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Blog Section Begin -->
<section class="blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5">
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
                                    <div class="blog__sidebar__recent__item__text" style="width:200px;">
                                        <h6><?= $p['title'] ?></h6>
                                        <span><?= $p['created_at'] ?></span>
                                    </div>
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-7">
                <div class="row">
                    <?php $posts = loadall_blog() ?>
                    <?php foreach ($posts as $post) : ?>
                        <div class="col-lg-6 col-md-6 col-sm-6">

                            <div class="blog__item">
                                <div class="blog__item__pic">
                                    <img src="<?= IMG_URL . $post['thumbnail'] ?>" alt="">
                                </div>
                                <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> <?= $post['created_at'] ?></li>
                                    </ul>
                                    <h5><a href="<?= BASE_URL . 'tin-tuc?id=' . $post['id'] ?>"><?= $post['title'] ?></a></h5>
                                    <p><?= $post['content1'] ?></p>
                                    <a href="<?= BASE_URL . 'tin-tuc?id=' . $post['id'] ?>" class="blog__btn">READ MORE <span class="arrow_right"></span></a>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>
                    <div class="col-lg-12">
                        <div class="product__pagination blog__pagination">
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->