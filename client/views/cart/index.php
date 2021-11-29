<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    table td {
        padding-top: 1em;
    }
</style>



<body>
    <div style="background:#fff" class="container mt-3 p-3 shadow mb-5">

        <h3 style="text-align: center; width: 100%;">Giỏ hàng</h3>

        <table class="mt-5" style="border-collapse: collapse; width:100%;  ">
            <tr>
                <th>Chọn</th>
                <th>Ảnh sản phẩm</th>
                <th>Tên sản phẩm </th>
                <th>Size</th>
                <th>Option</th>
                <th>Tổng tiền</th>
            </tr>

            <?php
            $id;
            if (isset($_GET['dellid']) || isset($_GET['dels'])) {
                $log_success = 'flex';
                $log_error = 'none';
                $mesSuccess = "Bạn đã xóa địa chỉ thành công ";
            } else {
                $log_error = 'none';
                $log_success = 'none';
            }
           

            for ($i = 0; $i < count($carts); $i++) {
            ?>
                <tr style="margin-top: 30px;">
                    <td>
                        <form action="" method="post">
                            <input type="checkbox" name="checkbox[]">
                        </form>
                    </td>
                    <td style="display: none;" class="key"><?php echo $carts[$i]['id']; ?></td>
                    <td><?php echo getImagePro($carts[$i]['product_id']) ?></td>
                    <td><?php echo getNamePro($carts[$i]['product_id']) ?></td>
                    <td><?php echo $carts[$i]['product_size'] ?></td>
                    <td><?php echo 'Đường: '. $carts[$i]['sugar'] ?>
                        <?php echo 'Đá: '. $carts[$i]['ice'] ?>
                        <?php echo 'Topping thêm: '. $carts[$i]['topping'] ?></td>
                        <td> <?php echo $carts[$i]['quantity'] . ' x '. number_format($carts[$i]['priceProOpt'], 0, '', ',')  . '='. number_format($carts[$i]['quantity'] * $carts[$i]['priceProOpt'], 0, '', ',') .'đ' ?>  </td>
                </tr>
            <?php
            }
            ?>

        </table>
    </div>
    <!-- logmes star -->
    <?php include_once "./client/views/layouts/log.php" ?>
    <!-- logmes end -->

    <!-- The Modal -->
    <?php include_once "./client/views/layouts/modal_warning.php" ?>
    <?php include_once "./client/views/layouts/modal_delete.php" ?>
</body>

</html>