<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nombre = htmlspecialchars($_POST["nombre"]);
    $correo = htmlspecialchars($_POST["correo"]);
    $asunto = htmlspecialchars($_POST["asunto"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    echo "<h2>Mensaje enviado correctamente</h2>";
    echo "<p><strong>Nombre:</strong> $nombre</p>";
    echo "<p><strong>Correo:</strong> $correo</p>";
    echo "<p><strong>Asunto:</strong> $asunto</p>";
    echo "<p><strong>Mensaje:</strong> $mensaje</p>";

} else {
    echo "No se envió ningún formulario.";
}
?>
