<?php
// Define que la respuesta del servidor será un objeto JSON (no texto plano o HTML)
header("Content-Type: application/json");

// Nombres de los archivos donde guardaremos la información de forma permanente
$archivo = 'contactos.json';     // Aquí se guardan los contactos de la agenda
$usuariosFile = 'usuarios.json'; // Aquí se guardan las cuentas registradas

// Captura cómo se hizo la petición (GET, POST o DELETE)
$metodo = $_SERVER['REQUEST_METHOD'];

// Captura la "acción" enviada en la URL (ej: api.php?action=register). Si no hay, es null.
$action = $_GET['action'] ?? null;

// ==============================
// SECCIÓN DE REGISTRO
// ==============================
if ($metodo === 'POST' && $action === 'register') {
    // Lee los datos enviados desde el formulario (nombre, correo, pass) y los convierte en un array de PHP
    $data = json_decode(file_get_contents("php://input"), true);
    
    // Si el archivo de usuarios existe, lo lee y lo convierte en lista; si no, crea una lista vacía []
    $usuarios = file_exists($usuariosFile) ? json_decode(file_get_contents($usuariosFile), true) : [];
    
    // Revisa uno por uno los usuarios registrados para ver si el correo ya está en uso
    foreach ($usuarios as $u) {
        if ($u['correo'] === $data['correo']) {
            http_response_code(400); // Error de "Mala petición"
            echo json_encode(["error" => "El correo ya existe"]);
            exit; // Detiene el código aquí si hay error
        }
    }

    // Si el correo es nuevo, agrega los datos del nuevo usuario a la lista
    $usuarios[] = $data;
    
    // Guarda la lista actualizada en el archivo usuarios.json convirtiéndola de nuevo a texto JSON
    file_put_contents($usuariosFile, json_encode($usuarios));
    
    // Responde al JavaScript que todo salió bien
    echo json_encode(["status" => "ok"]);
    exit;
}

// ==============================
// SECCIÓN DE LOGIN
// ==============================
if ($metodo === 'POST' && $action === 'login') {
    // Captura las credenciales enviadas (usuario y contraseña)
    $data = json_decode(file_get_contents("php://input"), true);
    
    // Verifica que el archivo de usuarios exista antes de buscar
    if (file_exists($usuariosFile)) {
        $usuarios = json_decode(file_get_contents($usuariosFile), true);
        
        // Recorre la lista buscando coincidencia de (nombre o correo) Y contraseña
        foreach ($usuarios as $u) {
            if (($u['correo'] === $data['user'] || $u['nombre'] === $data['user']) && $u['pass'] === $data['pass']) {
                echo json_encode(["status" => "ok"]);
                exit; // Login exitoso, se detiene aquí
            }
        }
    }
    
    // Si terminó el ciclo y no encontró nada, manda código de error 401 (No autorizado)
    http_response_code(401);
    echo json_encode(["error" => "Credenciales incorrectas"]);
    exit;
}

// ==============================
// GESTIÓN DE CONTACTOS (AGENDA)
// ==============================

// Si la petición es GET: Envía la lista de contactos al JavaScript para que los dibuje
if ($metodo === 'GET') {
    echo file_exists($archivo) ? file_get_contents($archivo) : json_encode([]);
} 

// Si es POST (y no es registro): Es porque estamos guardando un contacto nuevo
elseif ($metodo === 'POST' && !$action) {
    // Carga los contactos actuales
    $actuales = file_exists($archivo) ? json_decode(file_get_contents($archivo), true) : [];
    
    // Agrega el contacto que viene del formulario al final de la lista
    $actuales[] = json_decode(file_get_contents('php://input'), true);
    
    // Sobrescribe el archivo contactos.json con la lista nueva
    file_put_contents($archivo, json_encode($actuales));
    echo json_encode(["status" => "ok"]);
} 

// Si es la acción de borrar (enviada desde el JS como ?action=delete)
elseif ($metodo === 'POST' && $action === 'delete') {
    $data = json_decode(file_get_contents("php://input"), true);
    $index = $data['index'];

    if (file_exists($archivo)) {
        $contactos = json_decode(file_get_contents($archivo), true);
        
        // Verificamos que el índice exista
        if (isset($contactos[$index])) {
            array_splice($contactos, $index, 1); // Borramos
            
            // Guardamos y reacomodamos índices con array_values
            file_put_contents($archivo, json_encode(array_values($contactos), JSON_PRETTY_PRINT));
            
            echo json_encode(["status" => "ok"]);
            exit;
        }
    }
}
?>
