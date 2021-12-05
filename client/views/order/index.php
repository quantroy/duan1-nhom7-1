<?php
if (isset($_GET['dellSuccess'])) {
    $log_success = 'flex';
    $log_error = 'none';
    $log_note = 'none';
    $mesSuccess = "Đã hủy đơn hàng thành công ";
} elseif (isset($_GET['dellError'])) {
    $log_success = 'none';
    $log_error = 'flex';
    $log_note = 'none';
    $mesError = "Không thể hủy đơn hàng này. Chúng tôi đã xác nhận và đang xử lý";
} else {
    $log_note = 'none';
    $log_error = 'none';
    $log_success = 'none';
}

?>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= CLIENT_ASSET ?>img/banner/banner-top2.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Đơn hàng</h2>
                    <div class="breadcrumb__option">
                        <a href="trang-chủ">Trang chủ</a>
                        <span>Đơn hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->
<?php for ($i = 0; $i < count($order); $i++) {
    if ($order[$i]['status'] != 5) {
        $oder_detail = (queryOrderDetail($order[$i]['id']));
        $carts = queryCartId($oder_detail);
    }

    if (isset($_GET['dellid'])) {
        $id =  $order[$i]['id'];
        $checkStatus = "select * from oder where id = $id";
        $resultCheck = executeQuery($checkStatus);
        if ($resultCheck['status'] == 0) {
            delOrder($_GET['dellid']);
            echo header("refresh:0; url =?dellSuccess");
            exit();
        }
        // echo '<pre>';
    }
?>

    <!-- Shoping Cart Section Begin -->
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Trà sữa</th>
                                    <th class="">Thêm topping</th>
                                    <th>Giá</th>
                                    <th style="text-align: center;width: 100px;">Số lượng</th>
                                    <th>Thành tiền</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                for ($j = 0; $j < count($carts); $j++) {
                                    $cart = quertycart($carts[$j])
                                ?>
                                    <tr>
                                        <td class="shoping__cart__item">
                                            <img style="width: 10%;" src=" <?= IMG_URL . ImagePro($cart[0]['product_id']) ?> ">
                                            <h5><?= NamePro($cart[0]['product_id']) ?> (<?= $cart[0]['product_size'] ?>)(<?= number_format($oder_detail[$j]['price_product'], 0, '', ',') . "đ" ?>)
                                            </h5>

                                        </td>
                                        <td> <?php echo optionName(Cartoption($cart[0]['id']));
                                                echo '(' . number_format(priceOption($cart[0]['id']), 0, '', ',') . "đ" . ')' ?> </td>
                                        <td id="price" class="shoping__cart__price">
                                            <?php echo number_format($oder_detail[$j]['price_product'] + priceOption($cart[0]['id']), 0, '', ',') . "đ"  ?>
                                        </td>
                                        <td>
                                            <?= $cart[0]['quantity'];  ?>
                                        </td>
                                        <td id="total" class="shoping__cart__total">
                                            <?php $price = $oder_detail[$j]['price_product'] + priceOption($cart[0]['id']);
                                            $quanti = $cart[0]['quantity'];
                                            echo number_format($price * $quanti, 0, '', ',') . "đ"  ?>
                                        </td>
                                    </tr>

                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="shoping__continue">
                        <div class="shoping__discount">


                            <div class="container mt-3">

                                <!-- Nav tabs -->

                                <h5 style="color: green;">Trạng thái đơn hàng: <span style="color: red;"><?php if ($order[$i]['status'] == 0) {
                                                                                                                echo 'Chờ xác nhận';
                                                                                                            } elseif ($order[$i]['status'] == 1) {
                                                                                                                echo "Đã xác nhận";
                                                                                                            } elseif ($order[$i]['status'] == 2) {
                                                                                                                echo "Đang giao";
                                                                                                            } elseif ($order[$i]['status'] == 3) {
                                                                                                                echo "Đã nhận hàng";
                                                                                                            } else {
                                                                                                                echo "Giao hàng thất bại ";
                                                                                                            } ?></span> </h5>
                                <a href="don-hang" class="btn btn-success"> Cập nhật trạng thái</a>

                                <ul>
                                    <h5 class="mt-5" style="color: green;">Thông tin giao hàng </h5>
                                    <li><strong>Tên người nhận:</strong> <?= $order[$i]['name']  ?> </li>
                                    <li><strong>Số điện thoại:</strong> <?= $order[$i]['phone']  ?> </li>
                                    <li><strong>Địa chỉ nhận:</strong> <?= $order[$i]['address']  ?> </li>
                                    <li><strong>Ghi chú:</strong> <?= $order[$i]['note']  ?> </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5 style="color: green;">Tổng tiền thanh toán</h5>
                        <ul>
                            <li>Tiền tạm tính <span><?= number_format($order[$i]['sub_total'], 0, '', ',') . 'đ'  ?></span></li>
                            <li>Phí vận chuyển <span><?= number_format(priceShip(), 0, '', ',') . 'đ' ?></span></li>
                            <li>Dùng điểm <span><?= number_format($order[$i]['points'], 0, '', ',') . 'đ'  ?></span></li>
                            <li>Tổng tiền <span><?= number_format($order[$i]['total'], 0, '', ',') . 'đ'   ?></span></span></li>
                        </ul>
                    </div>
                </div>
                <div class="mt-4" style="width: 100%;text-align: right;">
                    <?php
                    $id =  $order[$i]['id'];
                    $checkStatus = "select * from oder where id = $id";
                    $resultCheck = executeQuery($checkStatus);
                    $none = "";

                    if ($resultCheck['status'] == 0) {
                        $clickCheckStatus = "#dell";
                        $bg = "danger";
                        $toad = "";
                        $clickHuy = "";
                    } else {
                        $clickCheckStatus = "#";
                        $bg = "secondary";
                        $clickHuy = "Nohuy()";
                    }
                    if ($resultCheck['status'] == 4) {
                        $none = "display:none;";
                    }
                    ?>
                    <span style="<?= $none ?>" id="huyOder" onmouseover="<?= $clickHuy ?>" class="btn btn-<?= $bg ?>" data-toggle="modal" data-target="<?= $clickCheckStatus ?>" onclick="check_delete('hủy hóa đơn đã chọn (nó sẽ quay lại giỏ hàng của bạn)', <?= ($order[$i]['id']) ?> )"> Hủy đơn hàng này</span>

                </div>
                <div style="height: 1px;width: 100%; background-color: black; margin-top: 30px;"></div>
            </div>
        </div>
    </section>
    <?php include_once "./client/views/layouts/modal_delete.php" ?>
    <?php include_once "./client/views/layouts/log.php" ?>
<?php
}
?>

<script>
    function Nohuy() {
        const huyOder = document.getElementById('huyOder');
        huyOder.innerHTML = "Đơn hàng này đang xử lý và sẽ nhanh chóng giao đến cho bạn";
    }
</script>