<?php
function posts_index()
{

    $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : "";
    // lấy danh sách danh mục
    $sql = "SELECT * from posts where title like '%$keyword%'";
    $posts = executeQuery($sql, true);
    $keyword = '';
    // hiển thị view
    admin_render('posts/index.php', compact('posts', 'keyword'), 'admin-assets/custom/admin-global.js');
}
function posts_remove()
{
    $id = $_GET['id'];
    $sql = "DELETE from posts where id = $id";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'bai-viet');
}
function posts_add_form()
{

    admin_render('posts/add-posts.php', [], 'admin-assets/custom/admin-global.js');
}
function posts_save_add()
{
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $create_at = date(" Y-m-d H:i:s ");

    $title = $_POST['title'];
    $created_by = $_POST['created_by'];
    $content1 = $_POST['content1'];
    $content2 = $_POST['content2'];
    $thumbnail1 = $_FILES['thumbnail1'];
    $thumbnail2 = $_FILES['thumbnail2'];
    $filename = "";
    $filename2 = "";

    $errors = "";
    $getProducts = "SELECT * FROM posts WHERE title = '$title'";
    $posts = executeQuery($getProducts, false);
    if (empty($title)) {
        $errors .= "title-err=Hãy nhập tên bài viết&";
    } else if ($title == $posts['title']) {
        $errors .= "title-err=Tiêu đề bài viết đã có vui lòng chọn tiêu đề khác&";
    }
    if(empty($created_by)){
        $errors .= "created_by-err=Hãy nhập tên người viết viết&";
    }
    if (empty($content1)) {
        $errors .= "content1-err=Hãy nhập nội dung phần văn bản thứ nhất&";
    }
    $errors = rtrim($errors, '&');
    if (strlen($errors) > 0) {
        header('location:' . ADMIN_URL . 'bai-viet/tao-moi' . '?' . $errors);
        die;
    }

    if ($thumbnail1['size'] > 0) {
        $filename = uniqid() . '-' . $thumbnail1['name'];
        move_uploaded_file($thumbnail1['tmp_name'], './public/uploads/' . $filename);
    }
    if ($thumbnail2['size'] > 0) {
        $filename2 = uniqid() . '-' . $thumbnail2['name'];
        move_uploaded_file($thumbnail2['tmp_name'], './public/uploads/' . $filename2);
    }

    $sql = "INSERT into posts (title, created_by, thumbnail1, thumbnail2 ,content1, content2, create_at) values ('$title','$created_by','$filename', '$filename2', '$content1', '$content2', '$create_at')";
    executeQuery($sql);
    header("location: " . ADMIN_URL . 'bai-viet');
}
function posts_fix()
{

    admin_render('posts/update-posts.php', [], 'admin-assets/custom/admin-global.js');
}

function posts_save_fix()
{

    $id = $_POST['id'];
    $getUserQuery = "select * from posts where id = $id";
    $posts = executeQuery($getUserQuery, false);
    if (!$posts) {
        header('location' . ADMIN_URL . 'bai-viet' . '?msg' . 'bài viết không tồn tại');
        die;
    }
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $update_at = date(" Y-m-d H:i:s ");

    $title = $_POST['title'];
    $created_by=$_POST['created_by'];
    $content1 = $_POST['content1'];
    $content2 = $_POST['content2'];
    $thumbnail1 = $_FILES['thumbnail1'];
    $thumbnail2 = $_FILES['thumbnail2'];
    $imageValue1 = $posts['thumbnail1'];
    $imageValue2 = $posts['thumbnail2'];

    if ($thumbnail1['size'] > 0) {
        $imageValue1 = uniqid() . '-' . $thumbnail1['name'];
        move_uploaded_file($thumbnail1['tmp_name'], './public/uploads/' . $imageValue1);
    }
    if ($thumbnail2['size'] > 0) {
        $imageValue2 = uniqid() . '-' . $thumbnail2['name'];
        move_uploaded_file($thumbnail2['tmp_name'], './public/uploads/' . $imageValue2);
    }
    $updateUserQuery = "update posts
                    set     title = '$title',
                            created_by ='$created_by',
                            thumbnail1 = '$imageValue1',
                            thumbnail2 = '$imageValue2',
                            content1 = '$content1',
                            content2 = '$content2',
                            update_at = '$update_at'
                    where id = $id";
    executeQuery($updateUserQuery);
    header('location:' . ADMIN_URL . 'bai-viet');
}

?>