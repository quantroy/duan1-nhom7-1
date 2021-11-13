<?php
require_once './model/system_dao.php';
function home()
{
    $sqlQuery = "select * from products";
    $products = pdo_query($sqlQuery);
    client_render('homepage/index.php', compact('products'));
}
