<?php

//PDO (PHP Data Objects) - Es un interfaz de acceso a base de datos que:
  // Caracteristicas de PDO:
      // - Soporte para múltiples bases de datos
      // - Utiliza prepared statements para mayor seguridad
      // - Manejo de errores mediante excepciones (Try - catch)
  // Ventajas de PDO:
      // - Flexibilidad para cambiar de base de datos sin modificar el codigo
      // - Mayor seguridad contra inyeccion SQL
      // - Mejor manejo de errores
  // Desvantajas de PDO
      // - Puede ser más lento que otras opciones de acceso a base de datos
      // - No tiene soporte para carecteristicas especificas de MySQL, como procedimientos almacenados o multiples consultas.
  // Ejemplo de conexion de una base de dats usando PDO
      /*
      try{
                $pdo = new PDO ('mysql:host=localhost; dbname=mi_base_de_datos', 'usuario', 'contraseña');
                // Aqui se establece la conexion a la base de datos usando PDO, el host representa la direccion del servidor de la base de datos, dbname es el nombre de la base de datos, usuario y contraseña son las credenciales para acceder a la base de datos. 
                NOTA: Toda esta informacion podria ser almacenada en un archivo de configuracion separado para mayor seguriad.

                $pdo->setAtribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //Configura el modo de error para que el sistema arroje excepciones en caso de errores. Para este ejemplo, se establece el modo de error a PDO::ERRMODE_EXCEPTION, que quiere decir que cualquier error en la conexion o en las consultas SQL generará una excepción, la cual puede ser capturada y manejada correctamente.

                echo "Conexión exitosa a la base de datos"; // Si la conexión es exitosa se muestra un mensaje
            } catch(PDOException $e){
                echo "Error en la conexión: " . $e->getMessage(); // Si ocurre algún error durante la conexión a la base de datos, se "atrapa" la excepción y se muestra un mensaje de error especificanco el motivo que generó el error.
            }
            */ 

    // MySQLI (MySQL Improved) - Es una conexión específica para MySQL que proporciona una interfaz mejorada para interactuar con bases de datos MySQL. MySQLi ofrece tanto una interfaz procedural, lo que permite a los desarrolladores elegir elmestilo de programación que prefieran. Al igual que PDO, MySQLi también soporta Prepared Statements para mejorar la seguridad contra inyección SQL. 
         // Características de MySQLi:
            // - Especifico para MySQL
            // - Soporta Prepared Statements
            // - Ofrece tanto una interfaz orientada a objetos como procedural
         // Ventajas de MySQLi:
            // - Mejor rendimiento en operaciones especificas de MySQL
            // - Soporte para característica específicas de MySQL, como procedimientos almacenados y múltiples consultas
         // Desventajas de MySQLi:
            // - No es compatible con otras bases de datos 
            // - Puede ser menos seguro si no se usan Prepared Statements correctamente