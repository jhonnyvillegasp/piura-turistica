<?php
// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "piura_turistica";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Recibir y limpiar datos del formulario
$nombre = $conn->real_escape_string($_POST['nombre']);
$email = $conn->real_escape_string($_POST['email']);
$provincia = $conn->real_escape_string($_POST['provincia']);
$mensaje = $conn->real_escape_string($_POST['mensaje']);

// Insertar datos en la base de datos
$sql = "INSERT INTO contactos (nombre, email, provincia, mensaje) 
        VALUES ('$nombre', '$email', '$provincia', '$mensaje')";

if ($conn->query($sql) === TRUE) {
    echo "<script>
            alert('Mensaje enviado correctamente. Gracias por contactarnos.');
            window.location.href = 'index.html';
          </script>";
} else {
    echo "<script>
            alert('Error al enviar el mensaje. Por favor, intente nuevamente.');
            window.location.href = 'index.html#contacto';
          </script>";
}

$conn->close();
?>