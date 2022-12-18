//Revisar si conecta la consola
console.log('TodoOK')

//Validación del campo NOMBRE
function validarNombre(){
  const nombre = document.getElementById('inputNombre').value;
  console.log('Nombre ingresado: ' + nombre);  
  if ((nombre == "") || (nombre.length <= 3)){
    alert('Debe ingresar un nombre válido');
    document.getElementById('inputNombre').focus();
  }
}
btnResumen.addEventListener('click',validarNombre);

//Validación del campo APELLIDO
function validarApellido(){
  const apellido = document.getElementById('inputApellido').value;
  console.log('Apellido ingresado: ' + apellido);
  if ((apellido == "") || (apellido.length <= 3)){
    alert('Debe ingresar un apellido válido');
    document.getElementById('inputApellido').focus();
  }
}
btnResumen.addEventListener('click',validarApellido);

//Validación del campo EMAIL
function validarEmail(){
  const correo = document.getElementById('inputEmail').value;
  var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

  if (correo.match(validRegex)) {
    console.log('Email ingresado: ' + correo);
  } else {
    alert('Debe ingresar un correo electrónico válido');
    document.getElementById('inputEmail').focus();
  }
}
btnResumen.addEventListener('click',validarEmail);

//El campo CATEGORÍA no requiere verificación porque el formulario agrega uno por defecto
//El campo CANTIDAD es verificado dentro de la función que calcula el monto a pagar

//Calculo del precio de entradas según la categoría
function calcularTotal() {
    var cantEntradas;
    var total;
    var categoria;
    var entradaEstudiante;
    var entradaTrainee;
    var entradaJr;
    var general;
  
    cantEntradas = document.getElementById('inputCantidad').value;
    console.log('Cantidad de entradas: ' + cantEntradas);

    categoria = document.getElementById('inputCategoria').value;
    console.log('Categoría seleccionada: ' + categoria);
  
    entradaEstudiante = 200 - (200 * 80) / 100;
    entradaTrainee = 200 - (200 * 50) / 100;
    entradaJr = 200 - (200 * 15) / 100;
    general = 200;
  
    //Verifico si el valor ingresado es mayor a cero y si es un número
    if (cantEntradas > 0 && !isNaN(cantEntradas) && cantEntradas % 1 == 0) {
      //Selecciono el valor de entrada adecuado según la categoría seleccionada
      if (categoria == 'Estudiante') {
        total = entradaEstudiante * cantEntradas;
        document.getElementById('importeTotal').innerHTML =
          'Total a Pagar: \u0024' + total;
      } else if (categoria == 'Trainee') {
        total = entradaTrainee * cantEntradas;
        document.getElementById('importeTotal').innerHTML =
          'Total a Pagar: \u0024' + total;
      } else if (categoria == 'Junior') {
        total = entradaJr * cantEntradas;
        document.getElementById('importeTotal').innerHTML =
          'Total a Pagar: \u0024' + total;
      } else if (categoria == 'General') {
        total = general * cantEntradas;
        document.getElementById('importeTotal').innerHTML =
          'Total a Pagar: \u0024' + total;
      }
    } else {
      window.alert('Debe ingresar la cantidad de entradas en números enteros');
    }
}
btnResumen.addEventListener('click',calcularTotal);

function borrar() {
  document.getElementById('inputNombre').value = ' ';
  document.getElementById('inputApellido').value = ' ';
  document.getElementById('inputEmail').value = ' ';
  document.getElementById('inputCantidad').value = ' ';
  document.getElementById('inputCategoria').value = 'Estudiante';
  document.getElementById('importeTotal').innerHTML = 'Total a Pagar: \u0024';
}
btnBorrar.addEventListener('click',borrar);