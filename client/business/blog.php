<?php


function blog()
{
    client_render('blog/index.php');
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
function loadall_cate_post()
{
    $sql = "SELECT * FROM cate_post";
    $cate_posts = executeQuery($sql, true);
    return $cate_posts;
}
function load_post_by_cate($cate_post = 0)
{
    $sql = "SELECT * FROM posts WHERE cate_post = '$cate_post'";
    $cate_post = executeQuery($sql, true);
    client_render('blog/index.php', compact('cate_post'));
}
