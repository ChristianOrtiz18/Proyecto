<?php
// Se utiliza para llamar al archivo que contine la conexion a la base de datos
require 'conexion.php';
// Validamos que el formulario y que el boton login haya sido presionado
if(isset($_POST['login'])) {

// Obtener los valores enviados por el formulario
$usuario = $_POST['correo_user'];
$contrasena = $_POST['password_user'];

// Ejecutamos la consulta a la base de datos utilizando la función mysqli_query
$sql = "SELECT * FROM users WHERE correo_user = '$usuario' and password_user = '$contrasena'";
$resultado = mysqli_query($conexion,$sql);
$numero_registros = mysqli_num_rows($resultado);
	if($numero_registros != 0) {
		// Inicio de sesión exitoso
		echo "Bievenido ";
	} else {
		// Credenciales inválidas
		header("Location: http://localhost/securyx/mensaje2.html");
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
	}
}
?>
