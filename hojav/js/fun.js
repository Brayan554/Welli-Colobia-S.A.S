function check() {
  document.getElementById('myCheck').checked = true;
}

function uncheck() {
  document.getElementById('myCheck').checked = false;
}

contenido_textarea = '';
num_caracteres_permitidos = 500;

function valida_longitud5() {
  num_caracteres = document.forms[0].estudios.value.length;

  if (num_caracteres > num_caracteres_permitidos) {
    document.forms[0].estudios.value = contenido_textarea;
  } else {
    contenido_textarea = document.forms[0].estudios.value;
  }

  if (num_caracteres >= num_caracteres_permitidos) {
    document.forms[0].caracteres.style.color = '#ff0000';
  } else {
    document.forms[0].caracteres.style.color = '#000000';
  }

  cuenta5();
}
function cuenta5() {
  document.forms[0].caracteres.value = document.forms[0].estudios.value.length;
}

contenido_textarea2 = '';
num_caracteres_permitidos2 = 500;

function valida_longitud21() {
  num_caracteres2 = document.forms[0].descripcionReferenciaLaboral.value.length;

  if (num_caracteres2 > num_caracteres_permitidos2) {
    document.forms[0].descripcionReferenciaLaboral.value = contenido_textarea2;
  } else {
    contenido_textarea2 = document.forms[0].descripcionReferenciaLaboral.value;
  }

  if (num_caracteres2 >= num_caracteres_permitidos2) {
    document.forms[0].caracteres2.style.color = '#ff0000';
  } else {
    document.forms[0].caracteres2.style.color = '#000000';
  }

  cuenta2();
}
function cuenta2() {
  document.forms[0].caracteres2.value =
    document.forms[0].descripcionReferenciaLaboral.value.length;
}

contenido_textarea3 = '';
num_caracteres_permitidos3 = 10;

function valida_longitud2() {
  num_caracteres3 =
    document.forms[0].NumeroIdentificacionCandidato.value.length;

  if (num_caracteres3 > num_caracteres_permitidos3) {
    document.forms[0].NumeroIdentificacionCandidato.value = contenido_textarea3;
  } else {
    contenido_textarea3 = document.forms[0].NumeroIdentificacionCandidato.value;
  }

  if (num_caracteres3 >= num_caracteres_permitidos3) {
    document.forms[0].caracteres3.style.color = '#ff0000';
  } else {
    document.forms[0].caracteres3.style.color = '#000000';
  }
}

contenido_textarea4 = '';
num_caracteres_permitidos4 = 20;

function valida_longitud3() {
  num_caracteres3 = document.forms[0].nombreCandidato.value.length;

  if (num_caracteres3 > num_caracteres_permitidos4) {
    document.forms[0].nombreCandidato.value = contenido_textarea4;
  } else {
    contenido_textarea4 = document.forms[0].nombreCandidato.value;
  }

  if (num_caracteres3 >= num_caracteres_permitidos4) {
    document.forms[0].caracteres4.style.color = '#ff0000';
  } else {
    document.forms[0].caracteres4.style.color = '#000000';
  }
}

contenido_textarea5 = '';
num_caracteres_permitidos5 = 20;

function valida_longitudApe() {
  num_caracteres5 = document.forms[0].apellidoCandidato.value.length;

  if (num_caracteres5 > num_caracteres_permitidos5) {
    document.forms[0].apellidoCandidato.value = contenido_textarea5;
  } else {
    contenido_textarea5 = document.forms[0].apellidoCandidato.value;
  }

  if (num_caracteres5 >= num_caracteres_permitidos5) {
    document.forms[0].caracteres4.style.color = '#ff0000';
  } else {
    document.forms[0].caracteres4.style.color = '#000000';
  }
}

contenido_textarea6 = '';
num_caracteres_permitidos6 = 100;

function valida_longitudDire() {
  num_caracteres6 = document.forms[0].direccionCandidato.value.length;

  if (num_caracteres6 > num_caracteres_permitidos6) {
    document.forms[0].direccionCandidato.value = contenido_textarea6;
  } else {
    contenido_textarea6 = document.forms[0].direccionCandidato.value;
  }

  if (num_caracteres6 >= num_caracteres_permitidos6) {
    document.forms[0].caracteres4.style.color = '#ff0000';
  } else {
    document.forms[0].caracteres4.style.color = '#000000';
  }
}

contenido_textarea7 = '';
num_caracteres_permitidos7 = 10;

function valida_longitudTel() {
  num_caracteres7 = document.forms[0].telefonoCandidato.value.length;

  if (num_caracteres7 > num_caracteres_permitidos7) {
    document.forms[0].telefonoCandidato.value = contenido_textarea7;
  } else {
    contenido_textarea7 = document.forms[0].telefonoCandidato.value;
  }

  if (num_caracteres7 >= num_caracteres_permitidos7) {
    document.forms[0].caracteres4.style.color = '#ff0000';
  } else {
    document.forms[0].caracteres4.style.color = '#000000';
  }
}

contenido_textarea8 = '';
num_caracteres_permitidos8 = 30;

function valida_longitudEma() {
  num_caracteres8 = document.forms[0].emailCandidato.value.length;

  if (num_caracteres8 > num_caracteres_permitidos8) {
    document.forms[0].emailCandidato.value = contenido_textarea8;
  } else {
    contenido_textarea8 = document.forms[0].emailCandidato.value;
  }

  if (num_caracteres8 >= num_caracteres_permitidos8) {
    document.forms[0].caracteres4.style.color = '#ff0000';
  } else {
    document.forms[0].caracteres4.style.color = '#000000';
  }
}

contenido_textarea9 = '';
num_caracteres_permitidos9 = 2;

function valida_longitudAno() {
  num_caracteres9 = document.forms[0].anosExperiencia.value.length;

  if (num_caracteres9 > num_caracteres_permitidos9) {
    document.forms[0].anosExperiencia.value = contenido_textarea9;
  } else {
    contenido_textarea9 = document.forms[0].anosExperiencia.value;
  }

  if (num_caracteres9 >= num_caracteres_permitidos9) {
    document.forms[0].caracteres4.style.color = '#ff0000';
  } else {
    document.forms[0].caracteres4.style.color = '#000000';
  }
}

contenido_textarea10 = '';
num_caracteres_permitidos10 = 10;

function valida_longitudCont() {
  num_caracteres9 = document.forms[0].contactoReferencia.value.length;

  if (num_caracteres9 > num_caracteres_permitidos10) {
    document.forms[0].contactoReferencia.value = contenido_textarea10;
  } else {
    contenido_textarea10 = document.forms[0].contactoReferencia.value;
  }

  if (num_caracteres9 >= num_caracteres_permitidos10) {
    document.forms[0].caracteres4.style.color = '#ff0000';
  } else {
    document.forms[0].caracteres4.style.color = '#000000';
  }
}

contenido_textarea10 = '';
num_caracteres_permitidos10 = 10;

function valida_longitudCont() {
  num_caracteres9 = document.forms[0].contactoReferencia.value.length;

  if (num_caracteres9 > num_caracteres_permitidos10) {
    document.forms[0].contactoReferencia.value = contenido_textarea10;
  } else {
    contenido_textarea10 = document.forms[0].contactoReferencia.value;
  }

  if (num_caracteres9 >= num_caracteres_permitidos10) {
    document.forms[0].caracteres4.style.color = '#ff0000';
  } else {
    document.forms[0].caracteres4.style.color = '#000000';
  }
}

contenido_textarea11 = '';
num_caracteres_permitidos11 = 100;

function valida_longitudDRefe() {
  num_caracteres9 = document.forms[0].direccionReferencia.value.length;

  if (num_caracteres9 > num_caracteres_permitidos11) {
    document.forms[0].direccionReferencia.value = contenido_textarea11;
  } else {
    contenido_textarea11 = document.forms[0].direccionReferencia.value;
  }

  if (num_caracteres9 >= num_caracteres_permitidos11) {
    document.forms[0].caracteres4.style.color = '#ff0000';
  } else {
    document.forms[0].caracteres4.style.color = '#000000';
  }
}

contenido_textarea12 = '';
num_caracteres_permitidos12 = 20;

function valida_longitudNRefe() {
  num_caracteres9 = document.forms[0].nombreReferencia.value.length;

  if (num_caracteres9 > num_caracteres_permitidos12) {
    document.forms[0].nombreReferencia.value = contenido_textarea12;
  } else {
    contenido_textarea12 = document.forms[0].nombreReferencia.value;
  }

  if (num_caracteres9 >= num_caracteres_permitidos12) {
    document.forms[0].caracteres4.style.color = '#ff0000';
  } else {
    document.forms[0].caracteres4.style.color = '#000000';
  }
}

contenido_textarea123 = '';
num_caracteres_permitidos123 = 500;

function valida_longitudNEstudiosSegundarios() {
  num_caracteres91 = document.forms[0].estudiosSegundarios.value.length;

  if (num_caracteres91 > num_caracteres_permitidos123) {
    document.forms[0].estudiosSegundarios.value = contenido_textarea123;
  } else {
    contenido_textarea123 = document.forms[0].estudiosSegundarios.value;
  }

  if (num_caracteres91 >= num_caracteres_permitidos123) {
    document.forms[0].caracteres4.style.color = '#ff0000';
  } else {
    document.forms[0].caracteres4.style.color = '#000000';
  }
}


contenido_textarea1234 = '';
num_caracteres_permitidos1234 = 500;

function valida_longitudNEstudiosSuperiores() {
  num_caracteres916 = document.forms[0].estudiosSuperiores.value.length;

  if (num_caracteres916 > num_caracteres_permitidos1234) {
    document.forms[0].estudiosSuperiores.value = contenido_textarea1234;
  } else {
    contenido_textarea1234 = document.forms[0].estudiosSuperiores.value;
  }

  if (num_caracteres916 >= num_caracteres_permitidos1234) {
    document.forms[0].caracteres4.style.color = '#ff0000';
  } else {
    document.forms[0].caracteres4.style.color = '#000000';
  }
}


contenido_textarea12345 = '';
num_caracteres_permitidos12345 = 2;

function valida_longitudNCantidadTitulos() {
  num_caracteres916 = document.forms[0].CantidadTitulos.value.length;

  if (num_caracteres916 > num_caracteres_permitidos12345) {
    document.forms[0].CantidadTitulos.value = contenido_textarea12345;
  } else {
    contenido_textarea12345 = document.forms[0].CantidadTitulos.value;
  }

  if (num_caracteres916 >= num_caracteres_permitidos12345) {
    document.forms[0].caracteres4.style.color = '#ff0000';
  } else {
    document.forms[0].caracteres4.style.color = '#000000';
  }
}
