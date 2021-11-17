<?php
function register(){
    if(isset($_POST['dangky']) && ($_POST['dangky'])){
    $ten_taikhoan = $_POST['ten_taikhoan'];
    $mat_khau = $_POST['mat_khau'];
    $email = $_POST['email'];
    $sql = "INSERT INTO tai_khoan(ten_taikhoan,mat_khau,email) values('$ten_taikhoan','$mat_khau','$email')";
    pdo_execute($sql);;
    }
    client_render('account/register.php');
}


?>