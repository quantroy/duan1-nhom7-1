<?php

function users()
{
    $sql = " select * from users where vaitro = 0";
    $users = executeQuery($sql, true);
    admin_render(
        'users/users.php', compact('users')
    );
}

function staff()
{
    $sql = " select * from users where vaitro = 1 ";
    $staff = executeQuery($sql, true);
    admin_render(
        'users/staff.php', compact('staff')
    );
}

function edit_staff($id)
{
    $sql = " select * from users where id = $id ";
    $staff = executeQuery($sql, true);
    admin_render(
        'users/edit.php', compact('staff')
    );
}


function edit_user($id)
{
    $sqlQuery = "select * from users where id = $id";
    $user = executeQuery($sqlQuery, true);
    client_render('users/edit.php', compact('user'));
}
function delete_user_one($dellid)
{
    $sqlQuery = "delete from users where id = $dellid";
    executeQuery($sqlQuery, true);
    // echo header("refresh:0; url = $_SERVER[HTTP_REFERER]");
    // exit();
}

function delete_user($dellid)
{
    delAll('users', 'id', explode(',', $dellid));
    echo "Xóa các mục đã chọn thành công";
    // echo header("refresh:0; url = $_SERVER[HTTP_REFERER]");
    // exit();
}

function edit($id, $vaitro)
{
    $sqlQuery = "Update users set vaitro = '$vaitro' where id = $id";
    executeQuery($sqlQuery, true);
    echo "cap nhat thah cong";
    // echo header("refresh:2; url = $_SERVER[HTTP_REFERER]");
    // exit();
}
function Count_users($vaitro)
 {
    $sqlQuery = "select count(*) from users where vaitro = $vaitro";
    $total = executeQuery($sqlQuery, true);
    return $total;
 }
