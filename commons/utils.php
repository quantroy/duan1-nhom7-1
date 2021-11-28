<?php

const BASE_URL = "http://localhost:8080/duan1-nhom7/";
const ADMIN_URL = BASE_URL . 'cp-admin/';
const ADMIN_ASSET = BASE_URL . 'public/admin-assets/';
const CLIENT_ASSET = BASE_URL . 'public/client-assets/';

function dd()
{
    $data = func_get_args();
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}

function client_render($view, $data = [])
{
    extract($data);
    $view = './client/views/' . $view;
    include_once "./client/views/layouts/main.php";
}

function admin_render($view, $data = [], $jsFile = null)
{
    extract($data);
    $view = './admin/views/' . $view;
    include_once "./admin/views/layouts/main.php";
}

function delAll($nameTable, $key, $listDel)
{
    for ($i = 0; $i < count($listDel); $i++) {
        $query = "DELETE from $nameTable where $key = '$listDel[$i]'";
        executeQuery($query, true);
    }
}
