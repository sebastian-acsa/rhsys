

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
 <html>
     <head>
      <!--
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        
        <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>        
        <script src="DataTables-1.10.2/media/js/jquery.dataTables.min.js"></script>        
        <script src="jquery/jquery.floatThead.min.js"></script>        
        <link rel="stylesheet" href="bootstrap-3.1.1-dist/css/bootstrap.min.css"  media="screen"/>
        <link rel="stylesheet" href="DataTables-1.10.2/media/css/jquery.dataTables.css" />
        <link rel="stylesheet" href="chosen/chosen.css"  />
      -->
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>        
        <script src="DataTables-1.10.2/media/js/jquery.dataTables.min.js"></script>        
        <script src="jquery/jquery.floatThead.min.js"></script>        
        <link rel="stylesheet" href="bootstrap-3.1.1-dist/css/bootstrap.min.css"  media="screen"/>
        <link rel="stylesheet" href="DataTables-1.10.2/media/css/jquery.dataTables.css" />
        <link rel="stylesheet" href="datepicker/css/datepicker.css"  >
        <link rel="stylesheet" href="chosen/chosen.css"  />
       
        
         <title>Sistema de RH</title>
         <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- <link rel="stylesheet" type="text/css" href="<?#php echo 'css/'.Config::$mvc_vis_css ?>" />-->

     
     </head>
     <body>
     	
         <div id="cabecera">
             <h1>Sistema de RH</h1>
         </div>
		      <nav class="navbar navbar-inverse">
              <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">RH_ICON</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Empleados <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <ul class="dropdown-menu">
                        <li><a href="index.php?ctl=activos">Activos</a></li>
                        <li><a href="index.php?ctl=inactivos">Inactivos</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="index.php?ctl=todos">Todos</a></li>
                      </ul>
                      </ul>
                    </li>
                  </ul>
                  
                  <ul class="nav navbar-nav">
                    <li><a href="index.php?ctl=alta">Alta</a></li>
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>


          
         
		<br/>
        <br/>
         <div id="contenido">
             <?php echo $contenido ?>
         </div>
	
     <div id="pie">
             <hr/>
             <div align="center">- pie de página -</div>
         </div>
     
     </body>
 </html>