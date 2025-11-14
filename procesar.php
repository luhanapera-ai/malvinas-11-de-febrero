<?php
// Evita errores si el archivo es accedido sin usar el formulario
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    echo "Acceso no válido.";
    exit;
}

// Obtener los datos del formulario
$nombre = htmlspecialchars($_POST["nombre"]);
$correo = htmlspecialchars($_POST["correo"]);
$asunto = htmlspecialchars($_POST["asunto"]);
$mensaje = htmlspecialchars($_POST["mensaje"]);

// -------- OPCIÓN 1: Enviar los datos por email --------
// Cambiá este correo por el correo donde quieras recibir los mensajes
$destinatario = "luhana.pera@gmail.com";  

$contenido = "
Nombre: $nombre
Correo: $correo
Asunto: $asunto
Mensaje: 
$mensaje
";

$headers = "From: $correo";

// Enviar email
mail($destinatario, $asunto, $contenido, $headers);

// Mensaje de confirmación
echo "<h2>¡Mensaje enviado con éxito!</h2>";
echo "<p>Gracias por contactarnos, $nombre. Te responderemos pronto.</p>";
echo '<a href="contacto.html">Volver</a>';
?>
