
<?php ob_start() ?>
 <h1>Inicio</h1>
 <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
        <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="bootstrap-3.1.1-dist/js/bootstrap.min.js"></script>        
        <script src="DataTables-1.10.2/media/js/jquery.dataTables.min.js"></script>        
        <script src="jquery/jquery.floatThead.min.js"></script>        
        <link rel="stylesheet" href="bootstrap-3.1.1-dist/css/bootstrap.min.css"  media="all"/>
        <link rel="stylesheet" href="DataTables-1.10.2/media/css/jquery.dataTables.css" />
        <link rel="stylesheet" href="datepicker/css/datepicker.css"  >
        <link rel="stylesheet" href="chosen/chosen.css"  />
        
        <style>
            body{
              background-color: #000; /*Default bg, similar to the background's base color*/
              background-image: url("/img/rh_logo_index.png");
              background-position: right bottom; /*Positioning*/
              background-repeat: no-repeat; /*Prevent showing multiple background images*/
            }
            </style>
    </head>
   
    
    
    <body>
        <div class="well-sm">
            
        </div>
        <div class="container-fluid">
        <form id="formAcceso" name="formAcceso" method="post" action="" role="form" class="form-horizontal">
            <div class="form-group">
                    <label for="USUARIO" class="col-sm-2 control-label">Usuario: </label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                    </div>
                </div>
            <div class="form-group">
                    <label for="password" class="col-sm-2 control-label">Contraseña: </label>
                    <div class="col-sm-4">
                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">
                    </div>
                </div>
            <div>
                    <div class="col-sm-6">
                        <button type="submit" name="login" class="btn btn-primary btn-block">Ingresar <span class="glyphicon glyphicon-check"></span></button>
                    </div>
                </div>
        </form>
        </div>
    </body>
</html>


 <?php $contenido = ob_get_clean() ?>
<?php include '../layout.php' ?>

 
 