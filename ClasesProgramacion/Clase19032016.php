<?php
// Clase del 19 de marzo de 2026

//Que son las validaciones y para que nos sirven?
// Las validaciones son procesos que utlizamos para verificar y aseguramos que los datos enviados por el usuario cumplen con ciertos criterios o reglas, todo esto antes de que PHP los procese o los almacene en una base de datos.

// En PHP existen varias funciones muy usadas para validar datos que vienen de formularios: `isset()`, `empty()`, `is_numeric()` y `filter_var()`. 

// La función `isset()` se utiliza para verificar si una variable existe y tiene un valor distinto de `null`, lo cual es útil para comprobar si un dato fue enviado por un formulario. 
// 
// Por otro lado, `empty()` sirve para saber si una variable está vacía; esta función considera vacío valores como una cadena vacía (`""`), `0`, `"0"`, `null`, `false` o un arreglo vacío. 

// La función `is_numeric()` se usa para validar si un valor es numérico, es decir, si es un número o un texto que representa un número, como `"25"` o `"10.5"`.

//  Finalmente, `filter_var()` es una función más completa que permite validar o limpiar datos utilizando diferentes filtros, por ejemplo para comprobar si un correo electrónico tiene un formato correcto (`FILTER_VALIDATE_EMAIL`), si un número es válido (`FILTER_VALIDATE_INT`) o si una URL está bien escrita (`FILTER_VALIDATE_URL`). Estas funciones se utilizan juntas con frecuencia en PHP para asegurar que la información que envía el usuario sea correcta antes de procesarla o guardarla en una base de datos.


// Que es la sanitizacion de datos y porque es importante:

//La **sanitización de datos** es el proceso de **limpiar la información que ingresa un usuario** para eliminar o modificar contenido peligroso, incorrecto o innecesario antes de usarlo en un sistema. Esto se hace para **evitar errores y proteger la aplicación**, especialmente contra ataques como inyección de código o scripts maliciosos. Por ejemplo, si un usuario escribe algo como `<script>alert('hack')</script>`, la sanitización elimina o transforma esas etiquetas para que no se ejecuten. En PHP, se puede hacer usando funciones como `filter_var()` con filtros de tipo `FILTER_SANITIZE_*`, que ayudan a quitar caracteres no deseados o peligrosos. En resumen, sanitizar datos significa **limpiar la entrada del usuario para hacerla segura**, antes de validarla, mostrarla o guardarla en una base de datos.

//Aquí lo tienes en formato de lista para que locopies directo:

/* **Validación de campo obligatorio: Verifica que el usuario no deje el campo vacío; se asegura de que el dato haya sido ingresado antes de procesarlo.
* **Validación de tipo de dato: Comprueba que el valor corresponda al tipo esperado, por ejemplo, que sea numérico, texto, booleano, etc.
* **Validación de formato: Revisa que el dato tenga una estructura correcta, como un correo electrónico, una URL o un número telefónico válido.
* **Validación de longitud: Controla la cantidad de caracteres de un dato, estableciendo un mínimo o máximo permitido.
* **Validación de rango: Verifica que un valor numérico esté dentro de un límite permitido, por ejemplo entre 1 y 100.
