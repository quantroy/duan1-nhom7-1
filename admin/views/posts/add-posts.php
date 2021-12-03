<?php
$getBDQuery = "SELECT * from categories";
$cates = executeQuery($getBDQuery, true);

?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Tạo mới bài viết</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'bai-viet/luu-tao-moi' ?>" method="post" enctype="multipart/form-data">
                    <div class="col-6 offset-3">
                        <div class="form-group">
                            <label for="">Tiêu đề</label>
                            <?php if (isset($_GET['title-err'])) : ?>
                                <p style="color: red;margin-bottom:2px"><?= $_GET['title-err']; ?></p>
                            <?php endif ?>
                            <input type="text" name="title" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                            <label for="">Người viết</label>
                            <?php if (isset($_GET['created_by-err'])) : ?>
                                <p style="color: red;margin-bottom:2px"><?= $_GET['created_by-err']; ?></p>
                            <?php endif ?>
                            <input type="text" name="created_by" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                            <label for="">Ảnh1</label>
                            <br>
                            <input style="width:600px" type="file" name="thumbnail1" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="">Ảnh2</label>
                            <br>
                            <input style="width:600px" type="file" name="thumbnail2" placeholder="">
                        </div>

                        <div class="form-group">
                            <label for="">Nội dung1</label>
                            <?php if (isset($_GET['content1-err'])) : ?>
                                <p style="color: red;margin-bottom:2px"><?= $_GET['content1-err']; ?></p>
                            <?php endif ?>
                            <textarea name="content1" rows="4" cols="50" class="form-control" placeholder="" aria-describedby="helpId"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Nội dung2</label>
                            <textarea name="content2" rows="4" cols="50" class="form-control" placeholder="" aria-describedby="helpId"></textarea>
                        </div>
                        <br>
                        <div class="">
                            <a href="<?= ADMIN_URL . 'bai-viet' ?>" class="btn btn-sm btn-danger">Hủy</a>
                            &nbsp;
                            <button type="submit" class="btn btn-sm btn-primary">Lưu</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>