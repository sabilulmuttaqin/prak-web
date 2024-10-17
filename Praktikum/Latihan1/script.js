const resultDisplay = document.getElementById("result");

let currentInput = "0";
let operator = "";
let angkaPertama = null;

function updateDisplay(value) {
  resultDisplay.textContent = isNaN(value)
    ? value
    : parseFloat(value)
        .toFixed(3)
        .replace(/\.?0+$/, "");
}

function handleNumberClick(angka) {
  currentInput = currentInput === "0" ? angka : currentInput + angka;
  updateDisplay(currentInput);
}

function handleOperator(op) {
  if (angkaPertama === null) {
    angkaPertama = parseFloat(currentInput);
  } else {
    angkaPertama = hitung(angkaPertama, parseFloat(currentInput), operator);
  }
  operator = op;
  currentInput = "0";
  updateDisplay(angkaPertama);
}

function hitung(a, b, op) {
  switch (op) {
    case "tambah":
      return a + b;
    case "kurang":
      return a - b;
    case "kali":
      return a * b;
    case "bagi":
      return a / b;
    case "pangkat":
      return Math.pow(a, b);
    case "modulus":
      return a % b;
    default:
      return b;
  }
}

function handleEqual() {
  if (operator && angkaPertama !== null) {
    currentInput = hitung(
      angkaPertama,
      parseFloat(currentInput),
      operator
    ).toString();
    updateDisplay(currentInput);
    angkaPertama = null;
    operator = "";
  }
}

function clearCalculator() {
  currentInput = "0";
  operator = "";
  angkaPertama = null;
  updateDisplay(currentInput);
}

function handleBackspace() {
  currentInput = currentInput.length > 1 ? currentInput.slice(0, -1) : "0";
  updateDisplay(currentInput);
}
