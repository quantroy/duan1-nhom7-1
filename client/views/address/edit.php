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
        edit($_GET['id'], $_POST['name'], $_POST['sdt'], $_POST['address'], $_POST['note']);
    }
    ?>
    <div class="container">
        <a class="btn btn-secondary" href="address">back</a>

        <h2>edit address</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="name">ten nguoi nhan</label>
                        <input type="text" class="form-control" name="name" value="<?php echo $address[0]['ten_nguoinhan'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="sdt">sdt nguoi nhan</label>
                        <input type="text" class="form-control" name="sdt" value="<?php echo $address[0]['sodienthoai'] ?>">
                    </div>
                    
                    <button type="submit" class="btn btn-secondary">Cập nhật</button>
                </div>
                <div class="col">
                <div class="form-group">
                        <label for="address">dia chi</label>
                        <input type="text" class="form-control" name="address" value="<?php echo $address[0]['diachi'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="note">ghi chu</label>
                        <input type="text" class="form-control" name="note" value="<?php echo $address[0]['ghichu'] ?>">
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>