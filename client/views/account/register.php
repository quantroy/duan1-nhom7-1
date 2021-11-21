<style>
    .formdk {
        text-align: center;
        color: #666666;
    }

    .form {
        min-width: 650px;
        display: inline-block;
        text-align: left;
        padding: 45px 120px;
    }

    .form-group {
        margin-bottom: 25px;
    }

    label {
        display: inline-block;
        max-width: 100%;
        margin-bottom: 5px;
        font-weight: 700;
    }

    .form-control {
        height: 48px;
        display: block;
        width: 100%;
        padding: 6px 12px;
        font-size: 14px;
        line-height: 1.42857143;
        color: black;
        background-color: #fff;
        background-image: none;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
        transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    }

    span1 {
        color: red;
    }

    .but input {
        height: 50px;
        width: 120px;
        padding: 10px 20px;
        margin-left: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        cursor: pointer;
        color: #fff;
        background-color: #0d713d;
        float: left;
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .but button {
        height: 50px;
        width: 120px;
        padding: 10px 20px;
        margin-left: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
        cursor: pointer;
        color: #fff;
        background-color: #0d713d;
        float: left;
        margin-top: 25px;
        margin-bottom: 25px;
    }

    .but {
        margin-left: 90px;
    }
</style>
<section class="featured spad" style="background:#efefef;">
    <div class="container" style="background:white;border-radius:5px;box-shadow: 0px 0px 5px 5px ##ebeaea;">
        <h3 style="color:#0d713d;font-weight:bold;text-align: center;font-size: 24px;margin-bottom: 50px;padding-top: 70px;">ĐĂNG KÝ ĐỂ TRỞ THÀNH THÀNH VIÊN CỦA XIAO HAHA</h3>
        <div class="formdk">
            <form class="form" action="" method="post">
                <div class="form-group">
                    <div> <label for="">Email <span1>(*)</span1> </label> </div>
                    <input class="form-control" type="email" name="email" id="" value placeholder="Email">
                </div>
                <div class="form-group">
                    <div> <label for="">Mật Khẩu <span1>(*)</span1> </label> </div>
                    <input class="form-control" type="password" name="password" value placeholder="Mật Khẩu">
                </div>
                <div class="form-group">
                    <div> <label for="">Họ Và Tên <span1>(*)</span1> </label> </div>
                    <input class="form-control" type="text" name="name" value placeholder="Họ Và Tên">
                </div>
                <div class="choose">
                    <div>
                        Quên mật khẩu?bấm <a href="" style="color: #0d713d; font-style: italic;"><strong>Vào đây</strong></a></a>
                    </div>
                </div>

                <div class="but">
                    <input class="button" type="submit" name="dang-ky" value="Đăng Ký">
                    <button class="button" type="reset">Nhập Lại</button>
                </div>
            </form>
        </div>
    </div>
</section>