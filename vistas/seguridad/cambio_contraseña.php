
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cambio de contraseña</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
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

<body style="background-color:rgb(241, 243, 243);" >


<br><br>
<!-- El Modal -->

  <div  class="modal-dialog" >
    <div class="modal-content " >     
 
      <!--Inicio Cuerpo del modal -->
      <div class="modal-body ">
        <form action="" method="POST">
            <div class="mb-3 mt-3">
              <center><h3>Cambio de contraseña</h3></center><br>
            <div class="alert alert-success">
            <strong>¡Hola!</strong> Para realizar el cambio de contraseña debe, colocar su nueva contraseña.
            </div>            
           
            <div class="container mt-3">

                <div class="mb-3">
                <label for="sel1" class="form-label">Nueva contraseña</label>
                <div class="input-group mb-3">
                <input type="password" name="nueva_contrasena" id="id_password" value="" class="form-control" placeholder="Ingrese la contraseña">
                <div class="input-group-append ">
                <div class="input-group-text">
                            <span>
                            <i class="far fa-eye" id="togglePassword"  ></i>
                            </span>
                          </div> </div></div>
                <div class="mb-3">
                <label for="sel1" class="form-label">Confirmar contraseña</label>
                <div class="input-group mb-3">
                <input type="password" name="confirmar_contrasena" id="id_password2" value="" class="form-control" placeholder="Confirme la contraseña">
                <div class="input-group-append ">
                <div class="input-group-text">
                            <span>
                            <i class="far fa-eye" id="togglePassword2"  ></i>
                            </span>
                          </div> </div></div>

            </div>
            </div>
            
            
           
            <div class="d-grid">
            <a href="/Help_Clinic_System/login.php" class="btn btn-dark btn-block">Actualizar</a>
            
            </div>
          
            
        </form>
      </div>
       <!--Fin Cuerpo del modal -->
    </div>
  </div>



</body>

</html>
