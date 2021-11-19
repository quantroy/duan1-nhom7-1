<?php
include_once './../../../dao/system_dao.php';
if (isset($_GET['ID'])) {
    $id = $_GET['ID'];
    foreach (selectDb("SELECT * FROM tai_khoan WHERE ID = '$id'") as $row) {
        $name = isset($row['ten_taikhoan']) ? $row['ten_taikhoan'] : '';
        $password = isset($row['mat_khau']) ? $row['mat_khau'] : '';
        // $images_user = isset($row['image_user']) ? $row['image_user'] : '';
        $phone = isset($row['sdt']) ? $row['sdt'] : '';
        $email = isset($row['email']) ? $row['email'] : '';
        $role = isset($row['vai_tro']) ? $row['vai_tro'] : '';
        // $active = isset($row['active']) ? $row['active'] : '';
    }
    if (isset($_POST['updateuser'])) {
        $name_new = isset($_POST['name']) ? $_POST['name'] : $name;
        //$images_user_new = isset($_POST['image']) ? $_POST['image'] : $images_url;
        $phone_new = isset($_POST['phone']) ? $_POST['phone'] : $phone;
        $email_new = isset($_POST['email']) ? $_POST['email'] : $email;
        $pass_new = isset($_POST['password']) ? $_POST['password'] : $password;
        $active_new = isset($_POST['active']) ? $_POST['active'] : $active;
        $role_new = isset($_POST['role']) ? $_POST['role'] : $permission;

        action("UPDATE tai_khoan SET ten_taikhoan='$name_new', sdt='$phone_new',email= '$email_new',mat_khau='$pass_new',vai_tro='$role_new' WHERE ID = '$id'");
        header("Location:http://localhost/duan1-nhom7/tai-khoan");
    }
} else {
    header("Location:http://localhost/duan1-nhom7/tai-khoan");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
            position: relative;
            left: 250px;
        }

        h4 {
            text-align: center;
            font-size: 60px
        }

        label {
            font-weight: bold;
        }

        .btn {
            position: relative;
            left: -65px;
        }

        .button2 {
            margin: 10px;
            position: relative;
            left: 55px;
        }

        .button1 {
            margin: 10px;
            position: relative;
            left: 180px;
        }
    </style>
    <title>Quản trị Tài Khoản</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>

<body>
    <div class="container">
        <h4>Cập nhật tài khoản</h4>
        <div class="row text-center">
            <form action="" id="updateuser" method="POST">
                <div class="left">
                    <label for="name">
                        Tên tài khoản
                    </label>
                    <input id="exampleInputEmail1" class="form-control" type="text" value="<?= $name ?>" name="name">
                    <br>
                    <label for="phone">
                        Số điện thoại
                    </label>
                    <input id="exampleInputEmail1" class="form-control" type="number" value="<?= $phone ?>" name="phone">
                    <br>
                    <label for="email">
                        Email
                    </label>
                    <input id="exampleInputEmail1" class="form-control" type="text" value="<?= $email ?>" name="email">
                    <br>
                </div>
                <div class="right">
                    <label for="password">
                        Mật khẩu
                    </label>
                    <input id="exampleInputEmail1" class="form-control" type="text" value="<?= $password ?>" name="password">
                    <br>
                    <label for="exampleInputEmail1">
                        Vai trò
                    </label> 
                    <br>
                    <select name="role" value="<?= $role ?>" style="padding:0px 20px;background:#cdcdcd;">
                        <option value="0">Admin</option>
                        <option value="1">khách hàng</option>
                    </select> <br> 
                    <br>
                    <label for="exampleInputEmail1">
                        Images
                    </label>
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1">
                    <br>
                    <img src="../upload/<?php echo $row['image_user'] ?>" width="150">
                </div>
                <div class="button">
                    <button type="submit" name="updateuser" class=" button1 btn btn-success
                  mt-3 float-right" value="Submit">Cập nhật</button>
                    <button type="submit" name="updateuser" class=" button2 btn btn-warning
                  mt-3 float-right" value="Submit">Quay Lại</button>
                </div>
            </form>
        </div>
    </div>
</body>

</html>