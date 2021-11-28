<section class="categories">
    <div class="container">
        <div class="row">
            <div class="categories__slider owl-carousel">
                <?php $top10 = loadall_sanpham_top10() ?>
                <?php foreach ($top10 as $top) : ?>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="<?= $top['thumbnail'] ?>">
                            <h5><a href="#"><?= $top['name'] ?></a></h5>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</section>