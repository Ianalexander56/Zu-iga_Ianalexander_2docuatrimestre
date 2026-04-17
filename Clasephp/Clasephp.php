<?php
// funciones en PHP
//Funcion:
//definicion de una funcion
function saludar($nombre){
    echo "<p>Hola, $nombre! Bienvenido a PHP.</p>";
}
saludar("Ian");

$nombre_alumno = "dalia";
saludar($nombre_alumno); // no es necesario que el argumento sea una cadena literal, puede ser una variable

//funcion que recibe varios parametros
function informacion_personal($nombre, $edad, $ciudad){
    $imc = $peso / ($estatura * $estatura); 
    echo "<p>Mi nombre es $nombre, tengo $edad años y vivo en $ciudad.</p>";
}
    

//funciones con retorno

function calcular_area_circulo($radio){
    $area = pi() * pow($radio, 2);
    return $area;
}
echo "<p> El area del calculo con radio $radio es: $area </p>"

function clasificador_ims($imc){
    if($imc < 18.5){
        return "Bajo peso";
    } elseif($imc >= 18.5 && $imc < 25){
        return "Peso normal";
    } elseif($imc >= 25 && $imc < 30){
        return "Sobrepeso";
    } else {
        return "Obesidad";
    }
}

$imc_luis = calcular_imc(85,1.90);
echo "<p> El IMC de luis es: $imc_luis, clasificación: " . clasificador_ims($imc_luis) . "</p>";

//funciones con parametros por defectos
function calcular_area_triangulo ($base, $altura = 10){ //El parametro $altura tiene un valor de 10 por defecto si al momento si al numero de llamar a la funcion, no se especifico algun valor para $altura. se utlilizara el valor por defecto de 10
$area = ($base * $altura) / 2;
echo "<p>El área del triángulo con base $base y altura $altura es: $area</p>";
}

calcular_area_triangulo(4); // Llamando a la funcion sin especificar un valor para $altura


//Funciones sin parametros
function mostrar_fecha_actual(){
$fecha_actual = date("d/m/Y");
$hora_actual = date("H:i:s");
echo "<p>Fecha actual: $fecha_actual, Hora actual: $hora_actual</p>";
}


