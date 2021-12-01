<?php


function blog()
{
    client_render('blog/index.php');
}
function loadall_blog()
{
    $sql = "SELECT * FROM posts";
    $posts = executeQuery($sql, true);
    return $posts;
}
function loadone_blog($id)
{
    $sqls = "SELECT * FROM posts where id = '$id'";
    $post = executeQuery($sqls, true);
    client_render('blog/blog.php', compact('post'));
}
function loadall_blog_new()
{
    $sqls = "SELECT * FROM posts where 1 order by id desc limit 0,03 ";
    $post_new = executeQuery($sqls, true);
    return $post_new;
}
