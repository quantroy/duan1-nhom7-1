<?php

function myOrder($ma_kh)
{
    $sqlQuery = "select * from oder where user_id = $ma_kh";
    $order = executeQuery($sqlQuery, true);
    client_render('order/index.php', compact('order'), 'admin-assets/custom/admin-global.js');
}

function OrderAll()
{
    $sqlQuery = "select * from oder";
    $order = executeQuery($sqlQuery, true);
    client_render('order/managerOder.php', compact('order'), 'admin-assets/custom/admin-global.js');
}

function queryOrderDetail($idOrder)
{
    $sqlQuery = "select * from oder_item where order_id = $idOrder";
    $orderDetail = executeQuery($sqlQuery, true);
    return $orderDetail;
}

function queryCartId($idOrderDetail)
{
    $arr = array();
    for ($i = 0; $i < count($idOrderDetail); $i++) {
        $num = $idOrderDetail[$i]['cart_id'];
        $id = (int)$num;
        $sqlQuery = "select * from cart where id = $id";
        $cart = executeQuery($sqlQuery, true);
        $arr[] = $cart[0]['id'];
    }
    return $arr;
}

function quertycart($id)
{
    $sqlQuery = "select * from cart where id = $id";
    $cart = executeQuery($sqlQuery, true);
    return $cart;
}

function namePro($id)
{
    $sqlQuery = "select * from products where id = $id";
    $productName = executeQuery($sqlQuery, true);
    return $productName[0]['name'];
}


function ImagePro($id)
{
    $sqlQuery = "select * from products where id = $id";
    $productImage = executeQuery($sqlQuery, true);
    return $productImage[0]['thumbnail'];
}


function Cartoption($id)
{
    $sqlQuery = "select * from products_options where cart_id = $id";
    $result = executeQuery($sqlQuery, true);
    return $result;
}

function optionName($listop)
{
    $count = "";
    for ($i = 0; $i < count($listop); $i++) {
        $id = $listop[$i]['option_id'];
        $id = (int)$id;
        $sqlQuery = "select * from toppings where id = $id";
        $result = executeQuery($sqlQuery, true);
        $name = $result[0]['name'];
        $count .=  $name . '. ';
    }
    return $count;
}

function price($id)
{
    $sqlQuery = "select * from products where id = $id";
    $result = executeQuery($sqlQuery, true);
    return $result[0]['price'];
}

function option($listop)
{
    $count = 0;
    for ($i = 0; $i < count($listop); $i++) {
        $id = $listop[$i]['option_id'];
        $id = (int)$id;
        $sqlQuery = "select * from toppings where id = $id";
        $result = executeQuery($sqlQuery, true);
        $price = $result[0]['price'];
        $count += $price;
    }
    return $count;
}

function priceOption($id)
{
    $sqlQuery = "select * from products_options where cart_id = $id";
    $result = executeQuery($sqlQuery, true);
    if (count($result) > 0) {
        $total = 0;
        for ($i = 0; $i < count($result); $i++) {
            $total += $result[$i]['price_topping'];
        }
        return $total;
    }
}

function delOrder($oderId)
{
    $sqlQuery = "select * from oder_item where order_id = $oderId";
    $result = executeQuery($sqlQuery, true);
    for ($i = 0; $i < count($result); $i++) {
        $num = $result[$i]['cart_id'];
        $id = (int)$num;
        $del = "delete from products_options where cart_id = $id";
        executeQuery($del);
        $backCart = "Update cart set status = 1 where id = $id";
        executeQuery($backCart);
        $deloderItem = "delete from oder_item where cart_id = $id";
        executeQuery($deloderItem);
    }
    $delOder = "delete from oder where id = $oderId";
    executeQuery($delOder);
}

function updatestatusOrder($id, $status)
{
    $sqlQuery = "Update oder set status = $status where id = $id";
    executeQuery($sqlQuery, false);

}
