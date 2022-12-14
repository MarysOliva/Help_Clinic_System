<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Perfil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <?php include '../../configuracion/navar.php' ?>
  <!-- Content Wrapper. Contains page content -->
  <!-- enlace del scritpt para evitar si preciona F12, si preciona Ctrl+Shift+I, si preciona Ctr+u  -->
  <script type="text/javascript" src="../../js/evita_ver_codigo_utilizando_teclas.js"></script>
  
</head>

  <body >

  
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Perfil</h1>
          </div><!-- /.col --> 
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">        
          <!-- Contenido -->
          <div class="col-md-4">
            <!-- codigo inicio perfil -->
           
          <div class="card card-primary card-outline">
            <div class="card-body box-profile">
              <form acction="" method="post" enctype="multipart/form-data">
              <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle"
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbp3R9wwMUAiQFvLW826Jit078o7a9prEE4g&usqp=CAU"
                    alt="User profile picture"><br>
                  
                </div><br>
                <!-- Editar foto de perfil-->
                <div class="text-center">
                  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal2">
                    Cambiar Foto
                  </button>

                  <!-- The Modal -->
                  <div class="modal" id="myModal2">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <!-- Modal Header -->
                        <div class="modal-header">
                           <h4 class="modal-title">Editar foto de perfil</h4>
                          <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                        <div class="text-center">
                          <input type="hidden" name="ruta" value="">
                          <img class="profile-user-img img-fluid img-circle"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTbp3R9wwMUAiQFvLW826Jit078o7a9prEE4g&usqp=CAU"
                            alt="User profile picture"><br><br>
                            <input type="file" name="imagenes" accept=".jpg, .png, .jpej, .JPEG, .JPG, .PNG">
                        </div>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer">
                          <button type="submit" name= "accion" value="editarfoto" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
                          <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                        </div>

                      </div>
                    </div>
                  </div>
                  </div>

                <!-- <h3 class="profile-username text-center" >DAVIDS</h3> -->
                <br>
                <br>
                <p class="text-muted text-center">Informaci??n</p>
                <ul class="list-group list-group-unbordered mb-3">
                <label for="inputusuario" class="col-sm-10 col-form-label">Usuario:</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control"  name="usuario1" id="usuario" 
                  value="" placeholder="" >
                </div>
                <label for="inputNombre" class="col-sm-10 col-form-label">Nombre:</label>
                <div class="col-sm-12">
                <input type="text" hidden class="form-control"  name="nombre3" id="nombre3" 
                  value="" placeholder="" >
                  <input type="text" class="form-control"  name="nombre1" id="nombre" 
                  value="" placeholder="" >
                </div>
                <label for="inputcorreo" class="col-sm-10 col-form-label">Correo:</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control"  name="correo1" id="correo" 
                  placeholder="" value="">
                </div>
                <br>
                <div class="col-sm-12">
                <button type="button" name="accion" value="editar" class="btn btn-primary btn-block" data-bs-toggle="modal" data-bs-target="#">
                    Actualizar informaci??n
                  </button>
                </div>
                <br>
                
              

                <!-- The Modal -->
                <div class="modal" id="myModal">
                  <div class="modal-dialog">
                    <div class="modal-content">

                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">Actualizando datos</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                      </div>
                      
                      <!-- Modal body -->
                      <div class="modal-body">
                      
                      <label for="inputusuario" class="col-sm-10 col-form-label">Usuario:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" readonly name="usuario2" id="usuario"  placeholder="" value="<?php echo $row["USUARIO"]; ?>">
                </div>
                <label for="inputNombre" class="col-sm-10 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nombre2" id="nombre" placeholder="" 
                  value="" onkeyup="mayus(this);" required onblur="quitarespacios(this);" 
                  onkeydown="sinespacio(this);" onkeypress="return soloLetras(event);">
                </div>
                <label for="inputNombre" class="col-sm-10 col-form-label">Apellido:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="apellido2" id="nombre" placeholder="" 
                  value="" onkeyup="mayus(this);" required onblur="quitarespacios(this);" 
                  onkeydown="sinespacio(this);" onkeypress="return soloLetras(event);">
                </div>
                <label for="inputcorreo" class="col-sm-10 col-form-label">Correo:</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="correo2" id="correo" 
                  value="" placeholder="" onkeypress="return clave1(event);" minlength="3" maxlength="50">
                </div>
                      </div>

                      <!-- Modal footer -->
                      <div class="modal-footer">
                        <button type="submit" name="accion" value="guardar" class="btn btn-primary" data-bs-dismiss="modal">Guardar</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                      </div>
                    
                     
                ?>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div>
        </div>
        
      
        <!-- codigo fin perfil -->
        <!-- /.col -->
        <div class="col-md-8">
          <div class="card">
            <div class="card-header p-2">
              <ul class="nav nav-pills">
                <h4>Actualizar contrase??a</h4>
              </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                   <!-- <div class="active tab-pane" id="activity">
                  codigo inicio perfil-->
                  <!-- Colocar imagen -->
                  <!-- codigo fin perfil -->
                </div>
                <!-- /.tab-pane -->
                <!-- <div class="tab-pane" id="timeline"> -->
                <!-- The timeline -->
                <!-- editar perfil
                </div> -->
                <!-- /.tab-pane -->
                <div class="tab-pane" id="settings" >
                  <form class="form-horizontal" acction="" method="post">
                    <div class="form-group row">
                      <label for="inputName" class="col-sm-2 col-form-label">Contrase??a actual:</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="actual" id="myInput" placeholder="Contrase??a actual" 
                        onkeypress="return clave1(event);" required onblur="quitarespacios(this);" onkeyup="sinespacio(this);" 
                        pattern="(?=.*[\d])(?=.*[a-z])(?=.*[A-Z]).{<?php echo $parametro_min?>,}" minlength="<?php echo $parametro_min?>" maxlength="<?php echo $parametro_max?>">
                        <input type="checkbox" onclick="mostrarContrasena()" > Mostrar/Ocultar
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputEmail" class="col-sm-2 col-form-label">Nueva contrase??a:</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="contrasena" id="contra" placeholder="Nueva contrase??a" 
                        onkeypress="return clave1(event);" required onblur="quitarespacios(this);" onkeyup="sinespacio(this);" 
                        pattern="(?=.*[\d])(?=.*[a-z])(?=.*[A-Z]).{<?php echo $parametro_min?>,}" minlength="<?php echo $parametro_min?>" maxlength="<?php echo $parametro_max?>">
                        <input type="checkbox" onclick="mostrarContrasena2()" > Mostrar/Ocultar
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="inputName2" class="col-sm-2 col-form-label">Confirmar contrase??a:</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" name="confirmar_contrasena" id="contrac" 
                        onkeypress="return clave1(event);" placeholder="Confirmar nueva contrase??a" 
                        required onblur="quitarespacios(this);" onkeyup="sinespacio(this);" 
                        pattern="(?=.*[\d])(?=.*[a-z])(?=.*[A-Z]).{<?php echo $parametro_min?>,}" minlength="<?php echo $parametro_min?>" maxlength="<?php echo $parametro_max?>">
                        <input type="checkbox" onclick="mostrarContrasena3()" > Mostrar/Ocultar
                      </div>
                    </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" name="accion" value="actualizar" class="btn btn-primary">Actualizar contrase??a</button>
                        </div>
                      </div>
                  </form>
                </div>
                <br><br>
                <!-- /.tab-pane -->
              </div>
              <!-- /.tab-content -->
            </div><!-- /.card-body -->
        </div>
        
</body><script type="text/javascript" src="../../js/evitar_reenvio.js"></script>
</html>
<?php include '../../configuracion/footer.php' ?>
<script type="text/javascript">

  function sinespacio(e) {

        var cadena =  e.value;
        var limpia = "";
        var parts = cadena.split(" ");
        var length = parts.length;

          for (var i = 0; i < length; i++) {
              nuevacadena = parts[i];
              subcadena = nuevacadena.trim();

          if(subcadena != "") {
             limpia += subcadena + " ";
                }
          }
        limpia = limpia.trim();
        e.value = limpia;

         };
  </script>

 <script type="text/javascript">

    function quitarespacios(e) {

      var cadena =  e.value;
      cadena = cadena.trim();

      e.value = cadena;

    };

  </script>
<script>
      function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " ??????????abcdefghijklmn??opqrstuvwxyz";
       especiales = ["8-37-39-46"];

       tecla_especial = false
       for(var i in especiales){
        if(key == especiales[i]){
          tecla_especial = true;
          break;
        }
      }

      if(letras.indexOf(tecla)==-1 && !tecla_especial){
        return false;
      }
    }
  </script>