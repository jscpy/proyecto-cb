function permite(elEvento, permitidos) {
  
  // Variables que definen los caracteres permitidos
  var teclas_especiales = [8, 37, 39, 46];
  var caracteres = " abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
  var numeros = "0123456789";
  var guion = " -";
  var numeros_caracteres = numeros + caracteres;
  var todos = numeros + caracteres + guion;

  switch(permitidos) {
    case "num":
      permitidos = numeros;
      break;
    case "car":
      permitidos = caracteres;
      break;
    case "car_num":
      permitidos = numeros_caracteres;
      break;
    case "full":
      permitidos = todos;
  }
 
  // Obtener la tecla pulsada 
  var evento = elEvento || window.event;
  var codigoCaracter = evento.charCode || evento.keyCode;
  var caracter = String.fromCharCode(codigoCaracter);
 
  // Comprobar si la tecla pulsada es alguna de las teclas especiales
  // (teclas de borrado y flechas horizontales)
  var tecla_especial = false;
  for(var i in teclas_especiales) {
    if(codigoCaracter == teclas_especiales[i]) {
      tecla_especial = true;
      break;
    }
  }
 
  // Comprobar si la tecla pulsada se encuentra en los caracteres permitidos
  // o si es una tecla especial
  return permitidos.indexOf(caracter) != -1 || tecla_especial;
}

function Proyeccion (){

  carrera  = document.getElementById('carrera').value;
  semestre = document.getElementById('semestre').value;

  if (carrera.length == 0 || semestre.length == 0) {

    alert('Eliga Correctamente la Carrera y el Semestre');

    return false;

  }

}

