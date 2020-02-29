<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">        
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta name="description" content="Prueba programación Logixsoft">
        <meta name="author" content="Carlos Dario Flores">
        <title>appletenhtml.blogspot.com</title>        
        <link  rel="stylesheet" href="assets/css/bootstrap.min.css"/>        
        <link href="assets/js/metisMenu/metisMenu.min.css" rel="stylesheet">        
        <link href="assets/css/sb-admin-2.css" rel="stylesheet">        
        <link href="assets/fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">        
        <script src="assets/js/jquery.min.js" type="text/javascript"></script>		
		<link href='https://appletenhtml.blogspot.com/favicon.ico' rel='icon' type='image/x-icon'/>
    </head>
    <body>
        <div id="wrapper">		            
            <?php if (isset($_SESSION['_usuario']) && $_SESSION['_usuario'] == true): ?>
                <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">Prueba programación Logixsoft</a>
                    </div>                    
                    <ul class="nav navbar-top-links navbar-right" id="Salir">                        
                        <li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i></a>
                            <ul class="dropdown-menu dropdown-user">                                
                                <li><a href="logout.php"> Salir</a></li>
                            </ul>                            
                        </li>                        
                    </ul>                    
                    <div class="navbar-default sidebar" role="navigation">
                        <div class="sidebar-nav navbar-collapse">
                            <ul class="nav" id="side-menu">								
                               <li><a href="MapaConCLientes.php"><i class="fa fa-map-signs fa-fw"></i> Pagina 2</a></li>
							   <li><a href="TablaConNombres.php"><i class="fa fa-map-o fa-fw"></i> Pagina 3</a></li>
							   <li><a href="MapaDeCalor.php"><i class="fa fa-map-marker fa-fw"></i> Pagina 4</a></li>
							   <li id="Salir2"><a href="logout.php"><i class="fa fa-user fa-fw"></i> Salir</a></li>
                            </ul>
                        </div>                        
                    </div>                    
                </nav>
            <?php endif; ?>            
