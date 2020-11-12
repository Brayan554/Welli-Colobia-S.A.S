var hola = document.getElementById('hola');
hola.addEventListener('click', (e)=>{
e.preventDefault()


var op  = parseInt(document.querySelector('#op').value);
var op2 = parseInt(document.querySelector('#op2').value);
var op3 = parseInt(document.querySelector('#op3').value);
var op4 = parseInt(document.querySelector('#op4').value);
var op5 = parseInt(document.querySelector('#op5').value);

var resultado = 0;

if(op == '1' && op2 == '1' && op3 == '1' && op4 == '1' && op5 == '1' ){
    resultado = 100;
}else if(op == '2' && op2 == '1' && op3 == '1' && op4 == '1' && op5 == '1'){
    resultado = 80;
}else if(op == '1' && op2 == '2' && op3 == '1' && op4 == '1' && op5 == '1'){
    resultado = 80;
}else if(op == '1' && op2 == '1' && op3 == '2' && op4 == '1' && op5 == '1'){
    resultado = 80;
}else if(op == '1' && op2 == '1' && op3 == '1' && op4 == '2' && op5 == '1'){
    resultado = 80;
}else if(op == '1' && op2 == '1' && op3 == '1' && op4 == '1' && op5 == '2'){
    resultado = 80;
}else if(op == '2' && op2 == '2' && op3 == '1' && op4 == '1' && op5 == '1'){
    resultado = 60;
}else if(op == '2' && op2 == '1' && op3 == '2' && op4 == '1' && op5 == '1'){
    resultado = 60;
}else if(op == '2' && op2 == '1' && op3 == '1' && op4 == '2' && op5 == '1'){
    resultado = 60;
}else if(op == '2' && op2 == '1' && op3 == '1' && op4 == '1' && op5 == '2'){
    resultado = 60;
}else if(op == '1' && op2 == '2' && op3 == '2' && op4 == '1' && op5 == '1'){
    resultado = 60;
}else if(op == '1' && op2 == '2' && op3 == '1' && op4 == '2' && op5 == '1'){
    resultado = 60;
}else if(op == '1' && op2 == '2' && op3 == '1' && op4 == '1' && op5 == '2'){
    resultado = 60;
}else if(op == '1' && op2 == '1' && op3 == '2' && op4 == '2' && op5 == '1'){
    resultado = 60;
}else if(op == '1' && op2 == '1' && op3 == '2' && op4 == '1' && op5 == '2'){
    resultado = 60;
}else if(op == '1' && op2 == '1' && op3 == '1' && op4 == '2' && op5 == '2'){
    resultado = 60;
}else if(op == '2' && op2 == '2' && op3 == '2' && op4 == '1' && op5 == '1'){
    resultado = 40;
}else if(op == '2' && op2 == '1' && op3 == '1' && op4 == '2' && op5 == '2'){
    resultado = 40;
}else if(op == '1' && op2 == '2' && op3 == '2' && op4 == '2' && op5 == '1'){
    resultado = 40;
}else if(op == '1' && op2 == '1' && op3 == '2' && op4 == '2' && op5 == '2'){
    resultado = 40;
}else if(op == '2' && op2 == '1' && op3 == '1' && op4 == '2' && op5 == '2'){
    resultado = 40;
}else if(op == '2' && op2 == '2' && op3 == '1' && op4 == '1' && op5 == '2'){
    resultado = 40;
}else if(op == '2' && op2 == '2' && op3 == '2' && op4 == '2' && op5 == '1'){
    resultado = 20;
}else if(op == '1' && op2 == '2' && op3 == '2' && op4 == '2' && op5 == '2'){
    resultado = 20;
}else if(op == '2' && op2 == '1' && op3 == '2' && op4 == '2' && op5 == '2'){
    resultado = 20;
}else if(op == '2' && op2 == '2' && op3 == '1' && op4 == '2' && op5 == '2'){
    resultado = 20;
}else if(op == '2' && op2 == '2' && op3 == '2' && op4 == '1' && op5 == '2'){
    resultado = 20;
}else if(op == '2' && op2 == '2' && op3 == '2' && op4 == '2' && op5 == '2'){
    resultado = 0;
}
console.log(resultado);
$("#porcentajePuntuacion").val(resultado);
});



