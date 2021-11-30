<head>

</head>
<?php if (isset($_GET['Upadate_Cart'])) {
    $log_success = 'none';
    $log_error = 'none';
    $log_note = 'flex';
    $mesNote = "Giỏ hàng đang ở trạng thái mới nhất ";
} elseif (isset($_GET['dell'])) {
    $log_note = 'none';
    $log_error = 'none';
    $log_success = 'flex';
    $mesSuccess = "Đã xóa một sản phẩm khỏi giỏ hàng ";
} else {
    $log_note = 'none';
    $log_error = 'none';
    $log_success = 'none';
}
if (isset($_GET['dellid'])) {
    del($_GET['dellid']);
    echo header("refresh:0; url =?dell");
    exit();
}
?>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-section set-bg" data-setbg="<?= CLIENT_ASSET ?>img/banner/banner-top2.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Giỏ hàng</h2>
                    <div class="breadcrumb__option">
                        <a href="trang-chủ">Trang chủ</a>
                        <span>Giỏ hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Breadcrumb Section End -->

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
                                <th>Giá</th>
                                <th style="text-align: center;">Số lượng</th>
                                <th>Thành tiền</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < count($carts); $i++) { ?>
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src=" <?= getImagePro($carts[$i]['product_id']) ?> alt=">
                                        <h5><?= getNamePro($carts[$i]['product_id']) ?> (<?= $carts[$i]['product_size'] ?>) </h5>
                                    </td>
                                    <td id="price" class="shoping__cart__price">
                                        <?= number_format($carts[$i]['priceProOpt'], 0, '', ',') ?>
                                    </td>
                                    <td style="text-align: center;" class="btn-group">
                                        <button index="<?= $i ?>" id="reduce" style="width: 20px; height: 25px;display: flex; justify-content: center; align-items: center;" type="button" class="btn btn-info rounded-circle ">-</button>
                                        <input onkeyup="toTal(<?= $i ?>)" id="quantity" style="width: 50px; text-align: center; border: none; background-color: #FAFAFA;" value="<?= $carts[$i]['quantity'] ?>" type="text" name="quantity">

                                        <button index="<?= $i ?>" id="augment" style="width: 20px;text-align: center; height: 25px;display: flex; justify-content: center; align-items: center;" type="button" class="btn btn-info rounded-circle">+</button>
                                    </td>
                                    <td onchange="totalCart()" id="total" class="shoping__cart__total">
                                        <?php $id =  $carts[$i]['product_id'] ?>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span data-toggle="modal" data-target="#dell" onclick="check_delete('trà sữa có tên /<?= getNamePro($carts[$i]['product_id']) . '(' . $carts[$i]['product_size'] . ')' . '/ Khỏi giỏ hàng' ?>', <?= $carts[$i]['id'] ?> )" class="icon_close"></span>
                                    </td>
                                </tr>
                            <?php
                            } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="shoping__cart__btns">
                    <a href="san-pham" class="primary-btn cart-btn">Tiếp tục mua trà sữa</a>
                    <a href="?Upadate_Cart" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                        Cập nhật giỏ hàng</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__continue">
                    <div class="shoping__discount">
                        <h5>Thông tin giao hàng</h5>

                        <div class="container mt-3">

                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" id="custom-tabs-three-tab" role="tablist">

                                <li class="nav-item">
                                    <a style="cursor: default;" style="background-color: red; " class="nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Nhập thông tin</a>
                                </li>

                            </ul>
                            <div class="mt-2" style="text-align: right;width: 100%;"><button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#modal-lg">
                                    Lấy thông tin cũ
                                </button>
                            </div>


                            <!-- The Modal -->


                            <div class="tab-content mt-3" id="custom-tabs-three-tabContent">

                                <div class="tab-pane fade active show" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">
                                    <form action="">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                            </div>
                                            <input id="nameIp" style="text-align: left;" type="text" class="form-control" placeholder="Tên người nhận">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                            </div>
                                            <input id="phoneIp" style="text-align: left;" type="text" class="form-control" placeholder="Số điện thoại người nhận">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                            </div>
                                            <input id="addressIp" style="text-align: left;" type="text" class="form-control" placeholder="Địa chỉ người nhận">
                                        </div>
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fas fa-sticky-note"></i></span>
                                            </div>
                                            <input id="noteIp" style="text-align: left;" type="text" class="form-control" placeholder="Ghi chú địa chỉ">
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping__checkout">
                    <h5>Tổng tiền giỏ hàng</h5>
                    <ul>
                        <li>Phí vận chuyển <span id="priceShip"><?= number_format(priceShip(), 0, '', ',') . 'đ' ?></span></li>
                        <li>Bạn có <strong id="points"><?php echo number_format(point($_SESSION['auth']['id'], 0, '', ',')) ?></strong> điểm tích<span id="render_points" dataWait=<?php echo point($_SESSION['auth']['id']) ?> data="0"><button onclick="clickpoints()" id="btn_points" type="button" class="btn btn-secondary">Áp dụng</button></span></li>
                        <li>Tổng tiền <span id="totalCart"></span></li>
                    </ul>
                    <a href="#" class="primary-btn">Mua hàng</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Shoping Cart Section End -->



<!-- logmes star -->
<?php include_once "./client/views/layouts/log.php" ?>
<!-- logmes end -->
<?php include_once "./client/views/layouts/modal_delete.php" ?>
<div style="height:700px ;" class="modal fade mt-5" id="modal-lg" style="display: none;" aria-hidden="true">
    <div style="width: 40%;" class="modal-dialog modal-lg">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Bạn muốn nhập thông tin nào ?</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div style="overflow-y: auto;height: 250px; " class="modal-body mt-5">
                <ul>

                    <?php $address = address($_SESSION['auth']['id']);

                    for ($i = 0; $i < count($address); $i++) {
                    ?>
                        <button onclick="getAddRess(<?= $i ?>)" data-dismiss="modal" class="btn btn-secondary"> Nhập thông tin này</button>
                        <li id="modalName" style="margin-left: 30px;margin-top: 5px;" data="<?= $address[$i]['recciever'] ?>"><strong>Tên người nhận</strong>: <?= $address[$i]['recciever'] ?></li>
                        <li id="modalPhone" style="margin-left: 30px;" data="<?= $address[$i]['phone'] ?>"><strong>Số điện thoại</strong>: <?= $address[$i]['phone'] ?></li>
                        <li id="modalAddress" style="margin-left: 30px;" data="<?= $address[$i]['address'] ?>"><strong>Địa chỉ</strong>: <?= $address[$i]['address'] ?></li>
                        <li id="modalNote" style="margin-left: 30px;" data="<?= $address[$i]['note'] ?>"><strong>Ghi chú địa chỉ</strong>: <?= $address[$i]['note'] ?></li>
                        <div style="width: 100%; height: 1px; background-color: black;margin-bottom: 20px;"></div>
                    <?php
                    }

                    ?>
                </ul>

            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>
<script src="<?= CLIENT_ASSET ?>js/cart.js"></script>