<?php
function getUesrEmail($email)
{
    $sql = "SELECT * FROM `tai_khoan` WHERE email = '$email'";
    $result = pdo_query_one($sql);
    return $result;
}
function updatePassword($email, $pass)
{
    $sql = "UPDATE `tai_khoan` SET mat_khau= '$pass' WHERE email = '$email'";
    $result = pdo_execute($sql);
    return $result;
}
