<style>
    .formdk {
        width: 500px;
        height: 400px;
        border: 2px solid green;
        margin: 0px auto;
    }

    h1 {
        font-size: 35px;
        text-align: center;
        margin-bottom: 30px;
    }

    .formdk .row {
        width: 100%;
        padding: 5px 25px
    }

    .formdk .button {
        margin-left: 120px;
    }

    .formdk input {
        width: 100%;
        height: 30px;
        padding-left: 10px;
        margin-top: 10px;
    }

    .formdk .button button {
        height: 50px;
        width: 120px;
        padding: 10px 20px;
        margin-left: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        cursor: pointer;
        color: #333;
        background-color: #fff;
    }

    .formdk .button a {
        display: block;
        text-decoration: none;
        color: #333;
    }

    .formdk .button input {
        height: 50px;
        width: 120px;
        padding: 10px 20px;
        margin-left: 50px;
        border: 1px solid #ccc;
        border-radius: 5px;
        cursor: pointer;
        color: #333;
        background-color: #fff;
        float: left;
        margin-top: 25px;
        margin-bottom: 25px;
    }
</style>
<?php update_user(); ?>
<div class="boxcenter">
    <div class="left">
        <div class="content">
            <div class="title">
                <h1>Cập Nhật Tài Khoản</h1>
            </div>
            <div class="formdk">
                <form action="cap-nhat" method="post">
                    
                        <div class="row">
                            Email <br>
                            <input type="email" value="<?php //echo $rows['email'] ?>" name="email">
                        </div>
                        <div class="row">
                            Số điện thoại <br>
                            <input type="text" value="<?php //echo $rows['sdt'] ?>" name="sdt">
                        </div>
                        <div class="row">
                            Name <br>
                            <input type="text" value="<?php //echo $rows['ten_taikhoan'] ?>" name="ten_taikhoan">
                        </div>
                        <div class="button">
                            <input type="submit" name="capnhat" value="Cập Nhật">
                            
                        </div>
                    
                </form>
            </div>
        </div>
    </div>