const btnSwitch = document.querySelector('#switch');

btnSwitch.addEventListener('click', () => {
  document.body.classList.toggle('dark');
  btnSwitch.classList.toggle('active');
});

function mueveReloj() {
  momentoActual = new Date();
  hora = momentoActual.getHours();
  minuto = momentoActual.getMinutes();
  segundo = momentoActual.getSeconds();

  horaImprimible = hora + ' : ' + minuto + ' : ' + segundo;

  document.form_reloj.reloj.value = horaImprimible;

  setTimeout('mueveReloj()', 1000);
}

iluminada = new Image(84, 34);
iluminada.src = 'assets/images/edit.png';
apagada = new Image(84, 34);
apagada.src = 'images/icon/welly.png';
