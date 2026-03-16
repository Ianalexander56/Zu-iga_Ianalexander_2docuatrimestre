<?php

$tarjeta = $_POST['tarjeta'];

// verificar longitud
if (strlen($tarjeta) != 16) {
    echo "Error: La tarjeta debe tener exactamente 16 dígitos.";
    exit();
}

// verificar que sean números
if (!ctype_digit($tarjeta)) {
    echo "Error: La tarjeta solo debe contener números.";
    exit();
}

// formatear en grupos de 4
$formateada = chunk_split($tarjeta, 4, " ");
$formateada = trim($formateada);

// ocultar primeros 12 dígitos
$ultimos4 = substr($tarjeta, -4);
$oculta = "**** **** **** " . $ultimos4;

// mostrar resultados
echo "<h2>Resultados</h2>";

echo "Número formateado: $formateada <br><br>";
echo "Número protegido: $oculta";

?>