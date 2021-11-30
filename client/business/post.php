<?php 

function loadall_post(){
    $sql = "SELECT * FROM posts";
    $post = pdo_query($sql);
    return $post;
}
