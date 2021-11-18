<div style="max-width: 400px; margin:0 auto; background-color: #ffa400;" class="p-4">
    <h3>Quên mật khẩu</h3>
    <form action="quen-mat-khau" method="post">
        <div class="form-group">
            <label for="email">Email</label><br>

            <!-- Php -->
            <?php if (isset($mess['false'])) { ?>
                <span class='text-danger'><?= $mess['false'] ?></span>

            <?php } ?>

            <input type="email" class="form-control" name="email" id="email" placeholder="Nhập email của bạn">
        </div>
        <input class="btn btn-info" type="submit" name="submit" value="Gửi yêu cầu">
    </form>
</div>