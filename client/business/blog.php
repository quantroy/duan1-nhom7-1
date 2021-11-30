<?php


function blog()
{
    client_render('blog/index.php');
}
function loadall_blog()
{
    $sql = "SELECT * FROM posts";
    $post = executeQuery($sql, true);
    return $post;
}
