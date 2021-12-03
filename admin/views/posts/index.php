<?php
$getBDQuery = "SELECT * from categories";
$cates = executeQuery($getBDQuery, true);

?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <form action="" method="get" class="form-inline">
                    <div class="form-group">
                        <input type="text" name="keyword" value="<?= $keyword ?>" class="form-control mr-2" placeholder="Tìm kiếm...">
                    </div>
                    <input class="btn btn-sm btn-outline-dark" type="submit" value="Tìm kiếm">
                </form>
            </div>
            <div class="card-body">
                <table class="table tabl-stripped">
                    <thead>
                        <th>ID</th>
                        <th>Tiêu đề</th>
                        <th>Người viết</th>
                        <th>Ảnh 1</th>
                        <th>Ảnh 2</th>
                        <th>Nội dung 1</th>
                        <th>Nội dung 2</th>
                        <th>Thời gian tạo</th>
                        <th>Thời gian sửa</th>
                        <th>
                            <a href="<?= ADMIN_URL . 'bai-viet/tao-moi' ?>" class="btn btn-sm btn-success">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $index => $item) : ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td style="white-space: nowrap; max-width: 120px; overflow: hidden;text-overflow: ellipsis; " ><?= $item['title'] ?></td>
                                <td style="white-space: nowrap; max-width: 120px; overflow: hidden;text-overflow: ellipsis; " ><?= $item['created_by'] ?></td>
                                <td>
                                    <img style="display: block;max-width:65px;max-height:65px;width: auto;height: auto;" src="<?= IMG_URL . $item['thumbnail1'] ?>">
                                </td>
                                <td>
                                    <img style="display: block;max-width:65px;max-height:65px;width: auto;height: auto;" src="<?= IMG_URL . $item['thumbnail2'] ?>">
                                </td>
                                <td style="white-space: nowrap; max-width: 120px; overflow: hidden;text-overflow: ellipsis; "><?= $item['content1']?></td>
                                <td style="white-space: nowrap; max-width: 120px; overflow: hidden;text-overflow: ellipsis; " ><?= $item['content2']?></td>
                                <td><?= $item['create_at'] ?></td>
                                <td><?= $item['update_at'] ?></td>
                                <td>
                                    <a href="<?= ADMIN_URL . 'bai-viet/sua?id=' . $item['id'] ?>" class="btn btn-sm btn-info">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="javascript:;" onclick="confirm_remove('<?= ADMIN_URL . 'bai-viet/xoa?id=' . $item['id'] ?>', '<?= $item['title'] ?>','bài viết có tiêu đề:')" class="btn btn-sm btn-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>