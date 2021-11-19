<?php

const BASE_URL = "http://localhost:8080/duan1-nhom7/";
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

function admin_render($view, $data = [])
{
    extract($data);
    $view = './admin/views/' . $view;
    include_once "./admin/views/layouts/main.php";
}
//update tai khoan
function editusser($view, $data = [])
{
    extract($data);
    $view = './admin/views/' . $view;
    include_once "./admin/views/dashboard/user.php";
}
function edit_account($view, $data = [])
{
    extract($data);
    $view = './client/views/' . $view;
    include_once "./client/business/account.php";
}


function delAll($nameTable, $key, $listDel)
{
    for ($i = 0; $i < count($listDel); $i++) {
        $query = "DELETE from $nameTable where $key = '$listDel[$i]'";
        executeQuery($query, true);
    }
}

?>
<script>
    delList = [];

    function reLoad() {
        location.reload();
    }

    function reInput() {
        var inputs = document.querySelectorAll("input");
        for (var i = 0; i < inputs.length; i++) {
            if (inputs[i].attributes = "radio") {
                inputs[i].value = "";
            } else if (inputs[i].attributes = "radio") {
                inputs[i].checked = false;
            }
        }
    }

    function chooseAll() {
        var checkboxs = document.getElementsByName("checkbox[]");
        for (var i = 0; i < checkboxs.length; i++) {
            checkboxs[i].checked = true;
        }
    }

    function unchooseAll() {
        var checkboxs = document.getElementsByName("checkbox[]");
        for (var i = 0; i < checkboxs.length; i++) {
            checkboxs[i].checked = false;
        }
    }

    function checkbox() {
        var key = document.querySelectorAll(".key");
        var checkboxs = document.getElementsByName("checkbox[]");
        for (var i = 0; i < checkboxs.length; i++) {
            if (checkboxs[i].checked == true) {
                delList.push(key[i].innerHTML);
            }

        }

        function insertParam(key, value) {
            key = encodeURI(key);
            value = encodeURI(value);

            var kvp = document.location.search.substr(1).split('&');

            var i = kvp.length;
            var x;
            while (i--) {
                x = kvp[i].split('=');

                if (x[0] == key) {
                    x[1] = value;
                    kvp[i] = x.join('=');
                    break;
                }
            }

            if (i < 0) {
                kvp[kvp.length] = [key, value].join('=');
            }

            //this will reload the page, it's likely better to store this until finished
            document.location.search = kvp.join('&');
        }
        if (delList.length == 0) {
            alert("Chua co muc nao duoc chon");
        }
        insertParam('dels', delList);
    }

    function Param(key, value) {
        key = encodeURI(key);
        value = encodeURI(value);

        var kvp = document.location.search.substr(1).split('&');

        var i = kvp.length;
        var x;
        while (i--) {
            x = kvp[i].split('=');

            if (x[0] == key) {
                x[1] = value;
                kvp[i] = x.join('=');
                break;
            }
        }

        if (i < 0) {
            kvp[kvp.length] = [key, value].join('=');
        }

        //this will reload the page, it's likely better to store this until finished
        document.location.search = kvp.join('&');
    }
</script>