let preguntas = [
{
pregunta: "¿Cuál es el planeta más grande?",
opciones: ["Marte","Júpiter","Venus","Saturno"],
correcta: 1
},

{
pregunta: "¿Quién pintó la Mona Lisa?",
opciones: ["Picasso","Da Vinci","Van Gogh","Dalí"],
correcta: 1
},

{
pregunta: "¿Cuál es el océano más grande?",
opciones: ["Atlántico","Pacífico","Índico","Ártico"],
correcta: 1
}

];

let indice = 0;
let puntaje = 0;

function mostrarPregunta(){

document.getElementById("pregunta").innerText = preguntas[indice].pregunta;

for(let i=0;i<4;i++){
document.getElementById("op"+i).innerText = preguntas[indice].opciones[i];
}

}

function responder(opcion){

if(opcion == preguntas[indice].correcta){

puntaje++;

document.getElementById("resultado").innerText="Correcto";

}else{

document.getElementById("resultado").innerText="Incorrecto";

}

document.getElementById("puntaje").innerText=puntaje;

}

function siguiente(){

indice++;

if(indice < preguntas.length){

mostrarPregunta();

document.getElementById("resultado").innerText="";

}else{

document.getElementById("pregunta").innerText="Juego terminado";
}

}

mostrarPregunta();