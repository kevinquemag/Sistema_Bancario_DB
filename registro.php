<!DOCTYPE html>
<html lang="en">
<head>
     <link rel="stylesheet" href="stilos.css">
</head>
<body>

    <form method="POST" action='registro.php'>
   
<div id="main-container">

		<table>
			<thead>
				<tr>
					<th>Datos_movimientos</th>
				</tr>
			</thead>

			<tr>
				<td><input placeholder="Ingrese su cuenta" type="text" name = "Cuenta_cliente" ></td>
			</tr>
			<tr>
				<td><input placeholder="Ingrese cuenta destino" type="text" name = "Cuenta_destinatario" ></td>
			</tr>
			<tr>
				<td><input placeholder="monto" type="text" name = "monto" ></td>
			</tr>
		</table>
	</div>

  <center>
      <input type="submit" value="Continuar" class="btn btn-success" name="btn1">
  </center>

</form>

  <?php

    if(isset($_POST['btn1']))
    {
      include("abrir_conexion.php");
    
    $usuario1= $_POST['Cuenta_cliente'];
    $usuario2= $_POST['Cuenta_destinatario'];
    $transferencia= $_POST['monto'];
    
      mysqli_query($conexion, "UPDATE $tabla_db1 SET saldo=saldo-$transferencia WHERE n_cuenta=$usuario1");
      mysqli_query($conexion, "UPDATE $tabla_db1 SET saldo=saldo+$transferencia WHERE n_cuenta=$usuario2");
     
      include("cerrar_conexion.php");
      echo "Movimiento exitoso";
    }

    
  ?>

</body>
</html>