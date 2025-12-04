const inputNama = document.getElementById("nama");
const errorNama = document.getElementById("error-nama");

const inputUmur = document.getElementById("umur");
const errorUmur = document.getElementById("error-umur");

const inputNim = document.getElementById("nim");

inputNama.addEventListener("blur", function () {
  const nilai = inputNama.value.trim();
  const polaHuruf = /^[a-zA-Z\s]+$/;

  if (nilai === "") {
    tampilkanError(inputNama, errorNama, "Nama tidak boleh kosong!");
  } else if (!polaHuruf.test(nilai)) {
    tampilkanError(inputNama, errorNama, "Nama hanya boleh berisi huruf!");
  } else {
    hapusError(inputNama, errorNama);
  }
});

inputUmur.addEventListener("blur", function () {
  const nilai = inputUmur.value.trim();
  const polaAngka = /^[0-9]+$/;

  if (nilai === "") {
    tampilkanError(inputUmur, errorUmur, "Umur tidak boleh kosong!");
  } else if (!polaAngka.test(nilai)) {
    tampilkanError(inputUmur, errorUmur, "Umur hanya boleh berisi angka!");
  } else {
    hapusError(inputUmur, errorUmur);
  }
});

inputNim.addEventListener("blur", function () {
  if (inputNim.value.length > 14) {
    alert("NIM terlalu panjang!");
  }
});

function tampilkanError(inputBox, errorText, pesan) {
  inputBox.classList.add("invalid");
  inputBox.classList.remove("valid");
  errorText.textContent = pesan;
  errorText.style.display = "block";
}

function hapusError(inputBox, errorText) {
  inputBox.classList.remove("invalid");
  inputBox.classList.add("valid");
  errorText.style.display = "none";
}
