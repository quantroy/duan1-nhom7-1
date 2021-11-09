<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="tintuc.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;500&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/logo.png" alt="logo" style="width:160px;">
        </a>
        <ul style=" font-size: 19px ;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" class="navbar-nav ">
          <li class="nav-item active">
            <a class="nav-link mr-4 " href="#">Trang chủ</a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link" href="#">Giới thiệu</a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link" href="#">Sản phẩm</a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link " href="#">Tin tức</a>
          </li>
          <li class="nav-item">
            <a class="nav-link mr-4" href="#">Liên hệ</a>
          </li>

        </ul>
        <form class=" form-inline" action="/action_page.php">
          <input class="form-control mr-sm-2" type="text" placeholder="tìm kiếm...">
          <button style="color:white;" class="btn btn-warning" type="submit">Đi</button>
        </form>
      </div>
    </nav>
    <!-- end header -->
    <div class="banner">
        <img src="images/banner1.jpg" alt="">
        <h2>Tin Tức</h2>
    </div>

    <div class="boxcenter">
        <div class="left">
            <div class="top">
                <h1>Danh Mục Tin Tức</h1>
                <a href="#">Tin Tức Mới</a> <br>
                <a href="#">Sự Kiện</a> <br>
                <a href="#">Khuyến Mại</a> <br>
            </div>
            <div class="bot">
                <h1>Khuyến Mại</h1>
                <a href="#">Khuyến Mại</a>
                <a href="#">Khuyến Mại</a>
                <a href="#">Khuyến Mại</a>
            </div>
        </div>

        <div class="right">
            <h1>Tin Tức</h1>
            <div class="top">
                
                <div class="tintuc">
                    <div class="img">
                    <img src="images/tt2.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Chương Trình Khuyến Mại</h3>
                        <h4>Danh sách cửa hàng áp dụng khuyến mại</h4>
                        <button>Xem Thêm</button>
                    </div>
                </div>
            </div>
            <div class="bot">
                <div class="row">
                    <div class="img">
                    <img src="images/tt1.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Hành Trình Thành Lập</h3>
                        <h4>Thành lập từ ngày 1/1/2001 ...</h4>
                        <button>Xem Thêm</button>
                    </div>
                </div>
                <div class="row">
                    <div class="img">
                    <img src="images/tt3.jpg" alt="">
                    </div>
                    <div class="text">
                        <h3>Mua 2 tặng 1</h3>
                        <h4>Áp dụng từ ngày 1/1/2001 ...</h4>
                        <button>Xem Thêm</button>
                    </div>
                </div>
                <div class="row">
                    <div class="img">
                    <img src="images/tt4.png" alt="">
                    </div>
                    <div class="text">
                        <h3>Đến xiao để thưởng thức trà sữa</h3>
                        <h4>Áp dụng từ ngày 1/1/2001 ...</h4>
                        <button>Xem Thêm</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="number">
            <ul>
                <li>1</li>
                <li>2</li>
                <li>...</li>
                <li>10</li>
                <li>>></li>
            </ul>

        </div>
        <div class="container-flui">
      <footer class="bg-dark mt-5">
        <div class="container">
          <div class="row">

            <div class="col">
              <img style="width: 100%;" src="images/logo1.png" alt="">
            </div>

            <div class="col">
              <h2>CONTACT</h2>
              <p><i class="fas fa-map-marker"></i> <a href="">Hà Đông, Hà Nội</a></p>
              <p> <i class="fas fa-envelope"></i> <a href="">xiaohaha78@.com</a></p>
              <p> <i class="fas fa-phone-square-alt"></i> <a href="">0387878787</a></p>
              <img style="width: 60%;" src="../img//bo_cong_thuong_grande.png" alt="">
            </div>

            <div class="col">
              <h2>CHÍNH SÁCH</h2>
              <div style="line-height: 35px;">
                <a href>Hình thức thanh toán</a> <br>
                <a href>Vận chuyển giao nhận</a> <br>
                <a href>Bảo mật thông tin</a> <br>
                <a href>Chính sách người dùng </a>
              </div>
              </p>
            </div>

            <div class="col">
              <h2>VỀ CHÚNG TÔI</h2>
              <div style="line-height: 35px;">
                <a href>Giới thiệu</a> <br>
                <a href>Tin tức</a> <br>
                <a href>Cửa hàng</a> <br>
              </div>
              </p>
            </div>
          </div>
          <div style="height: 2px ; background-color: white; width: 100%;" class="line mt-4"></div>

          <div class="row">
            <div class="col">
              <h5>XIAOHAHA - Trà Sữa Thả Ga</h5>
            </div>

            <div class="col">
              <p style="text-align: right;"> Copyrights 2021 by XIAOHAHA Tea.</p>
            </div>
          </div>
      </footer>
    </div>
</body>
</html>