
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Restablecer</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
   <!-- enlace del scritpt para evitar si preciona F12, si preciona Ctrl+Shift+I, si preciona Ctr+u  -->
   <script type="text/javascript" src="../../js/evita_ver_codigo_utilizando_teclas.js"></script>
  <style> 
body {
  background-image: url('https://sites.google.com/site/multisaberes58/especialidades/medicina-general.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed; 
  background-size: 100% 100%;
}

</style>
 
</head>
<body style="background-color:rgb(241, 243, 243);" >
<!-- Inicio evita el click derecho de la pagina -->
<body oncontextmenu="return false">
<!-- Fin evita el click derecho de la pagina --> 


<br><br>
<!-- El Modal -->

  <div  class="modal-dialog" >
    <div class="modal-content " >     

      <!--Inicio Cuerpo del modal -->
      <div class="modal-body ">
        <form action="" method="post">
            <div class="mb-3 mt-3">
            <center><img src="../../imagenes/logo.jpeg" alt="Girl in a jacket" width="270" height="150"><br></center>
            <div class="alert alert-success">
                <strong>¡Hola!</strong> Ingrese el usuario y el token para cambiar su contraseña.
            </div>
            <label for="email" class="form-label">Usuario:</label>
            <input type="text" style="background-color:rgb(240, 244, 245);" name="usuario" id="ingUsuario" class="form-control" placeholder="Ingrese el usuario" autocomplete = "off"  >
            <br>
            <label for="">Token:</label>
            <input type="text" style="background-color:rgb(240, 244, 245);"  autocomplete = "off" class="form-control" placeholder="Ingrese el token">
           
            </div>
            
         
            
            <div class="d-grid">
                <a href="/Help_Clinic_System/vistas/seguridad/cambio_contraseña.php" class="btn btn-primary btn-block">Validar</a>

            </div>
            
        </form>
      </div>
       <!--Fin Cuerpo del modal -->

    </div>
  </div>

</body>

</html>
