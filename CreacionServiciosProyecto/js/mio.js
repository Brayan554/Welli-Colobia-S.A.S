function moneda() {
  this.nombre;
  this.tipoDeCambio;
  this.mensaje = [
    'no hay dinero para ti ',
    'monto demasiado alto pase a nuestra sucursal',
    'el 9 es de buena suerta intenta otro',
  ];

  this.convertir = function (monto) {
    conversionResultado = monto * this.tipoDeCambio;

    var mensajeHtml;
    if (conversionResultado <= 0) {
      mensajeHtml = this.mensaje[0];
    } else if (monto == 9) {
      mensajeHtml = this.mensaje[2];
    } else if (monto >= 1000) {
      mensajeHtml = this.mensaje[1];
    } else {
      mensajeHtml =
        monto + ' ' + ' son  ' + conversionResultado + ' ' + this.nombre;
    }

    document.getElementById('resultadoDelCambio').innerText = mensajeHtml;
  };
}

var yen = new moneda();
yen.nombre = 'Pesos';
yen.tipoDeCambio = 36.24;

var sol = new moneda();
sol.nombre = 'Pesos';
sol.tipoDeCambio = 1069.37;

var dolar = new moneda();
dolar.nombre = 'Pesos';
dolar.tipoDeCambio = 3827;

var euros = new moneda();
euros.nombre = 'Pesos';
euros.tipoDeCambio = 4524.3;

function convertirMoneda(tipoDeMoneda) {
  let montoSeleccionado = document.getElementById('monto').value;
  if (tipoDeMoneda == 'yen') {
    yen.convertir(montoSeleccionado);
  } else if (tipoDeMoneda == 'sol') {
    sol.convertir(montoSeleccionado);
  } else if (tipoDeMoneda == 'dolar') {
    dolar.convertir(montoSeleccionado);
  } else if (tipoDeMoneda == 'euro') {
    euros.convertir(montoSeleccionado);
  }
}

document.querySelector('#total').addEventListener('click', () => {
  const cantidad = parseInt(document.querySelector('#cantidad').value);

  const op = parseInt(document.querySelector('#op').value);
  let r;
  let total;
  let a;

  if (op == '1' && cantidad > 0 && cantidad < 5) {
    r = 'No hay Descuento';
    a = cantidad * 2000000;
    total = a;
  } else if (op == '2') {
    r = cantidad * 2000000 * 0.2;
    total = cantidad * 2000000 - r;
    a = cantidad * 2000000;
  } else if (op == '3' && cantidad > 0 && cantidad < 5) {
    r = 'No hay Descuento';
    a = cantidad * 500000;
    total = a;
  } else if (op == '4') {
    r = cantidad * 500000 * 0.2;
    total = cantidad * 500000 - r;
    a = cantidad * 500000;
  } else if (op == '5' && cantidad > 0 && cantidad < 5) {
    r = 'No hay Descuento';
    a = cantidad * 1500000;
    total = a;
  } else if (op == '6') {
    r = cantidad * 1500000 * 0.2;
    total = cantidad * 1500000 - r;
    a = cantidad * 1500000;
  } else if (op == '7' && cantidad > 0 && cantidad < 5) {
    r = 'No hay Descuento';
    a = cantidad * 3000000;
    total = a;
  } else if (op == '8') {
    r = cantidad * 3000000 * 0.2;
    total = cantidad * 3000000 - r;
    a = cantidad * 3000000;
  }
  document.querySelector('#precio').innerHTML = a;
  document.querySelector('#totalT').innerHTML = total;
  document.querySelector('#totalr').innerHTML = r;
});
