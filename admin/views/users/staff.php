<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table th {
        text-align: left;
    }
</style>

<body>
    <h1 style="width: 100%; text-align: center;">Quản lý nhân viên</h1>
    <h2>Thống kê</h2>
    <div class="col-lg-3 col-6">
        <!-- small box -->
        <div class="small-box bg-info">
            <div class="inner">
                <h3>  </h3>
                <p>Số lượng nhân viên</p>
            </div>
           
        </div>

        <h2>Danh sách</h2>

    </div>
    <div class="row ml-5">
        <?php
        if (isset($_GET['dellid'])) {
            delete_user_one($_GET['dellid']);
        }
        if (isset($_GET['dels'])) {
            delete_user($_GET['dels']);
        }
        for ($i = 0; $i < count($staff); $i++) {
        ?>

            <div class="col-sm-5 card bg-light d-flex flex-fill ml-5 ">
                <form class="mt-1" action="" method="post">
                    <input type="checkbox" name="checkbox[]">
                </form>
                <div style="display: none;" class="key"><?php echo $staff[$i]['id']; ?></div>
                <div class="card-header text-muted border-bottom-0">
                    <h2 class="lead"><b>Họ Tên: <?php echo $staff[$i]['name'] ?></b></h2>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col-7">
                            <p class="text-muted text-sm"><b>About: </b> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-building"></i></span> Address: Demo Street 123, Demo City 04312, NJ</li>
                                <li class="small"><span class="fa-li"><i class="fas fa-lg fa-phone"></i></span> Phone #: + 800 - 12 12 23 52</li>
                                <li class="small"><span class="fa-li"><i class="fas fa-envelope-open"></i></span> Gmail <?php echo $staff[$i]['email'] ?></li>
                            </ul>
                        </div>
                        <div class="col-5 text-center">
                            <img src="<?php echo $staff[$i]['avatar'] ?>" class="img-circle img-fluid">
                        </div>
                    </div>

                </div>
                <div style="text-align: right;" class="card-footer">
                    <a class="btn btn-secondary" onclick="return confirm('Bạn có muốn xóa nhân viên này không');" href="?dellid=<?php echo $staff[$i]['id']; ?>">Xóa</a>
                    <a class="btn btn-secondary" href="edit_staff&id=<?php echo $staff[$i]['id']; ?>">Sửa</a>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
    <div style="position: fixed; bottom: 60px;">
        <btn onclick="chooseAll()" class="btn btn-secondary">Chọn tất cả</btn>
        <btn onclick="unchooseAll()" class="btn btn-secondary">Bỏ chọn tất cả</btn>
        <btn class="btn btn-secondary" onclick="return confirm('Bạn có muốn xóa tất cả nhân viên đã chọn '),checkbox();">Xóa đã chọn</btn>
    </div>
</body>

</html>