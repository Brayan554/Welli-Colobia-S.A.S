function validarArea() {
  let nombre, descripcion, recurso, expresion;

  nombre = document.getElementById('nombreArea').value;
  descripcion = document.getElementById('descripcionArea').value;
  recurso = document.getElementById('idRecursosHumanos').value;
  estado = document.getElementById('idEstados');

  expresion = /^[ñA-Za-z _]*[ñA-Za-z][ñA-Za-z _]*$/;

  if (nombre === '' || descripcion === '' || recurso === '' || estado === '') {
    alert('Seleccione y Complete Todos Los Campos');
    return false;
  } else if (nombre.length > 20) {
    alert('el Nombre de la Area no debe ser mayor a 20 letras');
    return false;
  } else if (descripcion.length > 20) {
    alert('la descripcion debe ser menor a 20 letras');
    return false;
  } else if (recurso.length > 20) {
    alert('el nombre Seleccionado debe ser menor a 30 letras ');
    return false;
  } else if (!expresion.test(nombre)) {
    alert('solo debe haber letras en el nombre');
    return false;
  } else if (estado.length > 20) {
    alert('el nombre del estado es muy largo');
    return false;
  }
}

function validarCandidato() {
  let NumeroIdentificacionCandidato,
    nombreCandidato,
    apellidoCandidato,
    direccionCandidato,
    telefonoCandidato,
    emailCandidato,
    anosExperiencia,
    descripcionReferenciaLaboral,
    contactoReferencia,
    direccionReferencia,
    nombreReferencia,
    estudios,
    iduser,
    expresionCandidato,
    expresionDireccion,
    expresionCorreo;

  NumeroIdentificacionCandidato = document.getElementById(
    'NumeroIdentificacionCandidato'
  ).value;
  nombreCandidato = document.getElementById('nombreCandidato').value;
  apellidoCandidato = document.getElementById('apellidoCandidato').value;
  direccionCandidato = document.getElementById('direccionCandidato').value;
  telefonoCandidato = document.getElementById('telefonoCandidato').value;
  emailCandidato = document.getElementById('emailCandidato').value;
  anosExperiencia = document.getElementById('anosExperiencia').value;
  descripcionReferenciaLaboral = document.getElementById(
    'descripcionReferenciaLaboral'
  ).value;
  contactoReferencia = document.getElementById('contactoReferencia').value;
  direccionReferencia = document.getElementById('direccionReferencia').value;
  nombreReferencia = document.getElementById('nombreReferencia').value;
  estudios = document.getElementById('estudios').value;
  iduser = document.getElementById('iduser').value;

  expresionCandidato = /^[ñA-Za-z _]*[ñA-Za-z][ñA-Za-z _]*$/;
  expresionDireccion = /\D\D\s\d\d\d\D\s\d\d\d\D\s\d\d/;

  expresionCorreo = /\w+@\w+\.+[a-z]/;

  if (
    NumeroIdentificacionCandidato === '' ||
    nombreCandidato === '' ||
    apellidoCandidato === '' ||
    direccionCandidato === '' ||
    telefonoCandidato === '' ||
    emailCandidato === '' ||
    anosExperiencia === '' ||
    descripcionReferenciaLaboral === '' ||
    contactoReferencia === '' ||
    direccionReferencia === '' ||
    nombreReferencia === '' ||
    estudios === '' ||
    iduser === ''
  ) {
    alert('Todos Los Campos deben estar Completos y seleccionados');
    return false;
  } else if (isNaN(NumeroIdentificacionCandidato)) {
    alert('Ingresar Solo Numeros en la Identificacion');
    return false;
  } else if (
    NumeroIdentificacionCandidato.length > 10 ||
    NumeroIdentificacionCandidato.length < 10
  ) {
    alert('El numero de la Idenrificacion debe tener 10 numeros Obligatorios');
    return false;
  } else if (!expresionCandidato.test(nombreCandidato)) {
    alert('El nombre solo debe tener letras');
    return false;
  } else if (nombreCandidato.length > 20) {
    alert('No debe Haber mas de 20 letras en el nombre');
    return false;
  } else if (!expresionCandidato.test(apellidoCandidato)) {
    alert('El apellido solo debe tener letras');
    return false;
  } else if (apellidoCandidato.length > 20) {
    alert('No Debe Haber mas de 20 letras en el apellido');
    return false;
  } else if (!expresionDireccion.test(direccionCandidato)) {
    alert('la direccion esta mal escrita ');
    return false;
  } else if (direccionCandidato.length > 25) {
    alert('la direccion debe ser menor a 25 letras');
    return false;
  } else if (isNaN(telefonoCandidato)) {
    alert('el Telefono debe ser solo  numeros');
    return false;
  } else if (telefonoCandidato.length != 10) {
    alert('el Telefono debe tener 10 numeros');
    return false;
  } else if (!expresionCorreo.test(emailCandidato)) {
    alert('el Correo Esta mal escrito');
    return false;
  } else if (emailCandidato.length > 30) {
    alert('el correo debe ser menor a 30 caracteres');
    return false;
  } else if (isNaN(anosExperiencia)) {
    alert('Ingresar solo numeros en años de experiencia');
    return false;
  } else if (anosExperiencia.length > 2) {
    alert('Debe ser maximo 2 numeros ingresados en años de experiencia');
    return false;
  } else if (descripcionReferenciaLaboral.length > 50) {
    alert('La descripcion debe tener menos de 50 caracteres de texto');
    return false;
  } else if (isNaN(contactoReferencia)) {
    alert('el celular de referencia laboral debe ser solo numeros');
    return false;
  } else if (contactoReferencia.length != 10) {
    alert('el celular de referencia laboral debe ser de  10 digitos');
    return false;
  } else if (!expresionDireccion.test(direccionReferencia)) {
    alert('la direccion de la referencia laboral esta mal escrita ');
    return false;
  } else if (direccionReferencia.length > 20) {
    alert('la direccion de referencia laboral debe ser menor a 20 caracteres');
    return false;
  } else if (!expresionCandidato.test(nombreReferencia)) {
    alert('el nombre de la referencia laboral debe ser solo texto');
    return false;
  } else if (nombreReferencia.length > 20) {
    alert('el nombre de la referencia laboral debe ser menor a 20 caracteres');
    return false;
  } else if (estudios.length > 50) {
    alert('estudios debe ser menos de 50 caracteres ingresados');
    return false;
  } else if (iduser.length > 30) {
    alert('el nombre es muy largo debe ser menor a 30 caracteres');
    return false;
  }
}

function validarEstado() {
  let nombreEstado, tipodeEstadoEstado, expresionEstado;

  nombreEstado = document.getElementById('nombreEstado').value;
  tipodeEstadoEstado = document.getElementById('idTipo').value;
  expresionEstado = /^[ñA-Za-z _]*[ñA-Za-z][ñA-Za-z _]*$/;

  if (nombreEstado === '' || tipodeEstadoEstado === '') {
    alert('selecciones y complete los campos');
    return false;
  } else if (!expresionEstado.test(nombreEstado)) {
    alert('el nombre debe ser solo letras');
    return false;
  } else if (nombreEstado.length > 20) {
    alert('el nombre debe ser menor a 20 caracteres');
    return false;
  } else if (tipodeEstadoEstado.length > 20) {
    alert('el nombre de tipo de estado debe ser menor a 20 caracteres');
    return false;
  }
}

function validarTipodeEstado() {
  let NombreTipodeEstado, expresionTipodeEstado;

  NombreTipodeEstado = document.getElementById('nombreTipo').value;
  expresionTipodeEstado = /^[ñA-Za-z _]*[ñA-Za-z][ñA-Za-z _]*$/;
  if (NombreTipodeEstado === '') {
    alert('Debe Completar El Campo');
    return false;
  } else if (!expresionTipodeEstado.test(NombreTipodeEstado)) {
    alert('El Nombre debe ser Solo letras');
    return false;
  } else if (NombreTipodeEstado.length > 20) {
    alert('El Nombre del Tipo de estado no debe ser mayor a 20 caracteres  ');
    return false;
  }
}

function validarCliente() {
  let identificacionCliente,
    NombreCliente,
    apellidoCliente,
    DireccionCliente,
    TelefonoCliente,
    emailCliente,
    UsuarioCliente,
    ExpresionCliente,
    expresionCorreoCliente,
    expresionDireccionCliente;

  identificacionCliente = document.getElementById('NumeroIdentificacionCliente')
    .value;
  NombreCliente = document.getElementById('nombreCliente').value;
  apellidoCliente = document.getElementById('apellidoCliente').value;
  DireccionCliente = document.getElementById('direccionCliente').value;
  TelefonoCliente = document.getElementById('telefonoCliente').value;
  emailCliente = document.getElementById('emailCliente').value;
  UsuarioCliente = document.getElementById('iduser').value;

  ExpresionCliente = /^[ñA-Za-z _]*[ñA-Za-z][ñA-Za-z]*$/;
  expresionCorreoCliente = /\w+@\w+\.+[a-z]/;
  expresionDireccionCliente = /\D\D\s\d\d\d\D\s\d\d\d\D\s\d\d/;

  if (
    identificacionCliente === '' ||
    NombreCliente === '' ||
    apellidoCliente === '' ||
    DireccionCliente === '' ||
    TelefonoCliente === '' ||
    emailCliente === '' ||
    UsuarioCliente === ''
  ) {
    alert('Ninguno de los campos puedes estar vacios ');
    return false;
  } else if (isNaN(identificacionCliente)) {
    alert('la identificacion debe ser solo numeros');
    return false;
  } else if (identificacionCliente.length != 10) {
    alert('la identificacion debe ser 10 numeros obligatorios');
    return false;
  } else if (!ExpresionCliente.test(NombreCliente)) {
    alert('El Nombre solo deben ser letras');
    return false;
  } else if (NombreCliente.length > 20) {
    alert('El Nombre esta muy largo , debe ser maximo 20 letras');
    return false;
  } else if (!ExpresionCliente.test(apellidoCliente)) {
    alert('el apellido solo debe ser letras ');
    return false;
  } else if (apellidoCliente.length > 20) {
    alert('el apellido debe ser menor a 20 letras ');
    return false;
  } else if (!expresionDireccionCliente.test(DireccionCliente)) {
    alert('la direccion esta mal escrita ');
    return false;
  } else if (DireccionCliente.length > 20) {
    alert('la direccion no debe ser mayor 20 caracteres');
    return false;
  } else if (isNaN(TelefonoCliente)) {
    alert('el telefono debe ser solo Numeros');
    return false;
  } else if (TelefonoCliente.length != 10) {
    alert('el Celular debe ser 10 digitos obligatorios');
    return false;
  } else if (!expresionCorreoCliente.test(emailCliente)) {
    alert('el email esta mas escrito');
    return false;
  } else if (emailCliente.length > 30) {
    alert('el email esta muy largo ingresa uno menor a 30 caracteres');
    return false;
  } else if (UsuarioCliente.length > 30) {
    alert('el nombre del usuario esta esta muy largo ');
    return;
  }
}

function validarRecurso() {
  let NumeroIdentificacionRecursosHumanos,
    nombreRecursosHumanos,
    ApellidoRecursosHumanos,
    emailRecursosHumanos,
    iduser,
    expresionCorreoRecurso,
    expresionRecurso;

  NumeroIdentificacionRecursosHumanos = document.getElementById(
    'NumeroIdentificacionRecursosHumanos'
  ).value;
  nombreRecursosHumanos = document.getElementById('nombreRecursosHumanos')
    .value;
  ApellidoRecursosHumanos = document.getElementById('ApellidoRecursosHumanos')
    .value;
  emailRecursosHumanos = document.getElementById('emailRecursosHumanos').value;
  iduser = document.getElementById('iduser').value;

  expresionRecurso = /^[ñA-Za-z _]*[ñA-Za-z][ñA-Za-z]*$/;
  expresionCorreoRecurso = /\w+@\w+\.+[a-z]/;

  if (
    NumeroIdentificacionRecursosHumanos === '' ||
    nombreRecursosHumanos === '' ||
    ApellidoRecursosHumanos === '' ||
    emailRecursosHumanos === '' ||
    iduser === ''
  ) {
    alert('Ninguno de Los Campos Debe Estar Vacios/Seleccionados ');
    return false;
  } else if (isNaN(NumeroIdentificacionRecursosHumanos)) {
    alert('El Numero de Identificacion De Ser Solo numeros');
    return false;
  } else if (NumeroIdentificacionRecursosHumanos.length != 10) {
    alert('deben ser 10 numeros obligatorios');
    return false;
  } else if (!expresionRecurso.test(nombreRecursosHumanos)) {
    alert('Solo debe Contener Letras el Nombre');
    return false;
  } else if (nombreRecursosHumanos.length > 20) {
    alert('el nombre debe ser menor a 20 carateres');
    return false;
  } else if (!expresionRecurso.test(ApellidoRecursosHumanos)) {
    alert('el apellido debe ser solo letras ');
    return false;
  } else if (ApellidoRecursosHumanos.length > 20) {
    alert('el apellido debe ser menor a 20 caracteres');
    return false;
  } else if (!expresionCorreoRecurso.test(emailRecursosHumanos)) {
    alert('el correo esta incorrecto ');
    return false;
  } else if (emailRecursosHumanos.length > 30) {
    alert('el correo esta muy largo , ingresa uno con 30 caracteres minimo');
    return false;
  } else if (iduser.length > 20) {
    alert('el usuariodebe tener menos de 20 caracteres de longitud');
    return false;
  }
}

function validarEmpleado() {
  let numeroIdentificacionEmpleado,
    nombreEmpleado,
    apellidoEmpleado,
    emailEmpleado,
    telefonoEmpleado,
    idAreaEmpleado,
    idUsuarioEmpleado,
    idRecursosHumanosEmpleado,
    ExpresionEmpleado,
    ExpresionCorreoEmpleado;

  numeroIdentificacionEmpleado = document.getElementById(
    'NumeroIdentificacionEmpleado'
  ).value;
  nombreEmpleado = document.getElementById('nombreEmpleado').value;
  apellidoEmpleado = document.getElementById('apellidoEmpleado').value;
  emailEmpleado = document.getElementById('emailEmpleado').value;
  telefonoEmpleado = document.getElementById('telefonoEmpleado').value;
  idAreaEmpleado = document.getElementById('idArea').value;
  idUsuarioEmpleado = document.getElementById('iduser').value;
  idRecursosHumanosEmpleado = document.getElementById('idRecursosHumanos')
    .value;
  ExpresionEmpleado = /^[ñA-Za-z _]*[ñA-Za-z][ñA-Za-z]*$/;
  ExpresionCorreoEmpleado = /\w+@\w+\.+[a-z]/;

  if (
    numeroIdentificacionEmpleado === '' ||
    nombreEmpleado === '' ||
    apellidoEmpleado === '' ||
    emailEmpleado === '' ||
    telefonoEmpleado === '' ||
    idAreaEmpleado === '' ||
    idUsuarioEmpleado === '' ||
    idRecursosHumanosEmpleado === ''
  ) {
    alert('los campos deben estar completos y seleccionados');
    return false;
  } else if (isNaN(numeroIdentificacionEmpleado)) {
    alert('la identificacion debe ser 10 Numeros Obligatorios');
    return false;
  } else if (numeroIdentificacionEmpleado.length != 10) {
    alert('la identificacion debe ser 10 Numeros Obligatorios');
    return false;
  } else if (!ExpresionEmpleado.test(nombreEmpleado)) {
    alert('El Nombre solo Debe llevar letras');
    return false;
  } else if (nombreEmpleado.length > 20) {
    alert('el nombre debe Ser menor a 20 caracteres');
    return false;
  } else if (!ExpresionEmpleado.test(apellidoEmpleado)) {
    alert('el Apellido debe ser solo letras');
    return false;
  } else if (apellidoEmpleado.length > 20) {
    alert('el apellido debe ser menor a 20 caracteres');
    return false;
  } else if (!ExpresionCorreoEmpleado.test(emailEmpleado)) {
    alert('el email esta mal escrito');
    return false;
  } else if (emailEmpleado.length > 30) {
    alert('el email es muy largo ');
    return false;
  } else if (isNaN(telefonoEmpleado)) {
    alert('el Celular debe ser un numero');
    return false;
  } else if (telefonoEmpleado.length != 10) {
    alert('el Celular debe tener 10 numeros Obligatorios');
    return false;
  } else if (idUsuarioEmpleado.length > 30) {
    alert('el Nombre del usuario es muy largo escoja otro ');
    return false;
  } else if (idAreaEmpleado.length > 20) {
    alert('el Nombre de la area debe ser menor a 20 caracteres');
  } else if (idRecursosHumanosEmpleado > 20) {
    alert('el nombre De Recursos Humanos es muy largo');
    return false;
  }
}

function validarServicio() {
  let nombreServicio,
    duracionServicio,
    costoServicio,
    novedadesServicio,
    idEmpleadoServicio,
    idClienteServicio,
    expresionServicio;

  nombreServicio = document.getElementById('nombreServicio').value;
  duracionServicio = document.getElementById('duracionServicio').value;
  costoServicio = document.getElementById('costoServicio').value;
  novedadesServicio = document.getElementById('novedadesServicio').value;
  idEmpleadoServicio = document.getElementById('idEmpleadoServicioServicio')
    .value;
  idClienteServicio = document.getElementById('idClienteServicio').value;

  expresionServicio = /^[ñA-Za-z _]*[ñA-Za-z][ñA-Za-z]*$/;

  if (
    nombreServicio === '' ||
    duracionServicio === '' ||
    costoServicio === '' ||
    novedadesServicio === '' ||
    idEmpleadoServicio === '' ||
    idClienteServicio === ''
  ) {
    alert('seleccione y complete todos los campos');
    return false;
  } else if (!expresionServicio.test(nombreServicio)) {
    alert('el nombre del servicio debe ser letras');
    return false;
  } else if (nombreServicio.length > 20) {
    alert('el nombre del servicio debe ser menor a 20 caracteres');
    return false;
  } else if (duracionServicio.length > 20) {
    alert('la duracion debe tener maximo 20 caracteres ');
    return false;
  } else if (isNaN(costoServicio)) {
    alert('en el costo solo deben haber numeros');
    return false;
  } else if (costoServicio.length > 10) {
    alert('el costo del servicio no debe pasarce de 10 caracteres ');
    return false;
  } else if (novedadesServicio.length > 40) {
    alert('la novedad del servicio no debe ser mayor a 40 caracteres');
    return false;
  } else if (idEmpleadoServicio.length > 20) {
    alert('el  Empleado no debe ser mayor a 20 caracteres');
    return false;
  } else if (idClienteServicio.length > 20) {
    alert('el Cliente no debe ser mayor a 20 caracteres');
    return false;
  }
}

function validarFactura() {
  let descripcionFactura,
    FechaParcial,
    precioParcial,
    Impuestos,
    DescuentosFactura,
    TotalaPagarFactura,
    EmpleadoFactura,
    ClienteFactura,
    pagosFactura,
    servicioFactura,
    usuarioFactura,
    expresionFecha,
    expresionFactura,
    expresionDescuentos;

  descripcionFactura = document.getElementById('descripcionFactura').value;
  FechaParcial = document.getElementById('fechaParcial').value;
  precioParcial = document.getElementById('precioParcial').value;
  Impuestos = document.getElementById('impuestos').value;
  DescuentosFactura = document.getElementById('Descuento').value;
  TotalaPagarFactura = document.getElementById('TotalAPagar').value;
  EmpleadoFactura = document.getElementById('idEmpleadoFactura').value;
  ClienteFactura = document.getElementById('idClienteFactura').value;
  pagosFactura = document.getElementById('idPagoFactura').value;
  servicioFactura = document.getElementById('idServicioFactura').value;
  usuarioFactura = document.getElementById('idUserFactura').value;

  expresionFecha = /\d\d\d\d-\d\d-\d\d/;

  expresionFactura = /^[ñA-Za-z _]*[ñA-Za-z][ñA-Za-z]*$/;
  expresionDescuentos = /\d+\.\d/;

  if (
    descripcionFactura === '' ||
    FechaParcial === '' ||
    precioParcial === '' ||
    Impuestos === '' ||
    DescuentosFactura === '' ||
    TotalaPagarFactura === '' ||
    EmpleadoFactura === '' ||
    ClienteFactura === '' ||
    pagosFactura === '' ||
    servicioFactura === '' ||
    usuarioFactura === ''
  ) {
    alert('Seleccione y complete Todos los Campos');
    return false;
  } else if (descripcionFactura.length > 40) {
    alert('la Descripcion No puede ser mayor a 40 caracteres');
    return false;
  } else if (!expresionFecha.test(FechaParcial)) {
    alert(
      'la fecha Inicial esta mal digitada ingrese este tipo de formato aaaa-mm-dd verifique el simbolo - colocado'
    );
    return false;
  } else if (FechaParcial.length > 10) {
    alert('la constraseña deber tener maximo 10 caracteres');
    return false;
  } else if (!expresionDescuentos.test(precioParcial)) {
    alert(
      'el precio parcial debe ser ingresado en decimales ej:1.0 , 1.2, 1.3, 1.4'
    );
    return false;
  } else if (!expresionDescuentos.test(Impuestos)) {
    alert(
      'Los Impuestos deben ser ingresado en decimales ej:1.0 , 1.2, 1.3, 1.4'
    );
    return false;
  } else if (!expresionDescuentos.test(DescuentosFactura)) {
    alert(
      'Los Descuentos deben ser ingresado en decimales ej:1.0 , 1.2, 1.3, 1.4'
    );
    return false;
  } else if (isNaN(TotalaPagarFactura)) {
    alert(
      'total a pagar no debe contener puntos solo deben estar los numeros no superar los 10 carateres'
    );
    return false;
  } else if (TotalaPagarFactura.length > 10) {
    alert(
      'El total a pagar no puede pasar los 10 caracter verifique no tener puntos en su cifra '
    );
    return false;
  } else if (EmpleadoFactura.length > 20) {
    alert('el Empleado no debe contener mas de 10 caracteres');
    return false;
  } else if (ClienteFactura.length > 20) {
    alert('el Cliente no debe contener mas de 10 caracteres');
    return false;
  } else if (pagosFactura.length > 10) {
    alert('la fecha del Pago no debe contener mas de 10 caracteres');
    return false;
  } else if (servicioFactura.length > 20) {
    alert('el servicio no debe contener mas de 20 caracteres');
    return false;
  } else if (usuarioFactura.length > 30) {
    alert('el nombre del Usuario no debe ser mayor a 30 carateres');
    return false;
  }
}

function validarCargo() {
  let nombreCargo, DescripcionCargo, exprexionCargo;
  nombreCargo = document.getElementById('nombreCargo').value;
  DescripcionCargo = document.getElementById('descripcionCargo').value;

  exprexionCargo = /^[ñA-Za-z _]*[ñA-Za-z][ñA-Za-z]*$/;

  if (nombreCargo === '' || DescripcionCargo === '') {
    alert('No debe haber ningun Campo Sin Completar');
    return false;
  } else if (!exprexionCargo.test(nombreCargo)) {
    alert('el nombre no debe tener numeros ');
    return false;
  } else if (nombreCargo.length > 20) {
    alert('el nombre del Cargo es Muy Largo maximo son 20 caracteres');
    return false;
  } else if (DescripcionCargo.length > 40) {
    alert('la descripcion del cargo debe tener como maximo 40 carateres ');
    return false;
  }
}

function validarOferta() {
  let NombreOferta, FechaInicialOferta, FechaLimiteOferta, expresionOferta;

  NombreOferta = document.getElementById('nombreOferta').value;
  FechaInicialOferta = document.getElementById('FechaInicial').value;
  FechaLimiteOferta = document.getElementById('FechaLimite').value;

  expresionOferta = /\d\d\d\d-\d\d-\d\d/;

  if (
    NombreOferta === '' ||
    FechaInicialOferta === '' ||
    FechaLimiteOferta === ''
  ) {
    alert('los campos no pueden estar Vacios');
    return false;
  } else if (NombreOferta.length > 50) {
    alert('la Descripcion de la oferta debe ser menor a 50 carateres');
    return false;
  } else if (!expresionOferta.test(FechaInicialOferta)) {
    alert(
      'la fecha Inicial esta mal digitada ingrese este tipo de formato aaaa-mm-dd verifique el simbolo - colocado'
    );
    return false;
  } else if (FechaInicialOferta.length > 10) {
    alert('la Fecha Inicial no debe superar los 10 caracteres');
  } else if (!expresionOferta.test(FechaLimiteOferta)) {
    alert(
      'la fecha Final  esta mal digitada ingrese este tipo de formato aaaa-mm-dd verifique el simbolo - colocado'
    );
    return false;
  } else if (FechaLimiteOferta.length > 10) {
    alert('la Fecha Limite no debe Superar los 10 caracteres');
    return false;
  }
}

function validarPago() {
  let fechaPago,
    DevolucionPago,
    FechaInicialPago,
    EmpleadoPago,
    ClientePago,
    ServicioPago,
    UsuarioPago;
  expresionFechaPago = /\d\d\d\d-\d\d-\d\d/;

  fechaPago = document.getElementById('fechaPago').value;
  DevolucionPago = document.getElementById('DevolucionPago').value;
  FechaInicialPago = document.getElementById('FechaInicialPago').value;
  EmpleadoPago = document.getElementById('idEmpleadoPago').value;
  ClientePago = document.getElementById('idClientePago').value;
  ServicioPago = document.getElementById('idServicioPago').value;
  UsuarioPago = document.getElementById('idUsuarioPago').value;

  if (
    (fechaPago === '',
    DevolucionPago === '',
    FechaInicialPago === '',
    EmpleadoPago === '',
    ClientePago === '',
    ServicioPago === '',
    UsuarioPago === '')
  ) {
    alert('Seleccione y complete Los Campos');
    return false;
  } else if (!expresionFechaPago.test(fechaPago)) {
    alert(
      'la Fecha Esta Mal Escrita Por Favor Ingrese aaaa-mm-dd agregar simbolo -'
    );
    return false;
  } else if (fechaPago.length > 10) {
    alert('la fecha no puede ser mayor a 10 caracteres');
    return false;
  } else if (isNaN(DevolucionPago)) {
    alert('la Devolucion debe ser solo numeros no agregar simbolos $ . ');
    return false;
  } else if (DevolucionPago.length > 10) {
    alert(' la cifra es muy amplia maximo acepta 10 caracteres');
    return false;
  } else if (!expresionFechaPago.test(FechaInicialPago)) {
    alert(
      'la Fecha Inicial Esta Mal Escrita Por Favor Ingrese aaaa-mm-dd agregar simbolo -'
    );
    return false;
  } else if (FechaInicialPago.length > 10) {
    alert('la Fecha Inicial No Debe ser mayor a 10 caracteres');
    return false;
  } else if (EmpleadoPago.length > 20) {
    alert('El Empleado debe Ser menor a 20 Caracteres');
    return false;
  } else if (ClientePago.length > 20) {
    alert('El Cliente debe Ser menor a 20 Caracteres');
    return false;
  } else if (ServicioPago.length > 20) {
    alert('El Servicio debe Ser menor a 20 Caracteres');
    return false;
  } else if (UsuarioPago.length > 30) {
    alert('El Usuario debe Ser menor a 30 Caracteres');
    return false;
  }
}

function validarUsuario() {
  let NombreUsuario,
    EmailUsuario,
    ContrsaenaUsuario,
    Cargo,
    ExpresionUsuario,
    ExpresionContrasena,
    ExpresionCorreoUsuario;

  NombreUsuario = document.getElementById('nombreuser').value;
  EmailUsuario = document.getElementById('emailuser').value;
  ContrsaenaUsuario = document.getElementById('contrasena').value;
  Cargo = document.getElementById('idCargo').value;

  ExpresionUsuario = /^[ñA-Za-z _]*[ñA-Za-z][ñA-Za-z]*$/;
  ExpresionContrasena = /^(?=\w*\d)(?=\w*[A-Z])(?=\w*[a-z])\S{8 ,16}$/;
  ExpresionCorreoUsuario = /\w+@\w+\.+[a-z]/;

  if (
    NombreUsuario === '' ||
    EmailUsuario === '' ||
    ContrsaenaUsuario === '' ||
    Cargo === ''
  ) {
    alert('Seleccione y Complete los Campos');
    return false;
  } else if (!ExpresionUsuario.test(NombreUsuario)) {
    alert('El nombre del Usuario Debe solo contener letras ');
    return false;
  } else if (NombreUsuario.length > 30) {
    alert('El nombre debe Ser Menor a 30 Caracteres');
    return false;
  } else if (!ExpresionCorreoUsuario.test(EmailUsuario)) {
    alert('El Email Esta Mal escrito');
    return false;
  } else if (EmailUsuario.length > 30) {
    alert('el Email No debe ser Mayor a 30 Caracteres');
    return false;
  } else if (!ExpresionContrasena.test(ContrsaenaUsuario)) {
    alert(
      'La contraseña debe tener al entre 8 y 16 caracteres , al menos un dígito, al menos una minúscula y al menos una mayúscula NO puede tener otros símbolos'
    );
    alert('Ejemplo Contraseña Valida : Brayanzanabria0');
    return false;
  } else if (Cargo.length > 20) {
    alert('el Nombre Del Cargo debe ser menor a 20 caracteres');
    return false;
  }
}

$(document).ready(function () {
  $('#show').mousedown(function () {
    $('#contrasena').removeAttr('type');
    $('#show').addClass('fa-eye-slash').removeClass(' fa-eye');
  });
  $('#show').mouseup(function () {
    $('#contrasena').attr('type', 'password');
    $('#show').addClass('fa-eye').removeClass('fa-eye-slash');
  });
});

function validarHojaDeVida(){
  let IdentificacionCan,
  nombreCandidato,
  apellidoCandidato,
  direccionCandidato,
  telefonoCandidato,
  anosExperiencia,
  descripcionReferenciaLaboral,
  contactoReferencia,
  direccionReferencia,
  nombreReferencia,
  estudios,
  estudiosSegundarios,
  estudiosSuperiores,
  CantidadTitulos;

  IdentificacionCan  = document.getElementById('NumeroIdentificacionCandidato').value;
  nombreCandidato    = document.getElementById('nombreCandidato').value;
  apellidoCandidato  = document.getElementById('apellidoCandidato').value;
  direccionCandidato = document.getElementById('direccionCandidato').value;
  telefonoCandidato  = document.getElementById('telefonoCandidato').value;
  anosExperiencia    = document.getElementById('anosExperiencia').value;
  descripcionReferenciaLaboral = document.getElementById('descripcionReferenciaLaboral').value;
  contactoReferencia = document.getElementById('contactoReferencia').value;
  direccionReferencia = document.getElementById('direccionReferencia').value;
  nombreReferencia    = document.getElementById('nombreReferencia').value;
  estudios = document.getElementById('estudios').value;
  estudiosSegundarios = document.getElementById('estudiosSegundarios').value;
  estudiosSuperiores = document.getElementById("estudiosSuperiores").value;
  CantidadTitulos   = document.getElementById('CantidadTitulos').value;
  expresionCandidato = /^[ñA-Za-z _]*[ñA-Za-z][ñA-Za-z _]*$/;
  expresionDireccion = /\D\D\s\d\d\d\D\s\d\d\d\D\s\d\d/;

  expresionCorreo = /\w+@\w+\.+[a-z]/;



  if(IdentificacionCan   === '' ||  nombreCandidato  === '' || apellidoCandidato === ''||
     direccionCandidato  === '' || telefonoCandidato === '' || anosExperiencia === '' || 
     descripcionReferenciaLaboral === '' || contactoReferencia === '' || direccionReferencia === ''||
     nombreReferencia === '' || estudios === '' || estudiosSegundarios === '' || 
     estudiosSuperiores === '' || CantidadTitulos === ''
    ){
    alert('Los Campos No Pueden Estar Vacios');
    return false;
  }
    else if (isNaN(IdentificacionCan)) {
    alert('la identificacion debe ser 10 Numeros Obligatorios');
    return false;
  } else if (IdentificacionCan.length != 10) {
    alert('la identificacion debe ser 10 Numeros Obligatorios');
    return false;
  }else if(!expresionCandidato.test(nombreCandidato)){
    alert("El Nombre Debe ser Solo letras");
    return false;

  }else if(nombreCandidato.length > 20){
    alert("el Nombre del Candidato debe ser menor a 20 letras");
    return false;
  }else if(!expresionCandidato.test(apellidoCandidato)){
    alert('el apellido del candidato debe ser solo letras');
    return false;
  }else if(apellidoCandidato.length >20){
    alert("el apellido debe ser menor a 20 letras");
    return false;
  }else if(direccionCandidato.length > 100){
    alert("la direccion debe ser menor a las 100 letras ");
    return false;
  }else if(isNaN(telefonoCandidato)){
    alert("el telefono del candidato debe ser menor a 10 numeros");
    return false;
  
  }else if(telefonoCandidato.length != 10){
    alert("el telefono debe ser 10 numeros ");
    return false;
  }else if(anosExperiencia.length >2){
    alert("los años de experiencia laboral deber ser menor a 2 años");
    return false;
  }else if(isNaN(anosExperiencia)){
    alert("los años de experiencia laboral debe ser solo numeros");
    return false;
  }else if(descripcionReferenciaLaboral.length >500){
    alert("la descripcion laboral debe ser menor 500 caracteres");
    return false;
  }else if(isNaN(contactoReferencia)){
    alert("el contacto de la referencia laboral debe ser solo numeros");
    return false;
  }else if (contactoReferencia.length != 10){
    alert("el contacto de referencia debe ser 10 numeros obligatorios");
    return false; 
  }else if(direccionReferencia.length >100){
    alert("La direccion referencia laboral debe ser menor a 100 caracteres");
    return false;
  }else if(!expresionCandidato.test(nombreReferencia)){
    alert("el nombre referencia laboral debe ser solo letras ");
    return false;
  }else if(nombreReferencia.length >20){
    alert("El nombre referencia laboral debe ser menor a 20 letras");
    return false;   
  }else if(estudios.length >500){
    alert("los estudios deben ser menor a 500 caracteres ");
    return false;
  }else if(estudiosSegundarios.length >500){
    alert("los estudios Segundarios deben ser menor a 500 caracteres ");
    return false;
  }else if(estudiosSuperiores.length >500){
    alert("los estudios Superiores deben ser menor a 500 caracteres ");
    return false;
  }else if(isNaN(CantidadTitulos)){
    alert("la Cantidad de titulos debe ser solo numeros");
    return false;
  }else if(CantidadTitulos.length > 2){
    alert("La Cantidad de titulos no debe ser mayor a dos nuemros ingresados ");
    return false;
  }
}
