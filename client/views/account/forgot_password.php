<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?= CLIENT_ASSET ?>css/bootstrap.min.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xiao Haha</title>
</head>

<body>
    <div style="max-width: 400px; margin:0 auto; background-color: #ffa400;" class="p-4">
        <h3>Quên mật khẩu</h3>
        <form action="quen-mat-khau" method="post">
            <div class="form-group">
                <label for="email">Email</label><br>

                <!-- Php -->
                <?php if (isset($error['email'])) { ?>
                    <span class='text-danger'><?= $error['email'] ?></span>
                    <?php $error = []; ?>
                <?php } ?>

                <input type="email" class="form-control" name="email" id="email" placeholder="Nhập email của bạn">
            </div>
            <input class="btn btn-info" type="submit" name="submit" value="Gửi yêu cầu">
        </form>
    </div>
</body>

</html>