var contador = 0;
function aupdateSec() {
  var fecha = new Date();
  document.getElementById("hora").innerText = fecha.getHours();
  document.getElementById("minutos").innerText = fecha.getMinutes();
  document.getElementById("segundos").innerText = fecha.getSeconds();
  contador++;
  if (contador <= 5) {
    setTimeout("aupdateSec()", 1000);
  } else {
    window.location.href = "index.php";
  }
}
document.addEventListener("DOMContentLoaded", aupdateSec);
