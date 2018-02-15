<!DOCTYPE html>

<!--
DESCRIPCION:
Elvis Morell García		15 de febrero de 2018
Daniel Álvarez Santiago		Prof. Omar Soto
E&D Quick Lube	
E&D Quick Lube es un taller donde se ofrecen varios productos y servicios para vehiculos.
-->

<html lang="en">

<head>
<!-- icono en el tab -->
<link rel="icon" type="image/png" href="https://raw.githubusercontent.com/Morell2010/fase2Rep/master/ed-favicon.png" />
<!-- nombre en el tab -->
  <title>E&D </title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Google Fonts Loaded -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:300,300i,400,400i,500,500i,600,600i,700,700i">
	
	<!-- Apply the Shadow Login Form Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Arsenal:400,400i,700,700i">

	<!-- Main CSS Bootstrap All Defaults -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<!-- Some Normalize CSS Rules & Bootstrap All Redefined styles --> 
	<link rel="stylesheet" href="./css/custom.bootswatch.css?v=custom"/>
	<!-- Only Bootstrap Modal Redefined --> 
	<link rel="stylesheet" href="./css/custom.bootstrap-creative.css?v=custom"/>
<!-- Some Normalize CSS Rules & Shadow Login Defaults styles --> 
	<link rel="stylesheet" href="./css/style.css">
	<!-- Local Custom CSS --> 
	<link rel="stylesheet" href="./css/custom-style.css?v=custom"/>
	
	

</head>
<body >
	<div class="container-fluid">
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
			
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a rel="nofollow" href="./index.html" class="navbar-brand" style="margin:0px;padding:0px;"><img src="https://raw.githubusercontent.com/Morell2010/fase2Rep/master/logo.png" style="height:50px;" alt="E&D-logo" ></a>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
					
						<li><a rel="nofollow" href="http://sici4997.uprp.edu/~elvis.morell/fase2/index.php">Inicio</a></li>
						
						<li><a rel="nofollow" href="index.php?a=contacto">Contacto</a></li>
						
						<li><a rel="nofollow" href="index.php?a=citas">Citas y Servicios</a></li>
						
						<li><a rel="nofollow" href="index.php?a=tienda">Tienda</a></li>		
	
					</ul>

					<ul class="nav navbar-nav navbar-right">
            <form class="form-inline my-2 my-lg-0">
<?php
if (!isset($loggedUser)) {
?>
          <a class="btn btn-outline-info my-2 my-sm-0" href="index.php?a=register">Registrar</a>
          &nbsp;&nbsp;
          <a class="btn btn-outline-success my-2 my-sm-0" href="index.php?a=login">Entrar</a>
<?php
} else {
  
  echo '<span style="color: white; font-weight: bold;">Hi ' . $loggedUser->username . '</span>&nbsp;&nbsp;&nbsp;';
?>
          <a class="btn btn-outline-danger my-2 my-sm-0" href="index.php?a=logout">Logout</a>
<?php
}
?>
        </form>
									
					</ul>
					
				</div><!-- /.navbar-collapse -->				
			   </div><!-- /.container -->
    
        
      </div>
    </nav>
    <main role="main" class="container">

        <br />
        <br />
        <br />
        
        <div class="jumbotron text-center" style="background-image:url(https://upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Panorama_rhein_01_black_and_white.jpg/1024px-Panorama_rhein_01_black_and_white.jpg);
	background-position:left; 
	background-size:cover;">
  <h1 style="color:white">
  E & D Quick Lube</h1>
</div>

