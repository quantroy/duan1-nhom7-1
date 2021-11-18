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
        <form action="kiem-tra-ma" method="post">
            <h3>Nhập mã xác nhận</h3>
            <div class="form-group">

                <!-- Php -->
                <?php if (isset($mess['false'])) : ?>
                    <div class='alert alert-danger' role="alert">
                        <?= $mess['false'] ?>
                    </div>
                <?php else :  ?>
                    <div class='alert alert-primary' role="alert">Nhập mã xác nhận chúng tôi đã gửi cho bạn về Email</div>
                <?php endif ?>

                <input type="text" class="form-control" name="code" placeholder="Nhập mã xác nhận">
            </div>
            <input class="btn btn-info" type="submit" name="submit" value="Gửi">
        </form>
    </div>
</body>

</html>