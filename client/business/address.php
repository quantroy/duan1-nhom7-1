<?php

require_once './dao/system_dao.php';
function address($ma_kh)
{
    $sqlQuery = "select * from address where ma_kh = $ma_kh";
    $address = executeQuery($sqlQuery, true);
    client_render('address/index.php', compact('address'));
}

function edit_address($id)
{
    $sqlQuery = "select * from address where id = $id";
    $address = executeQuery($sqlQuery, true);
    client_render('address/edit.php', compact('address'));
}
function delete_address_one($dellid)
{
    $sqlQuery = "delete from address where id = $dellid";
    executeQuery($sqlQuery, true);
    // echo header("refresh:0; url = $_SERVER[HTTP_REFERER]");
    // exit();
}

function delete_addresss($dellid)
{
    delAll('address', 'id', explode(',', $dellid));
    echo "Xóa các mục đã chọn thành công";
    // echo header("refresh:0; url = $_SERVER[HTTP_REFERER]");
    // exit();
}

function edit($id, $name, $call, $address, $note)
{
    $sqlQuery = "Update address set sodienthoai = '$call', ten_nguoinhan = '$name', diachi = '$address', ghichu = '$note' where id = $id";
    executeQuery($sqlQuery, true);
    echo "cap nhat thah cong";
    // echo header("refresh:2; url = $_SERVER[HTTP_REFERER]");
    // exit();
}

?>
