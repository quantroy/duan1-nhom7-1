const swal2 = document.getElementsByClassName(
  "swal2-container swal2-top-end swal2-backdrop-hidden"
);
setTimeout(function () {
  swal2[0].style.display = "none";
  swal2[1].style.display = "none";
  swal2[2].style.display = "none";
}, 5000);

$(function () {
  var Toast = Swal.mixin({
    toast: true,
    position: "top-end",
    showConfirmButton: false,
    timer: 5000,
  });

  $(".swalDefaultSuccess").click(function () {
    Toast.fire({
      icon: "success",
      title: "Thêm vào giỏ hàng thành công, đến giỏ hàng thanh toán ngay nào",
    });
  });
});
