<?php
// include_once './../../../dao/system_dao.php';
// $conn = pdo_get_connection();
$dburl = "mysql:host=localhost;dbname=database_duan1;charset=utf8";
$username = 'root';
$password = '';

$conn = new PDO($dburl, $username, $password);
?>
<!doctype html>
<html lang="en">

<head>
    <title>Administration</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


    <link rel="stylesheet" href="teamplate/css/style.css">
    <?php include 'admin/views/layouts/style.php'; ?>

</head>

<body>
    <?php include 'admin/views/layouts/header.php'; ?>
    <?php include 'admin/views/layouts/sidebar.php'; ?>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Tài Khoản</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table table-responsive-xl">
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th>Email</th>
                                    <th>User Name</th>
                                    <th>Phone</th>
                                    <th>Status</th>
                                    <th>Permission</th>
                                    <!-- <th>Quản trị</th> -->
                                    <th>Administration</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $stmt = $conn->prepare("SELECT * FROM tai_khoan");
                                $stmt->execute();
                                $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                $mang = $stmt->fetchAll();
                                foreach ($mang as $rows) { ?>

                                    <tr class="alert" role="alert">
                                        <td>
                                            <label class="checkbox-wrap checkbox-primary">
                                                <input type="checkbox" checked>
                                                <span class="checkmark"></span>
                                            </label>
                                        </td>
                                        <td class="d-flex align-items-center">
                                            <div class="img">

                                            </div>
                                            <div class="pl-3 email">
                                                <span>
                                                    <?php echo $rows['email'] ?>
                                                </span>
                                                <!-- <span>Added: 01/03/2020</span> -->
                                            </div>
                                        </td>
                                        <td>
                                            <?php echo $rows['user_name'] ?>
                                        </td>
                                        <td>
                                            <span class="active">
                                                <?php echo $rows['phone_number'] ?>
                                            </span>
                                        </td>
                                        <td class="status">
                                            <span class="active">
                                                <?= ($rows['trang_thai'] == 1) ? 'Bị Khóa' : 'Hoạt động' ?>
                                            </span>
                                        </td>
                                        <td class="status">
                                            <span>
                                                <?= ($rows['role'] == 1) ? 'Khách hàng' : 'Admin' ?>
                                            </span>
                                        </td>
                                        <td>
                                            <a aria-hidden="true" href="/duan1-nhom7/admin/business/user/edit_user.php?id=<?php echo $rows['id'] ?>" class='btn btn-success'><i class="fa fa-edit"></i></a>
                                            <a aria-hidden="true" href="/duan1-nhom7/admin/business/user/delete_user.php?id=<?php echo $rows['id'] ?>" onClick="return confirm('Bạn có thực sự muốn xóa không')" class="btn btn-info"><i class="fa fa-close"></i></a>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="teamplate/js/jquery.min.js"></script>
    <script src="teamplate/js/popper.js"></script>
    <script src="teamplate/js/bootstrap.min.js"></script>
    <script src="teamplate/js/main.js"></script>

</body>

</html>