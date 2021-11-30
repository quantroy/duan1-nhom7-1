const price = document.querySelectorAll("#price");
const quanTity = document.querySelectorAll("#quantity");
const total = document.querySelectorAll("#total");
const reduce = document.querySelectorAll("#reduce");
const augment = document.querySelectorAll("#augment");
const nameIp = document.getElementById("nameIp");
const phoneIp = document.getElementById("phoneIp");
const addressIp = document.getElementById("addressIp");
const noteIp = document.getElementById("noteIp");
const modalName = document.querySelectorAll("#modalName");
const modalPhone = document.querySelectorAll("#modalPhone");
const modalAddress = document.querySelectorAll("#modalAddress");
const modalNote = document.querySelectorAll("#modalNote");
const priceShip = document.getElementById("priceShip");
const totalcart = document.getElementById("totalCart");
const btn_points = document.getElementById("btn_points");
const render_points = document.getElementById("render_points");
const points = document.getElementById("points");
// tao nut tang giam so luong
function valide() {
  for (var i = 0; i < quanTity.length; i++) {
    if (quanTity[i].value > 49) {
      quanTity[i].value = 49;
    }
  }
}

for (var i = 0; i < total.length; i++) {
  toTal(i);
}

for (var i = 0; i < reduce.length; i++) {
  reduce[i].onclick = function () {
    index = this.getAttribute("index");
    if (quanTity[index].value >= 2) {
      quanTity[index].value = Number(quanTity[index].value) - 1;
      toTal(index);
    }
  };
}

for (var i = 0; i < augment.length; i++) {
  augment[i].onclick = function () {
    index = this.getAttribute("index");
    quanTity[index].value = Number(quanTity[index].value) + 1;
    toTal(index);
  };
}
function toTal(index) {
  valide();
  total[index].innerHTML =
    price[index].innerHTML.replace(",", "") * quanTity[index].value;
  total[index].innerHTML =
    total[index].innerHTML.replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "đ";
  totalCart();
}

function getAddRess(index) {
  nameIp.value = modalName[index].getAttribute("data");
  phoneIp.value = modalPhone[index].getAttribute("data");
  addressIp.value = modalAddress[index].getAttribute("data");
  noteIp.value = modalNote[index].getAttribute("data");
}

function totalCart() {
  var count = 0;
  for (var i = 0; i < total.length; i++) {
    var totalI = total[i].innerHTML.replace("đ", "");
    totalI = totalI.replace(",", "");
    count += Number(totalI);
  }
  var ship = priceShip.innerHTML.replace("đ", "");
  ship = ship.replace(",", "");
  totalcart.innerText = Number(count) + Number(ship);
  totalcart.innerText =
    totalcart.innerText.replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "đ";
  PointsDown();
}
totalCart();
function clickpoints() {
  render_points.innerHTML = "-" + points.innerHTML + "đ";
  var changerData = render_points.getAttribute('dataWait');
  render_points.setAttribute('data', changerData);
  PointsDown();
}

function PointsDown() {
  var result = totalcart.innerText.replace(",", "");
  result = result.replace("đ", "");
  totalcart.innerText = result - Number(render_points.getAttribute("data"));
  totalcart.innerText =
    totalcart.innerText.replace(/\B(?=(\d{3})+(?!\d))/g, ",") + "đ";
}
