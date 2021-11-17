<?php
function forgot_password()
{
    if (isset($_POST['submit'])) {
        $error = [];
        $email = $_POST['email'];
        $result = getUesrEmail($email);
        if ($email == '') {
            $error['email'] = 'Không được bỏ trống';
        } elseif (!is_array($result)) {
            $error['email'] = 'Email không tồn tại';
        }
        if (empty($error)) {
            $code = substr(rand(0, 999999), 0, 6);
            $title = 'Yêu cầu đặt lại mật khẩu';
            $content = "Chào bạn, <br>
                        Chúng tôi đã nhận được yêu cầu đặt lại mật khẩu XiaoHaha của bạn.<br>
                        Nhập mã xác nhận sau đây: <h3>$code</h3>";
            sendEmail($title, $content, $email);

            $_SESSION['email'] = $email;
            $_SESSION['code'] = $code;
            header('location: khoi-phuc-mat-khau');
        }
    }
    include_once './client/views/account/forgot_password.php';
}
function reset_password()
{
    if (isset($_POST['submit'])) {
        // if ($code == '') {
        //     $error['email'] = 'Không được bỏ trống';
        // } elseif (!is_array($result)) {
        //     $error['email'] = 'Email không tồn tại';
        // }
        // if (empty($error)) {
        //     $code = substr(rand(0, 999999), 0, 6);
        //     $title = 'Yêu cầu đặt lại mật khẩu';
        //     $content = "Chào bạn, <br>
        //                 Chúng tôi đã nhận được yêu cầu đặt lại mật khẩu XiaoHaha của bạn.<br>
        //                 Nhập mã đặt lại mật khẩu sau đây: <h4>$code</h4>";
        //     sendEmail($title, $content, $email);
        //     header('location: khoi-phuc-mat-khau');
        // }
    }
    header('location: ./client/views/account/verification.php');
}
