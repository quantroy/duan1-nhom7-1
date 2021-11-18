<?php
include_once './../../../dao/system_dao.php';
  if(isset($_GET['id'])){
      $id = intval($_GET['id']);
          action("DELETE FROM tai_khoan WHERE id=$id");
          header("Location:http://localhost/duan1-nhom7/tai-khoan");
  }
?>