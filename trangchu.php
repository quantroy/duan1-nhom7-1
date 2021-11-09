<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Mochiy+Pop+P+One&family=Pacifico&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>
<style>
  .yellow {
    color: #cfa057;
  }

  .product_img:hover {
    transform: scale(1.2);
    transition: 1s;

  }

  .col_product {
    margin-top: 30px;
    height: 390px;
    width: 100%;
    box-shadow: rgba(0, 0, 0, 0.4) 0px 0px 5px;
  }

  .row_product {
    flex-wrap: wrap;
    transition: 0.5s;
    margin-top: 20px;
    width: 100%;
    display: flex;
    justify-content: space-between;
  }

  .pride {
    width: 100%;
    display: flex;
    justify-content: space-around;
  }

  .pride2 {
    margin-top: 0px;
    transition: 0.5s;
    padding-bottom: 5px;
    display: flex;
    justify-content: space-around;

  }

  .col_product {
    width: 23%;
    cursor: pointer;
  }

  #pride {
    background-color: #EEEEEE;
    height: 85px;
    overflow: hidden;
  }

  .col_product:hover #pride {
    height: 400px;
    transition: 0.5s;
    height: 136px;
  }

  .boxtext {
    background-color: #EEEEEE;
    padding: 10px;

  }

  .fixed {
    z-index: 1000;
    width: 100%;
    top: 0px;
    position: fixed;
  }

  .box-pig:hover {
    cursor: pointer;
    box-shadow: rgba(0, 0, 0, 0.4) 0px 0px 5px;

  }

  .box-small {
    display: flex;
    justify-content: space-between;
  }

  .box-small:hover {
    box-shadow: rgba(0, 0, 0, 0.4) 0px 0px 5px;
  }

  footer {
    color: white;
    padding-top: 30px;
    width: 100%;
  }

  footer a {
    color: white;
    text-decoration: none;
  }

  footer a:hover {
    color: white;
  }

  h2 {
    color: #d2a351;
  }
</style>

<body>
  <div class="container-fluid">
    <!-- header -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="images/logo.png" alt="logo" style="width:160px;">
        </a>
        <ul style=" font-size: 19px ;font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;" class="navbar-nav ">
          <li class="nav-item active">
            <a class="nav-link mr-4 " href="trangchu.php">Trang chủ</a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link" href="#">Giới thiệu</a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link" href="#">Sản phẩm</a>
          </li>
          <li class="nav-item mr-4">
            <a class="nav-link " href="tintuc.php">Tin tức</a>
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

    <!-- banner -->
    <img style="width: 100%;" src="../img//mua2tang1.png" alt="">

    <div class="container">
      <!-- title -->
      <h5 style="width: 100% ; text-align: center; " class="yellow">XIAOHAHA MENU</h5>
      <h3 class="mt-4" style="width: 100% ; text-align: center;font-family: 'Alfa Slab One', cursive;font-family: 'Mochiy Pop P One', sans-serif;font-family: 'Pacifico', cursive;">SẢN PHẨM NỔI BẬT</h1>
        <div style="width: 100%;text-align: center; ">
          <img src="../img/sao.png"></img>
        </div>
        <!-- end title  -->

        <!-- star product -->
        <div class="row_product">
          <!--  -->
          <div class="col_product ">
            <div style="overflow: hidden;">
              <img class="product_img" style="width: 100%;" src="../img/choco-creamcake.png" alt="">
            </div>
            <!-- img product -->
            <div style="padding-top: 20px;" id="pride">
              <div style="width: 100%;text-align: center; ">
                <h5>Tiger sugarar</h5>
              </div>
              <div class="pride">
                <p style="color: red; font-weight: bold;">29.000d</p>
                <del>39.000d</del>
              </div>
              <div style="width: 100%;" class="pride2">
                <button type="button" class="btn btn-warning">Đặt hàng</button>
                <button type="button" class="btn btn-success">Chi tiết</button>
              </div>
            </div>
          </div>
          <!--  -->
          <div class="col_product ">
            <div style="overflow: hidden;">
              <img class="product_img" style="width: 100%;" src="../img/choco-creamcake.png" alt="">
            </div>
            <!-- img product -->
            <div style="padding-top: 20px;" id="pride">
              <div style="width: 100%;text-align: center; ">
                <h5>Tiger sugarar</h5>
              </div>
              <div class="pride">
                <p style="color: red; font-weight: bold;">29.000d</p>
                <del>39.000d</del>
              </div>
              <div style="width: 100%;" class="pride2">
                <button type="button" class="btn btn-warning">Đặt hàng</button>
                <button type="button" class="btn btn-success">Chi tiết</button>
              </div>
            </div>
          </div>

          <div class="col_product ">
            <div style="overflow: hidden;">
              <img class="product_img" style="width: 100%;" src="../img/choco-creamcake.png" alt="">
            </div>
            <!-- img product -->
            <div style="padding-top: 20px;" id="pride">
              <div style="width: 100%;text-align: center; ">
                <h5>Tiger sugarar</h5>
              </div>
              <div class="pride">
                <p style="color: red; font-weight: bold;">29.000d</p>
                <del>39.000d</del>
              </div>
              <div style="width: 100%;" class="pride2">
                <button type="button" class="btn btn-warning">Đặt hàng</button>
                <button type="button" class="btn btn-success">Chi tiết</button>
              </div>
            </div>
          </div>

          <div class="col_product ">
            <div style="overflow: hidden;">
              <img class="product_img" style="width: 100%;" src="../img/choco-creamcake.png" alt="">
            </div>
            <!-- img product -->
            <div style="padding-top: 20px;" id="pride">
              <div style="width: 100%;text-align: center; ">
                <h5>Tiger sugarar</h5>
              </div>
              <div class="pride">
                <p style="color: red; font-weight: bold;">29.000d</p>
                <del>39.000d</del>
              </div>
              <div style="width: 100%;" class="pride2">
                <button type="button" class="btn btn-warning">Đặt hàng</button>
                <button type="button" class="btn btn-success">Chi tiết</button>
              </div>
            </div>
          </div>

          <div class="col_product ">
            <div style="overflow: hidden;">
              <img class="product_img" style="width: 100%;" src="../img/choco-creamcake.png" alt="">
            </div>
            <!-- img product -->
            <div style="padding-top: 20px;" id="pride">
              <div style="width: 100%;text-align: center; ">
                <h5>Tiger sugarar</h5>
              </div>
              <div class="pride">
                <p style="color: red; font-weight: bold;">29.000d</p>
                <del>39.000d</del>
              </div>
              <div style="width: 100%;" class="pride2">
                <button type="button" class="btn btn-warning">Đặt hàng</button>
                <button type="button" class="btn btn-success">Chi tiết</button>
              </div>
            </div>
          </div>

          <div class="col_product ">
            <div style="overflow: hidden;">
              <img class="product_img" style="width: 100%;" src="../img/choco-creamcake.png" alt="">
            </div>
            <!-- img product -->
            <div style="padding-top: 20px;" id="pride">
              <div style="width: 100%;text-align: center; ">
                <h5>Tiger sugarar</h5>
              </div>
              <div class="pride">
                <p style="color: red; font-weight: bold;">29.000d</p>
                <del>39.000d</del>
              </div>
              <div style="width: 100%;" class="pride2">
                <button type="button" class="btn btn-warning">Đặt hàng</button>
                <button type="button" class="btn btn-success">Chi tiết</button>
              </div>
            </div>
          </div>

          <div class="col_product ">
            <div style="overflow: hidden;">
              <img class="product_img" style="width: 100%;" src="../img/choco-creamcake.png" alt="">
            </div>
            <!-- img product -->
            <div style="padding-top: 20px;" id="pride">
              <div style="width: 100%;text-align: center; ">
                <h5>Tiger sugarar</h5>
              </div>
              <div class="pride">
                <p style="color: red; font-weight: bold;">29.000d</p>
                <del>39.000d</del>
              </div>
              <div style="width: 100%;" class="pride2">
                <button type="button" class="btn btn-warning">Đặt hàng</button>
                <button type="button" class="btn btn-success">Chi tiết</button>
              </div>
            </div>
          </div>

          <div class="col_product ">
            <div style="overflow: hidden;">
              <img class="product_img" style="width: 100%;" src="../img/choco-creamcake.png" alt="">
            </div>
            <!-- img product -->
            <div style="padding-top: 20px;" id="pride">
              <div style="width: 100%;text-align: center; ">
                <h5>Tiger sugarar</h5>
              </div>
              <div class="pride">
                <p style="color: red; font-weight: bold;">29.000d</p>
                <del>39.000d</del>
              </div>
              <div style="width: 100%;" class="pride2">
                <button type="button" class="btn btn-warning">Đặt hàng</button>
                <button type="button" class="btn btn-success">Chi tiết</button>
              </div>
            </div>
          </div>

        </div>

        <div style="width: 100%; text-align: center;">
          <button style="color: white;" type="button" class="btn btn-warning mt-3"> XEM THÊM</button>
        </div>
        <!-- end product -->
        <!-- title -->
        <h5 style="width: 100% ; text-align: center; " class="yellow mt-5">TIN VÀ KHUYẾN MÃI</h5>
        <h3 class="mt-4" style="width: 100% ; text-align: center;font-family: 'Alfa Slab One', cursive;font-family: 'Mochiy Pop P One', sans-serif;font-family: 'Pacifico', cursive;">KHUYẾN MÃI HOT XIAOHAHA</h3>
        <div style="width: 100%;text-align: center; ">
          <img src="../img/sao.png"></img>
        </div>
        <!-- end title -->

        <!-- tintuc -->
        <div class="mt-4 row">
          <!-- pig -->
          <div class="col">
            <div class="box-pig">
              <img style="width: 100%;" src="../img/1434706993-224_12_hai-che.jpg" alt="">
              <div class="boxtext">
                <h5>Những khó khăn trong quá trình thu hoạch nông sản của XIAOHAHA</h5>
                <p>Bối cảnh thực phảm sạch có nguồn gốc tự nhiên thân thiện với môi trường trở thành xu hướng trong nghành kinh doanh dịch vụ ăn uống... </p>
                <button style="color: white;" type="button" class="btn btn-warning "> XEM THÊM</button>
              </div>
            </div>
          </div>
          <!-- end pig  -->

          <!-- small -->
          <div class="col">
            <div class="box-small">
              <div style="width: 40%;" class="img">
                <img style="width: 100%;" src="../img/01112021_Ruby-tặng-túi-tote_ZALO.png" alt="">
              </div>
              <h5 class="ml-2 p-2" style="width: 60%; ">XIAOHAHA Giờ vàng 10k mua sắm thả ga</h5>
            </div>

            <div class="box-small mt-3">
              <div style="width: 40%;" class="img">
                <img style="width: 100%;" src="../img/01112021_Ruby-tặng-túi-tote_ZALO.png" alt="">
              </div>
              <h5 class="ml-2 p-2" style="width: 60%; ">XIAOHAHA Giờ vàng 10k mua sắm thả ga</h5>
            </div>

            <div class="box-small mt-3">
              <div style="width: 40%;" class="img">
                <img style="width: 100%;" src="../img/01112021_Ruby-tặng-túi-tote_ZALO.png" alt="">
              </div>
              <h5 class="ml-2 p-2" style="width: 60%; ">XIAOHAHA Giờ vàng 10k mua sắm thả ga</h5>
            </div>

            <div class="box-small mt-3">
              <div style="width: 40%;" class="img">
                <img style="width: 100%;" src="../img/01112021_Ruby-tặng-túi-tote_ZALO.png" alt="">
              </div>
              <h5 class="ml-2 p-2" style="width: 60%; ">XIAOHAHA Giờ vàng 10k mua sắm thả ga</h5>
            </div>

            <div class="box-small mt-3">
              <div style="width: 40%;" class="img">
                <img style="width: 100%;" src="../img/01112021_Ruby-tặng-túi-tote_ZALO.png" alt="">
              </div>
              <h5 class="ml-2 p-2" style="width: 60%; ">XIAOHAHA Giờ vàng 10k mua sắm thả ga</h5>
            </div>
          </div>
          <!-- end small -->
        </div>
        <!-- end tin tuc -->

        <!-- footer -->
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
    <script>
      window.addEventListener("scroll", function(event) {
        var nav = document.getElementsByClassName("navbar");
        var scroll_y = this.scrollY;
        if (scroll_y >= 36) {
          nav[0].classList.add('fixed');
        } else {
          nav[0].classList.remove('fixed');
        }
      });
    </script>
</body>

</html>