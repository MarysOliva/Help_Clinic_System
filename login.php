                      
<!DOCTYPE html>
<html lang="en">
<head>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <title>Login </title>
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

<!-- oncopy="return false" onpaste="return false"  esto no permite copiar ni pegar -->
<body style="background-color:rgb(241, 243, 243);" >
<br><br>


  <div  class="modal-dialog" >
    <div class="modal-content " >     
 
      <!--Inicio Cuerpo del modal -->
      <div class="modal-body ">
        <form action="" method="POST">
            <div class="mb-3 mt-3">
                <center><img src="imagenes/logo.jpeg" alt="Girl in a jacket" width="270" height="150"><br></center>
              
                <label for="usuario" class="form-label">Usuario:</label>
                <input type="text" style="background-color:rgb(240, 244, 245);" name="usuario" class="form-control" placeholder="Ingrese el usuario">
           </div>

            <div class="mb-3">           
                <label for="Contraseña" class="form-label">Contraseña:</label>
                <div class="input-group mb-3">
                <input type="password"   style="background-color:rgb(240, 244, 245);" name="contrasena" id="id_password" class="form-control" placeholder="Ingrese la contraseña">
                <div class="input-group-append ">
                            
                          <div class="input-group-text">
                            <span>
                            <i class="far fa-eye" id="togglePassword"  ></i>
                            </span>
                            
                          </div> 
                    </div></div>
            </div>

            <div class="d-grid">
            <a href="/Help_Clinic_System/vistas/tablero/tablero.php" class="btn btn-dark btn-block">Ingresar</a>
            </div>
            

            <div class="row">
                <div class="col"> 
                <a href="#">¿Olvido la contraseña?</a>
                </div>
                <div class="col">
                  <a href="#">Registrar un usuario</a>
                </div>
            </div>
        </form>
      </div>
       <!--Fin Cuerpo del modal -->

    </div>
  </div>

         

</html>