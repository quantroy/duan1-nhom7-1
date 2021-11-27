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
    $limit = 9;
    $total_page = ceil($total_records / $limit);  //tinh tong so trang
    $start = ($current_page - 1) * $limit;

    $sqls = "SELECT * FROM products where name like '%$keyword%'  limit $start, $limit";

    $products = executeQuery($sqls, true);
    client_render('product/index.php', compact('products', 'total_records', 'current_page', 'total_page'));

    // dd($total_page);
}
