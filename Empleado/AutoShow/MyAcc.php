<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/vendor/bootstrap.min.css" type="text/css" rel="stylesheet">
    <link href="css/vendor/font-awesome.min.css" type="text/css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="css/jquery.bdt.css" type="text/css" rel="stylesheet">
    <link href="css/style2.css" type="text/css" rel="stylesheet">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Mi cuenta</title>
</head>

<body>
<?php 
	include ('conexion.php');
	$id = $_GET['id'];;
 
if ($id > 0){
			$result2 = mysqli_query($con,"Select * from empleado Where Id_Empleado = $id");
				//Hacemos un ciclo en donde imprimimos cada registro de la tabla
				while($row2 = mysqli_fetch_array($result2)){				
			?>
<form>

    <div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">Id de Empleado</label>
        <input type="text" class="form-control" id="full_name_id" name="full_name" readonly value="<?php  echo $row2['Id_Empleado'] ?>">
    </div>  
    
    <div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">Nombre del Empleado</label>
        <input type="text" class="form-control" id="full_name_id" name="full_name" readonly value="<?php  echo $row2['Nombre_Empleado'] ?>">
    </div>  
    
    <div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">Apellido Paterno del Empleado</label>
        <input type="text" class="form-control" id="full_name_id" name="full_name" readonly value="<?php  echo $row2['ApellidoP_Empleado'] ?>">
    </div>  
    
    <div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">Apellido Materno del Empleado</label>
        <input type="text" class="form-control" id="full_name_id" name="full_name" readonly value="<?php  echo $row2['ApellidoM_Empleado'] ?>">
    </div>  
    
    <div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">Edad del Empleado</label>
        <input type="text" class="form-control" id="full_name_id" name="full_name" readonly value="<?php  echo $row2['Edad_Empleado'] ?>">
    </div>  
    
    <div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">Direccion del Empleado</label>
        <input type="text" class="form-control" id="full_name_id" name="full_name" readonly value="<?php  echo $row2['Direccion_Empleado'] ?>">
    </div>  
    
    <div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">Puesto del Empleado</label>
        <input type="text" class="form-control" id="full_name_id" name="full_name" readonly  value="<?php  echo $row2['Puesto_Empleado'] ?>">
    </div>  
    
    <div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">Matricula del Empleado</label>
        <input type="text" class="form-control" id="full_name_id" name="full_name" readonly value="<?php  echo $row2['Matricula_Empleado'] ?>">
    </div>  
    
    
    <div class="form-group"> <!-- Full Name -->
        <label for="full_name_id" class="control-label">Numero de ventas del empleado</label>
        <input type="text" class="form-control" id="full_name_id" name="full_name" readonly value="<?php  echo $row2['Num_Ventas_Emple'] ?>">
    </div>    
    
        
    
</form>
<div class="form-group"> <!-- Submit Button -->
        <button name="Regresar" onclick=" location.href='index.php' " type="submit" class="btn btn-danger">Regresar al Inicio</button>
<?php
				}
 }?>
</body>
</html>

