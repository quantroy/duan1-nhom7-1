<?php
function myCart($ma_kh)
{
    $sqlQuery = "select * from cart where userId = $ma_kh";
    $carts = executeQuery($sqlQuery, true);
    client_render('cart/index.php', compact('carts'), 'admin-assets/custom/admin-global.js');
}

function getNamePro($id)
{
    $sqlQuery = "select * from products where id = $id";
    $productName = executeQuery($sqlQuery, true);
    return $productName[0]['name'];
}


function getImagePro($id)
{
    $sqlQuery = "select * from products where id = $id";
    $productImage = executeQuery($sqlQuery, true);
    return $productImage[0]['thumbnail'];
}

function del($id)
{
    $sqlQuery = "DELETE from cart where id = $id";
    executeQuery($sqlQuery, true);
}

function creat_cart($userId, $quantity, $size, $productID, $sugar, $ice, $topping, $priceProOpt)
{
    $sql = " INSERT into cart ( userId, quantity, product_size, product_id, sugar, ice, topping, priceProOpt ) values ('$userId', '$quantity', '$size', '$productID', '$sugar', '$ice', '$topping', '$priceProOpt') ";
    executeQuery($sql);
}

function address($ma_kh)
{
    $sqlQuery = "select * from address where user_id = $ma_kh";
    $address = executeQuery($sqlQuery, true);
    return $address;
}

function priceShip()
{
    $sqlQuery = "select * from price_ship";
    $priceShip = executeQuery($sqlQuery, true);
    return $priceShip[0]['price_ship'];
}

function point($ma_kh)
{
    $sqlQuery = "select * from points where user_id = $ma_kh";
    $points = executeQuery($sqlQuery, true);
    return $points[0]['points'];
}
