<?php

    function renderAll() {
        $sqlQuery = "select * from feedback order by id DESC";
        $feedback = executeQuery($sqlQuery, true);
        admin_render('feedback/index.php', compact('feedback'), 'admin-assets/custom/admin-global.js');
    }


    function checkFeedB($id)
    {
        $sqlQuery = "select * from accounts where id = $id";
        $result = executeQuery($sqlQuery, true);
        return $result[0];
    }
