<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&family=Mochiy+Pop+P+One&family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@300;500&display=swap" rel="stylesheet">
</head>
<style>
    body{
    width: 100%;
    margin: 0px auto;
    font-family: 'Roboto Slab', serif;
}
.banner{
    width: 100%;
}
.banner img{
    height: -15%;
    width: 1519px;
    height: 700px;
}
.banner h2{
    color:#F3C831;
    text-align: center;
    margin-top: -50px;
}
.boxcenter{
    width: 70%;
    margin: 0px auto;
    margin-top: 50px;
    display: flex;
    flex-direction: row;  
    justify-content: space-between;
}
.left{
    width: 30%;
}
.left h1{
    color: #F3C831;
}
.left .top a{
    text-decoration:none;
    color:black;
    line-height:20px;
}
.left .top{
    height:455px;
}
.left .bot{
    height:400px;
}
.left .bot a{
    text-decoration: none;
    color: black;
    margin-right: 32px;
    line-height: 35px;
}
.right{
    width: 65%;
    margin-left: 5%;
}
.right h1{
    margin-left: 25px;
}
.right .top{
    width: 93%;
    background-color:rgb(217 217 217);
    margin: 0px auto;
}
.right .top img{
    width: 100%;
}
.right .top .text h3{
    color: black;
    margin-left: 50px;
}
.right .top .text h4{
    color: black;
    margin-left: 50px;
}
.right .top .text button{
    width: 100px;
    height: 40px;
    background-color: #F3C831;
    margin-left: 50px;
    margin-bottom: 20px;
    border: 1px solid #F3C831;
}
.right .bot {
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    margin-top: 60px;
}
.right .bot .row{
    width: 45%;
    margin-left: 23px;
    background-color:rgb(217 217 217);
    margin-bottom: 30px;
}
.right .bot .row img{
    width: 100%;
    height:170px;
}
.right .bot .text h3{
    color: black;
    margin-left: 30px;
    font-size: 15px;
}
.right .bot .text h4{
    color: black;
    margin-left: 35px;
    font-size: 12px;
    line-height: 5px;
}
.right .bot .text button{
    width: 100px;
    height: 40px;
    background-color: #F3C831;
    margin-left: 30px;
    margin-bottom: 20px;
    border: 1px solid #F3C831;
}
.number{
    margin-left:640px;
}
.number ul{
    float: left;
}
.number ul li{
    width: 10px;
    height: 20px;
    float: left;
    list-style: none;
    padding: 0px 10px 10px;
    line-height: 30px;
}
.number ul li:hover{
    cursor: pointer;
    background-color: #F3C831;
}
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
.fixed{
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
        <img src="images/banner.jpg" alt="">
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