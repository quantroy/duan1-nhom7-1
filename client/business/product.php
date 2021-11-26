<?php
// require './dao/system_dao.php';
function list_product()
{
    client_render('product/index.php');
}
function search_product()
{
    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // var_dump($keyword);
    $sql = "SELECT * FROM products where name like '%$keyword%' limit 9";
    $products = executeQuery($sql, true);
    client_render('product/index.php', compact('keyword', 'products'));
}
