<?php 
$inc = include("login.php");
if ($inc) {
	$consulta = "SELECT * FROM users Where id_user=3";
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $id = $row['id_user'];
	    $nombre = $row['nombre_user'];
	    $edad = $row['edad_user'];
        $telefono = $row['telefono_user'];
        $correo = $row['correo_user'];
	    ?>
        <div>
        <center><img src="https://cdn-icons-png.flaticon.com/512/5987/5987462.png" width="10%"></center>
        	<h2>Id asignado: <?php echo $id; ?></h2>
        	<h2>Nombre del usuario: <?php echo $nombre; ?></h2>
            <h2>Edad del usuario <?php echo $edad; ?> </h2>
            <h2>Telefono del usuario: + <?php echo $telefono; ?> </h2>
            <h2>Correo del usuario <?php echo $correo; ?> </h2>
        </div> 
	    <?php
	    }
	}
}
?>