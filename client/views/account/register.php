<style>
    .form {
        max-width: 1400px;
        margin: auto;
        background-color: #f8f8f8;
    }

    form {
        width: 500px;
        margin: 0 auto;
        margin-top: 20px;
        padding-top: 50px;
        padding-bottom: 150px;
    }

    h3 {
        margin-bottom: 70px;
        text-align: center;
        padding-top: 50px;
        font-size: 24px;
        font-weight: bold;
        color: #729a35;
    }

    .a {
        margin-bottom: 20px;
    }

    .a div {
        font-size: 19px;
        margin-bottom: 5px;
        font-weight: bold;

    }

    .a input {
        width: 500px;
        height: 40px;
    }

    .check {
        margin-top: -10px;
    }

    .check label {
        font-weight: bold;
    }

    .choose {
        display: flex;
        justify-content: space-between;
        margin-top: 10px;
    }

    .dot {
        width: 100%;
        height: 1px;
        background-color: #729a35;
        margin: auto;
        margin-top: 5px;
        margin-bottom: 5px;
    }

    .button {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: auto;
        width: 120px;
        height: 45px;
        margin-top: 15px;
        background-color: #729a35;
        border: 0px;
        color: #fff;
        font-weight: bold;
        font-size: 15px;
    }
    span{
        color: blue;
    }
    span1{
        color: red;
    }
</style>
    <div class="form">
    <h3>Đăng Ký tài khoản để trở thành thành viên của Xiao Haha</h3>
        <form action="" method="post">
        <div class="a">
            <div> <label for="">Email <span1>(*)</span1> </label> </div>
            <input type="email" name="email" placeholder="email">
        </div>
        <div class="a">
            <div> <label for="">Mật Khấu <span1>(*)</span1> </label> </div>
            <input type="text" name="password" placeholder="Mật Khẩu">
        </div>
        <div class="a">
            <div> <label for="">Họ Và Tên <span1>(*)</span1> </label> </div>
            <input type="text" name="name" placeholder="Họ và Tên">
        </div>
        <div class="choose">
            <div>
                Quên mật khẩu?bấm <a href=""><span>vào đây</span></a>
            </div>
        </div>

        <button class="button" name="damg-ky" type="submit">Đăng Ký</button>
        </form>
    </div>