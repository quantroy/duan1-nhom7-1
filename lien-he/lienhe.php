<!DOCTYPE html>
<html lang="en">

<head>
  <title>Liên hệ</title>
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

  /* top */

  .banner {
    width: 100%;
    height: 470px;
  }

  /* dot */
  .dot {
    height: 1px;
    background-color: gray;
    margin-bottom: 20px;
  }

  .tittle {
    position: absolute;
    top: 350px;
    left: 100px;
  }

  .tittle h2 {
    color: #fff;
  }

  .tittle p {
    color: #fff;
    margin-top: 20px;
    font-size: 17px;
    word-spacing: 1px;
  }

  article {
    margin-left: 80px;
    width: 90%;
  }

  /* in */
  span {
    font-weight: bold;
  }

  .in {
    margin-top: 20px;
  }

  form div {
    display: flex;
    align-items: center;
    justify-content: space-between;
  }

  .a {
    width: 48%;
    margin-top: 10px;
  }

  input {
    border: 0px;
    border-bottom: 1px solid gray;
    padding-bottom: 5px;
  }

  select {
    width: 48%;
    border: 0px;
    border-bottom: 1px solid gray;
    padding-bottom: 5px;
  }

  .file {
    border: 0px;
  }

  label {
    font-weight: bold;
    font-size: 16px;
    margin-top: 10px;
  }

  .b {
    border: 0px;
    width: 180px;
    height: 55px;
    background-color: #343a40;
    color: #fff;
    font-weight: bold;
    font-size: 18px;
    margin-top: 10px;
  }

  .b:hover {
    background-color: #272b30;
  }
</style>

<body>
  <div class="container-fluid">
    <!-- header -->
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="./images/logo.png" alt="logo" style="width:120px;">
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

    <!-- banner -->
    <img class="banner" src="./images/in-lienhe.jpg" alt="anh">

    <div class="tittle">
      <h2>Liên hệ</h2>
      <p>
        Chúng tôi luôn chờ đợi mọi liên hệ của bạn
      </p>
    </div>
    <!-- end-banner -->

    <article>
      <div class="top">
        <div class="in">
          <p>
            Vui lòng điền vào biểu mẫu bên dưới để gửi lại phản hồi của bạn cho <span>Xiao Haha</span>
          </p>
        </div>
        <!-- dot -->
        <div class="dot"></div>
        <!-- dot -->
        <div class="out">
          <form action="" method="get">
            <div>
              <input class="a" type="text" placeholder="Họ và tên">
              <input class="a" type="text" placeholder="Email" required>
            </div>
            <div>
              <input class="a" type="text" placeholder="Số điện thoại">
              <div class="a">
                <select name="city" id="tinh-thanh">
                  <option value="0">Chọn tỉnh thành</option>
                  <option value="1">Hà Nội</option>
                  <option value="2">Hải Phòng</option>
                  <option value="3">Đà Nẵng</option>
                  <option value="4">TP. Hồ Chí Minh</option>
                </select>

                <select name="van-de" id="van-de">
                  <option value="0">Vấn đề phản hồi</option>
                  <option value="1">Than phiền</option>
                  <option value="2">Khen ngợi</option>
                  <option value="3">Cần lưu ý</option>
                  <option value="4">Vấn đề khác</option>
                </select>
              </div>
            </div>
            <!-- anh -->
            <label for="">Ảnh đính kèm</label>
            <br>
            <input type="file" class="file">
            <!-- end-anh -->

            <!-- text -->
            <br>
            <label for="">Nội dung phản hồi</label>
            <br>
            <textarea id="note" name="info" rows="8" cols="180" maxlength="1000"></textarea>

            <!-- end-text -->

            <!-- tt -->
            <br>
            <label for="">Thỏa thuận bảo mật thông tin</label>
            <p>
              1. Xiao Haha sẽ luôn giữ bí mật các thông tin của khách hàng và tuân thủ những quy định pháp luật về bảo mật thông tin có liên quan.
            </p>
            <p>
              2. Xiao Haha có thể tiết lộ thông tin cá nhân cho mục đích giải quyết khiếu nại, than phiền của khách hàng cho:
              <br>
              - Các bộ phận trực thuộc Xiao Haha tại Việt Nam.
              <br>
              - Bên thứ ba được ủy quyền chính thức từ Xiao Haha tại Việt Nam cho việc giải quyết các than phiền, khiếu nại mang tính chất nghiêm trọng.
            </p>
            <!-- end-tt -->

            <!-- ce -->
            <input type="checkbox" name="a"> <label for="">Tôi đồng ý với những quyết định trên của Xiao Haha</label>
            <!-- end-ce -->

            <!-- button -->
            <br>
            <button class="b" type="submit">Gửi phản hồi</button>

          </form>

        </div>

      </div>
    </article>

    <!-- footer -->
  </div>
  <div class="container-flui">
    <footer class="bg-dark mt-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <img style="width: 90%;" src="./images/logo1.png" alt="">
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