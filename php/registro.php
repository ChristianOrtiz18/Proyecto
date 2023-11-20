<?php
// Se utiliza para llamar al archivo que contine la conexion a la base de datos
require 'conexion.php';

// Validamos que el formulario y que el boton registro haya sido presionado
if(isset($_POST['registro'])) {

// Obtener los valores enviados por el formulario
$usuario = $_POST['nombre_user'];
$edad = $_POST['edad_user'];
$telefono = $_POST['telefono_user'];
$correo = $_POST['correo_user'];
$contrasena = $_POST['password_user'];


// Insertamos los datos en la base de datos
$sql = "INSERT INTO users (id_user, nombre_user, edad_user, telefono_user, correo_user, password_user) VALUES (null, '$usuario', '$edad', '$telefono', '$correo', '$contrasena')";
$resultado = mysqli_query($conexion,$sql);
	if($resultado) {
		// Iserción correcta
		header("Location: http://localhost/securyx/mensaje.html");
	} else {
		// Iserción fallida
		echo "¡No se puede insertar la informacion!"."<br>";
		echo "Error: " . $sql . "<br>" . mysqli_error($conexion);
	}
}
?>
