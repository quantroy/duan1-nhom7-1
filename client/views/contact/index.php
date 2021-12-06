<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= CLIENT_ASSET ?>img/banner/banner-top2.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Liên Hệ</h2>
                    <div class="breadcrumb__option">
                        <a href="<?= BASE_URL . 'trang-chu' ?>">Trang Chủ</a>
                        <span>Liên Hệ Với Chúng Tôi</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

<!-- Contact Section Begin -->
<section class="contact spad">
    <div class="container">
        <div class="row">
            <?php foreach (pdo_select("SELECT * FROM contact LIMIT 1") as $items) { ?>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_phone"></span>
                        <h4>Số Điện Thoại</h4>
                        <p><?php echo $items['phone'] ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_pin_alt"></span>
                        <h4>Địa Chỉ</h4>
                        <p><?php echo $items['address'] ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_clock_alt"></span>
                        <h4>Thời Gian Bán Hàng</h4>
                        <p><?php echo $items['time_open'] ?> to <?php echo $items['time_close'] ?></p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                    <div class="contact__widget">
                        <span class="icon_mail_alt"></span>
                        <h4>Email</h4>
                        <p><?php echo $items['email'] ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Map Begin -->
<div class="map">
    <?php foreach (pdo_select("SELECT * FROM contact LIMIT 1") as $items) { ?>
        <?php echo $items['map'] ?>
    <?php } ?>
</div>