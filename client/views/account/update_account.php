<?php
if (isset($_GET['id']) && ($_GET['id'])) {
    $id = $_GET['id'];
    foreach (selectDb("SELECT * FROM accounts WHERE id = '$id'") as $rows) {
        $name =  isset($rows['name']) ? $rows['name'] : '';
        $email = isset($rows['email']) ? $rows['email'] : '';
        $avatar = isset($rows['avatar']) ? $rows['avatar'] : '';
        $phone = isset($rows['phone']) ? $rows['phone'] : '';
        $id = isset($rows['id']) ? $rows['id'] : '';
    }
}
?>
<style>
    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
        width: 525px;
        margin-left: 670px;
    }

    .text {
        text-align: center;
    }
</style>
<form action="cap-nhat?id=<?= $id ?>" enctype="multipart/form-data" method="POST">
    <div style="max-width: 575px; text-align: center; margin:0 auto;" class="p-4">
        <?php if (isset($_SESSION['false'])) { ?>
            <div class='alert alert-danger' role="alert">
                <?= $_SESSION['false'] ?>
            </div>
        <?php } elseif (isset($_SESSION['success'])) {  ?>
            <div class='alert alert-success' role="alert">
                <?= $_SESSION['success'] ?>
            </div>
        <?php  } ?>
    </div>
    <p class="text-uppercase text">Thông tin tài khoản</p>
    <div class="mb-3">
        <div class="container mt-3">
            <img src="/duan1-nhom7/public/uploads/<?= $avatar ?>" class="" alt="Cinque Terre" width="150" height="150" style="margin-left: 170px;">
        </div>
        <label for="exampleFormControlInput1" class="form-label">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" name="email" value="<?= $email ?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Số điện thoại</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="phone" value="<?= $phone ?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Họ và tên</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" name="name" value="<?= $name ?>">
    </div>
    <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Tải ảnh nên</label>
        <input value="chọn ảnh" type="file" class="form-control" onchange="changeImg(this)" id="exampleFormControlInput1" name="image">
    </div>
    <div class="mb-3">
        <input style="background-color: #198754;" type="submit" value="Cập nhật" name="update" class="form-control" id="exampleFormControlInput1">
    </div>
</form>