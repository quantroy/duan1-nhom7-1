<style>
    .mb-3,
    .my-3 {
        margin-bottom: 1rem !important;
        width: 525px;
        margin-left: 670px;
    }
</style>
<form method="POST" action="dang-nhap">
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email</label>
        <input type="email" name="email" class="form-control" required id="exampleInputEmail1"  aria-describedby="emailHelp">

    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" required id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <input value="Đăng Nhập" style="margin-left: 676px;" type="submit" name="login" class="btn btn-primary">
</form>