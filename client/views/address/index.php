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
    <div class="container mt-3">

        <h2>Quản lý địa chỉ nhận hàng của bạn</h2>

        <table class="mt-4" style="border-collapse: collapse; width:80%;  ">
            <tr>
                <th>Chọn</th>
                <th>Tên người nhận</th>
                <th>SĐT người nhận </th>
                <th>Địa chỉ</th>
                <th>Ghi chú</th>
                <th></th>
            </tr>

            <?php
            if (isset($_GET['dellid'])) {
                delete_address_one($_GET['dellid']);
            }
            if (isset($_GET['dels'])) {
                delete_addresss($_GET['dels']);
            }

            for ($i = 0; $i < count($address); $i++) {
            ?>
                <tr>
                    <td>
                        <form action="" method="post">
                            <input type="checkbox" name="checkbox[]">
                        </form>
                    </td>
                    <td style="display: none;" class="key"><?php echo $address[$i]['id']; ?></td>
                    <td><?php echo $address[$i]['ten_nguoinhan'] ?></td>
                    <td><?php echo $address[$i]['sodienthoai'] ?></td>
                    <td><?php echo $address[$i]['diachi'] ?></td>
                    <td><?php echo $address[$i]['ghichu'] ?></td>
                    <td>
                        <a class="btn btn-warning" onclick="return confirm('Bạn có muốn xóa dia chi này không');" href="?dellid=<?php echo $address[$i]['id']; ?>">Xóa</a>
                        <a class="btn btn-secondary" href="edit_address&id=<?php echo $address[$i]['id']; ?>">Sửa</a>
                    </td>
                </tr>
            <?php
            }
            ?>

        </table>
        <div class="mt-3">
        <btn onclick="chooseAll()" class="btn btn-secondary">Chọn tất cả</btn>
        <btn onclick="unchooseAll()" class="btn btn-secondary">Bỏ chọn tất cả</btn>
        <btn class="btn btn-warning" onclick="return confirm('Bạn có muốn xóa tất cả danh mục đã chọn '),checkbox();">Xóa đã chọn</btn>
        </div>
    </div>
</body>

</html>