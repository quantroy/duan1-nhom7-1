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

function login(){
    $loginToken = isset($_COOKIE['remember_login']) ? $_COOKIE['remember_login'] : "";
    if ($loginToken != "") {
        $now = new DateTime();
        $currentTime = $now->format('Y-m-d H:i:s');
        $getUserByRememberToken = "select 
                                            * 
                                    from accounts 
                                    where remember_token = '$loginToken'
                                    and remember_expire >= '$currentTime'";
    
        $user = executeQuery($getUserByRememberToken, false);
    
        if ($user['role'] == 1) {
            unset($user['password']);
            $_SESSION['auth'] = $user;
            header('location:' . BASE_URL);
            die;
        } else if ($user['role'] == 2) {
            unset($user['password']);
            $_SESSION['auth'] = $user;
            header('location:' . BASE_URL);
            die;
        }else if ($user['role'] == 5) {
            unset($user['password']);
            $_SESSION['auth'] = $user;
            header('location:' . ADMIN_URL);
            die;
        }
    }


    client_render('account/login.php');
}
function post(){
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $remember = $_POST['remember'];
    
    $getUserByEmail = "select * from accounts where email = '$email'";
    $user = executeQuery($getUserByEmail, false);
    
    if($user && password_verify($password, $user['password'])){
        if($remember == 1){
            $remember_token = sha1(uniqid() . $user['email']);
    
            $expireObj = new DateTime("+3 minutes");
            $expireTime = $expireObj->format("Y-m-d H:i:s");
            
            setcookie('remember_login', $remember_token, time() + (60*2), '/');
            
            $updateRememberQuery = "update accounts 
                                    set 
                                        remember_token = '$remember_token', 
                                        remember_expire = '$expireTime'
                                    where id = " . $user['id'];
            executeQuery($updateRememberQuery, false);        
        }
    
        if($user['role']==1){
            unset($user['password']);
            $_SESSION['auth'] = $user;
            header('location:'. ACCOUNT_URL .'./staff/guest.php');
            die;
        }else if($user['role']==2){
            unset($user['password']);
            $_SESSION['auth'] = $user;
            header('location:'. BASE_URL );
            die;
        }else if($user['role']==5){
            unset($user['password']);
            $_SESSION['auth'] = $user;
            header('location:'. ADMIN_URL );
            die;
        }else{
            header('location:'. ACCOUNT_URL);
    
        }
    }
    header('location:'. ACCOUNT_URL);
    }
    
