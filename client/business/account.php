<?php

//Huỷ session['success'] và $_SESSION['false']
unset($_SESSION['success']);
unset($_SESSION['false']);


function getUesrEmail($email)
{
    $sql = "SELECT * FROM `accounts` WHERE email = '$email'";
    $result = executeQuery($sql);
    return $result;
}
function updatePassword($email, $pass)
{
    $sql = "UPDATE `accounts` SET password = '$pass' WHERE email = '$email'";
    $result = executeQuery($sql);
    return $result;
}
//Quên mật khẩu
function forgot_password()
{

    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $result = getUesrEmail($email);
        if ($email == '') {
            $_SESSION['false'] = 'Không được bỏ trống';
        } elseif (!is_array($result)) {
            $_SESSION['false'] = 'Email không tồn tại';
        } else {
            unset($_SESSION['false']);
            $_SESSION['location'] = 'quen-mat-khau';

            $code = random_int(10000, 99999);
            $title = 'Yêu cầu đặt lại mật khẩu';
            $content = "Chào bạn, <br>
            Chúng tôi đã nhận được yêu cầu đặt lại mật khẩu XiaoHaha của bạn.<br>
            Nhập mã xác nhận sau đây: <h3>$code</h3>";
            sendEmail($title, $content, $email);

            $_SESSION['email'] = $email;
            $_SESSION['code'] = $code;
            header("location:" . BASE_URL . "tai-khoan/kiem-tra-ma");
        }
    }
    client_render('account/forgot_password.php');
}
function code_check()
{
    if (isset($_SESSION['location']) && $_SESSION['location'] == 'quen-mat-khau') {
        if (isset($_POST['submit'])) {

            if ($_POST['code'] === '') {
                $_SESSION['false'] = 'Không được bỏ trống';
            } elseif ($_SESSION['code'] != $_POST['code']) {
                $_SESSION['false'] = 'Mã xác nhận không đúng';
            } else {
                unset($_SESSION['false']);
                $_SESSION['location'] = 'kiem-tra-ma';
                header('location:' . BASE_URL . 'tai-khoan/doi-mat-khau');
            }
        }
        client_render('account/verification.php');
    } else {
        header('location:' . BASE_URL . 'trang-chu');
    }
}
function reset_password()
{
    if (isset($_SESSION['location']) && $_SESSION['location'] == 'kiem-tra-ma') {
        if (isset($_POST['submit'])) {
            $newPass = $_POST['newpass'];
            $rePass = $_POST['repass'];

            if (empty($newPass) || empty($rePass)) {
                $_SESSION['false'] = 'Không được bỏ trống';
            } elseif (strlen($newPass) < 6) {
                $_SESSION['false'] = 'Mật khẩu tối thiểu có 6 kí tự';
            } elseif ($newPass !== $rePass) {
                $_SESSION['false'] = 'Mật khẩu nhập lại không khớp';
            } else {
                $_SESSION['success'] = 'Đổi mật khẩu thành công. Tự động chuyển hướng sau 5s!';
                unset($_SESSION['false']);
                unset($_SESSION['location']);
                updatePassword($_SESSION['email'], $rePass);
                header('refresh:5;' . BASE_URL . 'trang-chu');
            }
        }
        client_render('account/reset_password.php');
    } else {
        header('location:' . BASE_URL . 'trang-chu');
    }
}
//Đăng ký
function register()
{
    if (isset($_POST['dang-ky']) && ($_POST['dang-ky'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $password = password_hash($password,PASSWORD_DEFAULT);

        $getUserByEmail = "SELECT * FROM accounts WHERE email = '$email'";
        $user = executeQuery($getUserByEmail, false);

        $errors = "";
        if (empty($email)) {
            $errors .= "email-err=Hãy nhập email&";
        } else if ($email == $user['email']) {
            $errors .= "email-err=Tài khoản đã tồn tại&";
        }
        if (empty($password)) {
            $errors .= "password-err=Hãy nhập mật khẩu&";
        } else if ($password >= 6) {
            $errors .= "password-err=Tối thiểu phải có 6 kí tự trở lên&";
        }
        if (empty($name)) {
            $errors .= "name-err=Hãy nhập họ và tên&";
        }

        $errors = rtrim($errors, '&');

        if (strlen($errors) > 0) {
            header('location:' . BASE_URL . 'tai-khoan/dang-ky' . '?' . $errors);
            die;
        }
        else {
        $sql = "INSERT INTO accounts(email,name,password) values('$email','$name','$password')";
        pdo_execute($sql);
        header('location:' . BASE_URL . 'tai-khoan/dang-nhap');
        die;
     }
    }
    client_render('account/register.php');
}
