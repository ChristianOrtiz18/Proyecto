<?php 
$inc = include("login.php");
if ($inc) {
	$consulta = "SELECT * FROM users LIMIT 1";
	$resultado = mysqli_query($conexion,$consulta);
	if ($resultado) {
		while ($row = $resultado->fetch_array()) {
	    $nombre = $row['nombre_user'];
	    ?>
        <center><img src="https://cdn-icons-png.flaticon.com/512/5987/5987462.png" width="30px">
        <a href="user.php"><?php echo $nombre; ?></a></center>
	    <?php
	    }
	}
}
?>