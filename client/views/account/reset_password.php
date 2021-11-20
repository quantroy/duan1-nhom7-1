<div style="max-width: 400px; margin:0 auto; background-color: #ffa400;" class="p-4">
    <form action="doi-mat-khau" method="post">
        <h3>Đổi mật khẩu</h3>

        <div class="form-group">
            <!-- Php -->
            <?php if (isset($_SESSION['false'])) { ?>
                <div class='alert alert-danger' role="alert">
                    <?= $_SESSION['false'] ?>
                </div>
            <?php } elseif (isset($_SESSION['success'])) {  ?>
                <div class='alert alert-success' role="alert">
                    <?= $_SESSION['success'] ?>
                </div>
            <?php  } else { ?>
                <div class='alert alert-primary' role="alert">Đổi mật khẩu tại đây</div>
            <?php } ?>


            <input type="text" class="form-control" name="newpass" placeholder="Nhập mật khẩu"><br>
            <input type="password" class="form-control" name="repass" placeholder="Nhập mã xác nhận">
        </div>
        <input class="btn btn-info" type="submit" name="submit" value="Gửi">
    </form>
</div>