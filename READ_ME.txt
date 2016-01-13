READ ME

El presente proyecto contiene lo siguiente
-Modulo Primario de Alta, Cambios y Adminstracion de Empleados
-Modulo Secundario de Alta, Cambios y Adminstracion de Familiares
-Modulo oculto de Alta, Cambios y Adminstracion de Vehiculos
-Sub Modulo oculto de Adminstracion de Mtto de Vehiculos
-Modulo oculto de Adminstracion y Asignacion de Celulares.
-Preparacion para Modulo con nombre clave Picadillo.
-Diagrama de la base de datos
-Archivo sql base para montar el proyecto

Ya que este documento contiene claves de origen confidencial se recomienda discrecion con su publicacion.

informacion al tecnico:
-el desarrollo se encuentra sobre PHP Version 5.6.14.
-el desarrollo se encuentra bajo el esquema MVC y con control de rutas apartir del archivo index.php localizado en el directorio raiz del mismo.
-el desarrollo requiere librerias tanto para Mysql como PostgreSql.
-se recomienda el uso local con Xamp 3.2 en adelante
-el desarrollo extrae informacion de sistemas hermanos en jsp con base de datos PostgreSql, se recomienda discresion o solicitar copia estatica de los recursos fuente para evitar posibles conflictos.
-el proyecto cuenta con 3 versiones de template base nombrado layout.php y layout_clean.php, la version general situada en $\app\templates\ y otra especialmente adecuada al modulo principal en $\app\templates\Empleado\ asi como una version ligera en caso de ocupar uso de librerias de versiones antiguas de Jquery o Bootstrap.

Knowlage manager:
-Sebastian Treviño	francisco@acsacontruccion.com


Nota: ya que esta es un version beta se recuerda que muchas validaciones se encontraran en forma inactiva para su completa exploracion para activarlas se recomienda observar el controlador correspondiente.