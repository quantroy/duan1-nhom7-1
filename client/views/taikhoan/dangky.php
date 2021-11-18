<div class="boxcenter">
            <div class="left">
               <div class="content">
               <div class="title">
                    <h1>Đăng Ký Tài Khoản</h1>
                </div>
                <div class="formdk">
                    <form action="dang-jhky" method="post" >
                    <div class="row">
                    Email <br>
                    <input type="email" name="email">
                    </div>
                    <div class="row">
                    Name <br>
                    <input type="text" name="ten_taikhoan">
                    </div>
                    <div class="row">
                    Password <br>
                    <input type="password" name="mat_khau">
                    </div>
                    <div class="row">
                    Số Điện Thoại <br>
                    <input type="text" name="sdt">
                    </div>
                    <div class="button">
                    <input type="submit" name="dang-ky" value="Đăng ký">
                    <input type="reset" value="Nhập Lại">
                    </div>
                </form>
                <h2 class="thongbao">
                <?php 
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }


                ?>
                </h2>
                </div>
               </div>
</div>