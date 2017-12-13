<?php
session_start();
include_once 'dbconnect.php';

if (!isset($_SESSION['userSession'])) {
	header("Location: ../index.php");
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Ventas</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/component.css" rel='stylesheet' type='text/css' />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<link rel="shortcut icon" type="image/png" href="https://datatables.net/media/images/favicon.png">
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
	<link rel="stylesheet" type="text/css" href="./DataTables example - Base style_files/site-examples.css">
	<link rel="stylesheet" type="text/css" href="./DataTables example - Base style_files/jquery.dataTables.min.css">
	<style type="text/css" class="init">
	
	</style>
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Auto Show Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- start menu -->
</head>
<body>
	<div class="men_banner">
   	  <div class="container">
   	  	<div class="navbar-header">
   		<div class="logo">
			<a href="index.php"><img src="images/auto.png" alt=""/></a>
		</div>
	   <div class="navg">	   	 
	        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
	        </button>
	       </div>
	      </div>
	       <div class="navbar-collapse collapse" id="bs-example-navbar-collapse-1" style="height: 1px;">
	         <ul class="nav navbar-nav">
		        <li class="dropdown">
	            <li class="dropdown">
		            <a href="models.php" class="last-nav">Modelos<b class="caret"></b></a>
		        </li>
		        <li class="dropdown">
		            <a class="last-nav" href="contact.html">Contactanos</a>
		        </li>
		        
	       
<li class="dropdown">
		            <a class="last-nav" href="MyAcc.php?id=2" >Mi cuenta</a>	            
		        </li>
<li class="dropdown">
		            <a class="last-nav" href="Ventas.php" >Ventas</a>	            
		        </li>
<li class="dropdown">
		            <a class="last-nav" href="Clientes.php" >Clientes</a>	            
		        </li>
<li class="dropdown">
		            <a class="last-nav" href="../logout.php?logout" >Cerrar Sesion</a>	            
		        </li>
                
	        </ul>
		   </div>
		  </div>
	     <div class="clearfix"> </div>
	    </div>
   <div class="container">
   	  <!DOCTYPE html>
<!-- saved from url=(0023)https://datatables.net/ -->
<html>
    <head>
    <?php 
     include ('conexion.php');
?>
<?php
///Obteniendo registros de la base de datos a traves de una consulta SQL
$consulta=mysqli_query($con,"SELECT * FROM ventas");
?> 
 
        
	<script type="text/javascript" async="" src="./DataTables example - Base style_files/ga.js"></script><script type="text/javascript" src="./DataTables example - Base style_files/site.js">
	</script>
	<script type="text/javascript" src="./DataTables example - Base style_files/dynamic.php" async="">
	</script>
	<script type="text/javascript" language="javascript" src="./DataTables example - Base style_files/jquery-1.12.3.js">
	</script><style type="text/css"></style>
	<script type="text/javascript" language="javascript" src="./DataTables example - Base style_files/jquery.dataTables.min.js">
	</script>
	<script type="text/javascript" language="javascript" src="./DataTables example - Base style_files/demo.js">
	</script>
	<script type="text/javascript" class="init">
	
$(document).ready(function() {
	$('#example').DataTable();
} );

	</script>
</head>
<body class="wide comments example">
	
			<div class="container">
   	  <div class="grid_1">
	   	  <h1>Ventas Realizadas</h1>
	   	  
      </div>
                
                <table id="example" class="display compact" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Id Venta</th>
                <th>Empleado Venta</th>
                <th>Nombre Auto</th>
                <th>Marca Auto</th>
                <th>Tipo Auto</th>
                <th>Precio Auto</th>
                <th>Color Auto</th>
                <th>Equipamento</th>
                <th>Precio Equipamento</th>
                <th>Matricula Vendedor</th>
                <th>Cliente Venta</th>
                <th>Total Venta</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Id Venta</th>
                <th>Empleado Venta</th>
                <th>Nombre Auto</th>
                <th>Marca Auto</th>
                <th>Tipo Auto</th>
                <th>Precio Auto</th>
                <th>Color Auto</th>
                <th>Equipamento</th>
                <th>Precio Equipamento</th>
                <th>Matricula Vendedor</th>
                <th>Cliente Venta</th>
                <th>Total Venta</th>
                
            </tr>
        </tfoot>
        <tbody>
      <?php  
  while($row = mysqli_fetch_array($consulta))
  {

	echo'<tr>';
  
    echo "<td>" . 
	    $row["Id_Venta"] . "</td>";
		
    echo "<td>" . 
	    $row["Empleado_Venta"] . "</td>";
		
    echo "<td>" . 
	    $row["Nombre_Auto"] . "</td>";
	
	echo "<td>" . 
	    $row["Marca_Auto"] . "</td>";
	
	echo "<td>" . 
	    $row["Tipo_Auto"] . "</td>";
	
	echo "<td>","$" . 
	    $row["Precio_Auto"] . "</td>";
	
	echo "<td>" . 
	    $row["Color_Auto"] . "</td>";
	
	echo "<td>" . 
	    $row["Equipamento"] . "</td>";
		
	echo "<td>","$" . 
	    $row["Precio_Equipamento"] . "</td>";
		
	echo "<td>" . 
	    $row["Matricula_Vendedor"] . "</td>";
		
	echo "<td>" . 
	    $row["Cliente_Venta"] . "</td>";
		
		
	echo "<td>". 
	    $row["Total_Venta"] . "</td>";
		
  
  }
        
           echo' </tr>';
           
     
		?>
        </tbody>
    </table>
		 </div>			
<div id="lbOverlay" style="display: none;"></div><div id="lbCenter" style="display: none;"><div id="lbImage"><div style="position: relative;"><a id="lbPrevLink" href="https://datatables.net/examples/styling/display.html#"></a><a id="lbNextLink" href="https://datatables.net/examples/styling/display.html#"></a></div></div></div><div id="lbBottomContainer" style="display: none;"><div id="lbBottom"><a id="lbCloseLink" href="https://datatables.net/examples/styling/display.html#"></a><div id="lbCaption"></div><div id="lbNumber"></div><div style="clear: both;"></div></div></div>

   </div>
   <div class="footer">
   	 <div class="container">
   		<div class="cssmenu">
				<ul>
					<li class="active"><a href="#">Privacidad</a></li>
					<li><a href="#">Terminos</a></li>
					<li><a href="#">Tienda</a></li>
					<li><a href="#">Acerca</a></li>
					<li><a href="contact.html">Contactanos</a></li>
				</ul>
		</div>
		<ul class="social">
			<li><a href=""> <i class="instagram"> </i> </a></li>
			<li><a href=""><i class="fb"> </i> </a></li>
			<li><a href=""><i class="tw"> </i> </a></li>
	    </ul>
	    <div class="clearfix"> </div>
	    
	    </div>
   	</div>
   </div>
</body>
</html>		