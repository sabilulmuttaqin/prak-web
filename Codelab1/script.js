document.querySelector(".btn-submit").addEventListener("click", hitung);
document.querySelector(".btn-reset").addEventListener("click", reset);

function hitung() {
  var bil1 = parseFloat(document.getElementById("bil1").value);
  var bil2 = parseFloat(document.getElementById("bil2").value);
  var hasil = bil1 + bil2;
  document.getElementById("hasil").innerText = hasil;
}

function reset() {
  document.getElementById("bil1").value = "";
  document.getElementById("bil2").value = "";
  document.getElementById("hasil").innerText = "0";
}
