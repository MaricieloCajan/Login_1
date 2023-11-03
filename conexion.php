<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chifa";

// Realiza la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica si hay algún error de conexión
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);}
// Obtiene los valores ingresados en el formulario
$password = $_POST["password"];
$usuario = $_POST["usuario"];

// Realiza una consulta para verificar las credenciales del usuario
$sql = "SELECT * FROM login WHERE usuario = '$usuario' AND password = '$password'";
$result = $conn->query($sql);

// Verifica si se encontró un usuario con las credenciales proporcionadas
if ($result ->num_rows > 0) {
    echo "<center><h2>BIENVENIDO</h2></center>" .$nombre;
} else {
    echo "Nombre de usuario o contraseña incorrectos";
}

// Cierra la conexión a la base de datos
$conn->close();

?>