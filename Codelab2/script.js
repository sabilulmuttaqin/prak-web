let validate = document.querySelector("#validasi");
validate.addEventListener("mouseover", function () {
  validasiForm();
});

function validasiForm() {
  var nama = document.getElementById("nama").value;
  var email = document.getElementById("email").value;
  var alamat = document.getElementById("alamat").value;

  if (nama === "" || email === "" || alamat === "") {
    alert("Semua data harus diisi.");
    return false;
  } else {
    alert("Pendaftaran berhasil!");
  }
}
