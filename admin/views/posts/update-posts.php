<?php
$id = isset($_GET['id']) ? $_GET['id'] : -1;
$getUserQuery = "select * from posts where id = $id";
$posts =  executeQuery($getUserQuery, false);
if (!$posts) {
    header('location:' . ADMIN_URL . 'bai-viet');
    die;
}
?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Sửa bài viết</h3>
            </div>
            <div class="card-body">
                <form action="<?= ADMIN_URL . 'bai-viet/luu-sua' ?>" method="post" enctype="multipart/form-data">
                    <div class="col-6 offset-3">

                        <input type="hidden" value="<?= $posts['id'] ?>" name="id">

                        <div class="form-group">
                            <label for="">Tiêu đề</label>
                            <input type="text" name="title" value="<?= $posts['title'] ?>" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                            <label for="">Người viết</label>
                            <input type="text" name="created_by" value="<?= $posts['created_by'] ?>" class="form-control" placeholder="" aria-describedby="helpId">
                        </div>

                        <div class="form-group">
                            <div>
                                <label for="">Ảnh1</label>
                                <br>
                                <input style="width:600px; margin-bottom:20px" type="file" name="thumbnail1" placeholder="" aria-describedby="helpId" >
                            </div>
                            <?php if ($posts['thumbnail1'] != "") : ?>
                                <div>
                                    <img src="<?= IMG_URL.$posts['thumbnail1'] ?>" width="100px" height="100px">
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="form-group">
                            <div>
                                <label for="">Ảnh2</label>
                                <br>
                                <input style="width:600px; margin-bottom:20px" type="file" name="thumbnail2" placeholder="" aria-describedby="helpId" >
                            </div>
                            <?php if ($posts['thumbnail2'] != "") : ?>
                                <div>
                                    <img src="<?= IMG_URL. $posts['thumbnail2'] ?>" width="100px" height="100px">
                                </div>
                            <?php endif ?>
                        </div>

                        <div class="form-group">
                            <label for="">Nội dung1</label>
                            <textarea name="content1" rows="4" cols="50" class="form-control" placeholder="" aria-describedby="helpId"><?=$posts['content1']?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="">Nội dung2</label>
                            <textarea name="content2" rows="4" cols="50" class="form-control" placeholder="" aria-describedby="helpId"><?=$posts['content2']?></textarea>
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