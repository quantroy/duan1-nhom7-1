<?php
function home()
{
    client_render('homepage/index.php');
}
function user_edit()
{
    $sqlQuery = "select * from user";
    $products = pdo_query($sqlQuery);
    client_render('homepage/index.php', compact('products'));
}
