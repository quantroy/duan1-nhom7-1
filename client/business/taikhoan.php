<?php
require_once './dao/system_dao.php';
function dangky()
{   

    client_render('taikhoan/dangky.php');
}
function danhsach_tk()
{
    $sql = "select * from tai_khoan";
    $tai_khoan = pdo_query($sql);
    client_render('taikhoan/listtk.php', compact('tai_khoan'));

}