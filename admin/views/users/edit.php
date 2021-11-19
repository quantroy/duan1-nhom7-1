<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    if (isset($_POST['name'])) {
        edit($_GET['id'], $_POST['kichhoat']);
    }
    ?>
    <div class="container">
        <a class="btn btn-secondary" href="users">Quản lý khách hàng</a>
        <a class="btn btn-secondary" href="staff">Quản lý nhân viên</a>

        <h1 style="width: 100%; text-align: center;">Chỉnh sửa quyền tài khoản</h1>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">Tên nhân viên</label>
                        <input readonly type="text" class="form-control" name="name" placeholder="<?php echo $staff[0]['name'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="sdt">Email</label>
                        <input readonly type="text" class="form-control" name="sdt" placeholder="<?php echo $staff[0]['email'] ?>">
                    </div>

                    <button type="submit" class="btn btn-secondary mt-3">Cập nhật</button>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="staff">Email</label>
                        <input readonly type="text" class="form-control" name="staff" placeholder="<?php echo $staff[0]['email'] ?>">
                    </div>
                    <label for="kichhoat">Vai trò</label>
                    <div class="form-control ">
                        <input type="radio" class="" value="" required name="kichhoat"> Khách hàng
                        <input type="radio" class="" value=1 required name="kichhoat"> Nhân viên
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>