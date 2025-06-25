<?php
require_once "sms.php";
require_once "email.php";

$notificaciones = [
    new Email("¡Bienvenido al sistema!", "usuario@ejemplo.com"),
    new SMS("Tu código de verificación es 123456", "+34123456789"),
    new Email("Tu suscripción ha sido renovada", "cliente@correo.com"),
    new SMS("Saldo disponible: 25€", "+34987654321"),
];

// Enviar todas las notificaciones
foreach ($notificaciones as $n) {
    echo $n->enviar(); // polimorfismo en acción
    echo "<br>"; // polimorfismo en acción
}

?>