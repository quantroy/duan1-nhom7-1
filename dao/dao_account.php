<?php
function getUesrEmail($email)
{
    $sql = "SELECT * FROM `tai_khoan` WHERE email = '$email'";
    $result = pdo_query_one($sql);
    return $result;
}
