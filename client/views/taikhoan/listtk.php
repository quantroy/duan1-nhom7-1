<div class="title">
                <h1>Danh Sách Tài Khoản</h1>
            </div>

            <div class="content">
                <table class="table" style="text-align: center; margin: auto" border="1" cellspacing="7">
                    <tr>
                    <th></th>
                    <th>Mã Tài Khoản</th>
                    <th>Tên Đăng nhập</th>
                    <th>Mật Khẩu </th>
                    <th>Email</th>
                    <th>Địa Chỉ</th>
                    <th>Địện Thoại</th>
                    <th>Vai Trò</th>
                    <th></th>
                    </tr>
                     <?php 
                     foreach ($tai_khoan as $taikhoan){
                       extract($taikhoan);
                    echo '<tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>' .$ID. '</td>
                            <td>' .$ten_taikhoan. '</td>
                            <td>' .$mat_khau. '</td>
                            <td>' .$email. '</td>
                            <td>' .$sdt. '</td>

                        </tr>';
                  }
                  ?>
                </table>

                
                <div id="button">
                <button  class="btn" >Chọn tất cả</button>
                <button  class="btn" >Bỏ chọn tất cả</button>
                <button  class="btn" >Xóa các mục đã chọn</button>
                <a href="index.php?act=addtk"><button  class="btn" >Nhập thêm</button></a>
                </div>
                
       </div>     
