<?php
function myCart($ma_kh)
{
    $sqlQuery = "select * from cart where userId = $ma_kh";
    $carts = executeQuery($sqlQuery, true);
    client_render('cart/index.php', compact('carts'), 'admin-assets/custom/admin-global.js');
}

function getNamePro($id) {
    $sqlQuery = "select * from products where id = $id";
    $productName = executeQuery($sqlQuery, true);
    return $productName[0]['name'];
}


function getImagePro($id) {
    $sqlQuery = "select * from products where id = $id";
    $productImage = executeQuery($sqlQuery, true);
    return $productImage[0]['thumbnail'];
}

function creat_cart($userId, $quantity, $size, $productID, $sugar, $ice, $topping, $priceProOpt)
{
    $sql = " INSERT into cart ( userId, quantity, product_size, product_id, sugar, ice, topping, priceProOpt ) values ('$userId', '$quantity', '$size', '$productID', '$sugar', '$ice', '$topping', '$priceProOpt') ";
    executeQuery($sql);
}
