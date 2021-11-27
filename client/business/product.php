<?php
// require './dao/system_dao.php';
function list_product()
{
    client_render('product/index.php');
}
// function search_product()
// {
//     $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
//     // var_dump($keyword);
//     $sql = "SELECT * FROM products where name like '%$keyword%' limit 9";
//     $products = executeQuery($sql, true);
//     client_render('product/index.php', compact('keyword', 'products'));
// }
function product_index()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";

    $sql = "SELECT * FROM products where name like '%$keyword%'";
    $records = executeQuery($sql, true);
    $total_records = count($records);
    $current_page = isset($_GET['trang']) ? $_GET['trang'] : 1;
    $limit = 2;
    $total_page = ceil($total_records / $limit);  //tinh tong so trang
    $start = ($current_page - 1) * $limit;

    $sqls = "SELECT * FROM products where name like '%$keyword%'  limit $start, $limit";

    $products = executeQuery($sqls, true);
    client_render('product/index.php', compact('products', 'total_records', 'current_page', 'total_page'));

    // dd($total_page);
}
function loadall_sanpham($cate_id = 0)
{
    // $sql = "SELECT * FROM products where 1 ";
    // if ($cate_id > 0) {
    //     $sql .= " and cate_id LIKE '" . $cate_id . "'";
    // }
    // $sql .= " order by id desc";
    $sql = "SELECT * FROM products where cate_id = '$cate_id'";
    $records = executeQuery($sql, true);
    $total_records = count($records);
    $current_page = isset($_GET['trang']) ? $_GET['trang'] : 1;
    $limit = 1;
    $total_page = ceil($total_records / $limit);  //tinh tong so trang
    $start = ($current_page - 1) * $limit;

    $sqls = "SELECT * FROM products where cate_id = '$cate_id'  limit $start, $limit";
    $products = executeQuery($sqls, true);
    client_render('product/index.php', compact('products', 'total_records', 'current_page', 'total_page'));
}


function loadall_sanpham_top10()
{
    $sql = "SELECT * FROM products where 1 order by luotxem desc limit 0,7 ";
    $top10 = pdo_query($sql);
    return $top10;
}
function load_ten_dm($cate_id)
{
    $sql = "SELECT *  FROM categories where id=" . $cate_id;
    $dm = pdo_query_one($sql);
    extract($dm);
    return $name;
}
