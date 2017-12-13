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
<title>Auto Show</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
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
<script type="text/javascript">
					jQuery(document).ready(function($) {
						$(".scroll").click(function(event){		
							event.preventDefault();
							$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
						});
					});
</script>
</head>
<body>
	<div class="banner">
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
        <div class="clearfix"> </div>     
       </div>
       <div class="header_arrow">
          <a href="#arrow" class="scroll"><span> </span></a>
        </div>
    </div>

   <div class="main">
    <div class="container">
     <div class="top_grid" id="arrow">
   	  <div class="content_top">
   		<div class="col-md-8 col1">
   				 <a href="#" class="b-link-stroke b-animate-go  thickbox">
		   <img src="images/1.jpg" class="img-responsive" alt=""/><div class="b-wrapper1 long-img"><h2 class="b-animate b-from-left    b-delay03 ">Imagen 1</h2><p class="b-animate b-from-right    b-delay03 ">Imagen de Muestra.</p></div></a>
        </div>
   		<div class="col-md-4">
   		   <a href="#" class="b-link-stroke b-animate-go  thickbox">
		   <img src="images/pic2.jpg" class="img-responsive" alt=""/><div class="b-wrapper1"><h2 class="b-animate b-from-left    b-delay03 ">Imagen 2</h2><p class="b-animate b-from-right    b-delay03 ">Imagen de Muestra.</p></div></a>
   		  <div class="grid1">
   		  	 <a href="#" class="b-link-stroke b-animate-go  thickbox">
		   <img src="images/pic3.jpg" class="img-responsive" alt=""/><div class="b-wrapper1"><h2 class="b-animate b-from-left    b-delay03 ">Imagen 3</h2><p class="b-animate b-from-right    b-delay03 ">Imagen de Muestra.</p></div></a>
   		  </div>
   		</div>
   		<div class="clearfix"> </div>
   	  </div>
   	  <div class="content_middle">
   	  	<div class="col-md-4 col2">
   	  			 <a href="#" class="b-link-stroke b-animate-go  thickbox">
		   <img src="images/pic4.jpg" class="img-responsive" alt=""/><div class=" b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Imagen 3</h2><p class="b-animate b-from-right    b-delay03 ">Imagen de Muestra</p></div></a>
   	  	</div>
   	  	<div class="col-md-4 col2">
   	  			 <a href="#" class="b-link-stroke b-animate-go  thickbox">
		   <img src="images/pic5.jpg" class="img-responsive" alt=""/><div class=" b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Imagen 2</h2><p class="b-animate b-from-right    b-delay03 ">Imagen de Muestra</p></div></a>
   	  	</div>
   	  	<div class="col-md-4">
   	  			 <a href="#" class="b-link-stroke b-animate-go  thickbox">
		   <img src="images/pic6.jpg" class="img-responsive" alt=""/><div class=" b-wrapper"><h2 class="b-animate b-from-left    b-delay03 ">Imagen 3</h2><p class="b-animate b-from-right    b-delay03 ">Imagen de Muestra</p></div></a>
   	  	</div>
   	  	<div class="clearfix"> </div>
   	  </div>
   	  </div>
   	</div>
   	<div class="content_middle_bottom">
   		<div class="header-left" id="home">
		      <section>
				<ul class="lb-album" >
					<li>
						<a href="#image-1">
							<img src="images/g1.jpg"  class="img-responsive" alt="image01"/>
							<span>Imagen de Muestra</span>
						</a>
						<div class="lb-overlay" id="image-1">
							<a href="#page" class="lb-close">x Close</a>
							<img src="images/g1.jpg"  class="img-responsive" alt="image01"/>
					
						</div>
					</li>
					<li>
						<a href="#image-2">
							<img src="images/g2.jpg"  class="img-responsive" alt="image02"/>
							<span>Imagen de Muestra</span>
						</a>
						<div class="lb-overlay" id="image-2">
							<img src="images/g2.jpg"  class="img-responsive" alt="image02"/>
					
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-3">
							<img src="images/g3.jpg"  class="img-responsive" alt="image03"/>
							<span>Imagen de Muestra</span>
						</a>
						<div class="lb-overlay" id="image-3">
							<img src="images/g3.jpg"  class="img-responsive" alt="image03"/>						
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-4">
							<img src="images/g4.jpg"  class="img-responsive" alt="image04"/>
							<span>Imagen de Muestra</span>
						</a>
						<div class="lb-overlay" id="image-4">
							<img src="images/g4.jpg"  class="img-responsive" alt="image04"/>					
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-5">
							<img src="images/g5.jpg"  class="img-responsive" alt="image05"/>
							<span>Imagen de Muestra</span>
						</a>
						<div class="lb-overlay" id="image-5">
							<img src="images/g5.jpg"  class="img-responsive" alt="image05"/>					
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-6">
							<img src="images/g6.jpg"  class="img-responsive" alt="image06"/>
							<span>Libero tempore</span>
						</a>
						<div class="lb-overlay" id="image-6">
							<img src="images/g6.jpg"  class="img-responsive" alt="image06"/>					
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-7">
							<img src="images/g7.jpg"  class="img-responsive" alt="image07"/>
							<span>Imagen de Muestra</span>
						</a>
						<div class="lb-overlay" id="image-7">
							<img src="images/g7.jpg"  class="img-responsive" alt="image07"/>					
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<li>
						<a href="#image-8">
							<img src="images/g8.jpg"  class="img-responsive" alt="image08"/>
							<span>Imagen de Muestra</span>
						</a>
						<div class="lb-overlay" id="image-8">
							<img src="images/g8.jpg"  class="img-responsive" alt="image08"/>					
							<a href="#page" class="lb-close">x Close</a>
						</div>
					</li>
					<div class="clearfix"></div>
				</ul>
			</section>
		</div>
		<div class="field_content">
		    <h1>Auto Show Proyecto Escolar</h1>
		    <h2>TESI. MAAR.</h2>
		</div>
	 </div>
   </div>
   <div class="footer">
   	 <div class="container">
   		<div class="cssmenu">
				<ul>
					<li><a href="contact.html">Contact</a></li>
				</ul>
		</div>
		<ul class="social">
			<li><a href=""> <i class="instagram"> </i> </a></li>
			<li><a href=""><i class="fb"> </i> </a></li>
			<li><a href=""><i class="tw"> </i> </a></li>
	    </ul>
	    <div class="clearfix"></div>
	    
   	</div>
   </div>
</body>
</html>		

   
