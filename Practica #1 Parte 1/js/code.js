function code(event) {
  event.preventDefault();
  var enlace = event.currentTarget;
  var value = enlace.getAttribute("data-value");
  window.location.href = "detalle.php?valor=" + value;
}
