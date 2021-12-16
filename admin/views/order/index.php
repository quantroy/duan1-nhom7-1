<section class="breadcrumb-section set-bg" data-setbg="<?= CLIENT_ASSET ?>img/banner/banner-top2.png">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <div class="breadcrumb__text">
                    <h2>Đơn hàng</h2>
                    <div class="breadcrumb__option">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">

                </div>
                <div class="card-body">
                    <table class="table tabl-stripped">
                        <thead>
                            <th class="shoping__product col-4">Stt </th>
                            <th class="col-2">Số lượng trà sữa</th>
                            <th class="col-2">Tổng tiền hóa đơn</th>
                            <th col="col-2">Tạo lúc</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < count($order); $i++) {
                                if ($order[$i]['status'] != 5) {
                                    $oder_detail = (queryOrderDetail($order[$i]['id']));
                                }

                                if (isset($_GET['dellid'])) {
                                    $id =  $order[$i]['id'];
                                    $checkStatus = "select * from oder where id = $id";
                                    $resultCheck = executeQuery($checkStatus);
                                    if ($resultCheck['status'] == 0) {
                                        delOrder($_GET['dellid']);
                                    }
                                    header("refresh:0; url =gio-hang?dellsuccess");
                                    exit();
                                }

                            ?>
                                <tr>
                                    <td class="">
                                        <?= $i + 1  ?>
                                    </td>
                                    <td>
                                        <?= count($oder_detail) . ' cốc' ?>
                                    </td>
                                    <td id="price">
                                        <?= number_format($order[$i]['total'], 0, '', ',') . 'đ' ?>
                                    </td>
                                    <td class="">
                                        <?= $order[$i]['created_at'] ?>

                                    </td>
                                    <td>
                                        <a href="don-hang-chi-tiet?id=<?= $order[$i]['id'] ?>" class="btn btn-info">Chi tiết</a>
                                    </td>
                                </tr>
                            <?php  } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>