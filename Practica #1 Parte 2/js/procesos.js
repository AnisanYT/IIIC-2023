var contador = 0;
var jsonArray = document.getElementById("json").value;
var obtieneDatos = JSON.parse(jsonArray);
var boton = 0;
var win = 0;
var dadosNUmero = document
  .getElementById("dadosNumero")
  .getAttribute("data-value");
//var casteo = JSON.parse(jsonArray);
//var phpArray = eval("<?php echo json_encode($vectorAsociativo); ?>");
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

function actMonto() {
  var monto = document.getElementById("montocito").getAttribute("data-value");
  document.getElementById("monto").textContent = monto;
  montoComponent = document.getElementById("monto");
  //alert("El valor puesto es de: " + monto + "Y su tipo es de: " + typeof(monto))
  //alert("Vere si lo obtiene con textContent: " + montoComponent.textContent)
}

function resta() {
  var montoActual = document.getElementById("monto").textContent; //El monto lo disponible
  //alert("monto actual: " + montoActual);
  var montoApostado = document.getElementById("montoApostado").value;
  //alert("monto apostado: " + montoApostado);
  var resta = montoActual - montoApostado;
  //alert("la resta es de: "+resta)
  document.getElementById("monto").textContent = resta;
  document.getElementById("montoApostado").value = "";
}

function asignaDadoInit() {
  let numerodeDados = document
    .getElementById("dadosNumero")
    .getAttribute("data-value");
  if (parseInt(numerodeDados) === 2) {
    document.getElementById("1").innerHTML =
      '<img src="' + obtieneDatos[1] + '" heigth = "200px" width = "200px">';
    document.getElementById("2").innerHTML =
      '<img src="' + obtieneDatos[2] + '" heigth = "200px" width = "200px">';
    document.getElementById("emojiSad_Happy").innerHTML =
      '<img src= "img/interaccion/waitCat.jfif" heigth = "200px" width = "200px">';
  } else {
    document.getElementById("1").innerHTML =
      '<img src="' + obtieneDatos[1] + '" heigth = "200px" width = "200px">';
    document.getElementById("2").innerHTML =
      '<img src="' + obtieneDatos[2] + '" heigth = "200px" width = "200px">';
    document.getElementById("3").innerHTML =
      '<img src="' + obtieneDatos[6] + '" heigth = "200px" width = "200px">';
    document.getElementById("emojiSad_Happy").innerHTML =
      '<img src= "img/interaccion/waitCat.jfif" heigth = "200px" width = "200px">';
  }
}

function jugar() {
  var apostado = document.getElementById("montoApostado").value;

  var montoDisponible = document.getElementById("monto").textContent;


  imagenUno = document.getElementById("1");
  imagenDos = document.getElementById("2");
  imagenTres = document.getElementById("3");

  var aux = 0;
  if (apostado != ""  && apostado <= parseInt(montoDisponible) && boton != 0) {
    if (dadosNUmero == 2) {
      for (i = 0; i < dadosNUmero; i++) {
        var numeroRandom = Math.floor(Math.random() * (6 - 1) + 1);
        aux += numeroRandom;
        if (i == 0) {
          imagenUno.innerHTML =
            '<img src="' +
            obtieneDatos[numeroRandom] +
            '" heigth = "200px" width = "200px">';
        } else {
          imagenDos.innerHTML =
            '<img src="' +
            obtieneDatos[numeroRandom] +
            '" heigth = "200px" width = "200px">';
        }
      }
      if (boton == aux) {
        document.getElementById("emojiSad_Happy").innerHTML =
          '<img src= "img/interaccion/happyCat.webp" heigth = "200px" width = "200px">';
      } else {
        resta();
        document.getElementById("emojiSad_Happy").innerHTML =
          '<img src= "img/interaccion/cryCat.png" heigth = "200px" width = "200px">';
        document.getElementById("numeroSeleccionado").innerText = "";
        //alert("Apostaste " + boton + " Pero cayó " + aux);
        boton = 0;
        document.getElementById("montoApostado").focus();
        var comprobacion = document.getElementById("monto").value;
        if (comprobacion === 0) {
          alert(
            "Lo perdiste todo... No vuelvas a jugar!\n" +
              "Serás redireccionado a la página principal."
          );
          window.location.href = "index.php";
        }
      }
    }
  } else {
    alert(
      "Hmm, recuerda. No apuestas mayores del monto disponible y No dejes el espacio vacìo, ademas recuerda apostar un numero."
    );
  }
}

function saveNum(event) {
  boton = event.target.value;
  document.getElementById("numeroSeleccionado").innerText = boton;
}

document.addEventListener("DOMContentLoaded", actMonto);
document.addEventListener("DOMContentLoaded", asignaDadoInit);
