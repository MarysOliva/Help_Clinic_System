
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Método</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <style> 
        body {
                background-image: url('https://sites.google.com/site/multisaberes58/especialidades/medicina-general.jpg');
                background-repeat: no-repeat;
                background-attachment: fixed; 
                background-size: 100% 100%;
             }
</style>
</head>

<body oncopy="return false" onpaste="return false">

<!-- inicio oculta el codigo fuente de la pagina -->
<body oncontextmenu="return false">
<!-- Fin oculta el codigo fuente de la pagina --> 

<br><br>
<!-- El Modal -->
  <div  class="modal-dialog" >
    <div class="modal-content " >     

        <!--Inicio Cuerpo del modal -->
        <div class="modal-body ">
            <form action="" method="POST">
                <div class="mb-3 mt-3">
                    <center><img src="../../imagenes/logo.jpeg" alt="Girl in a jacket" width="270" height="150"><br></center>
                    <div class="alert alert-success">
                         <strong>¿Olvidó su contraseña?</strong> No hay problema. Simplemente ingrese su usuario.
                    </div>
                    <label for="email" class="form-label">Usuario:</label>
                        <input type="text" style="background-color:rgb(240, 244, 245);" name="usuario" id="ingUsuario" class="form-control" placeholder="Ingrese el usuario" autocomplete = "off"  onkeypress="return soloLetras(event);" minlength="3" maxlength="20" onkeyup="mayus(this);" required onblur="quitarespacios(this);" onkeydown="sinespacio(this);"><br>
                        <div class="d-grid">
                            <a href="/Help_Clinic_System/vistas/seguridad/token.php" class="btn btn-primary btn-block">Enviar Correo</a>
   <br>
                            
                        </div> 
                </div>              
            </form>
        </div>
        <!--Fin Cuerpo del modal -->
     </div>
  </div>


</body>

</html>
