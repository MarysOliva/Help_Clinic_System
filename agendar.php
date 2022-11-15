                      
<!DOCTYPE html>
<html lang="en">
<head>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      <title>Agendar</title>
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
      <br>
      <center><h3>Datos del paciente</h3></center>
      <div class="modal-body ">
      <form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nombres</label>
    <input type="email" class="form-control" id="inputEmail4" placeholder="Ingrese sus nombres">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Apellidos</label>
    <input type="password" class="form-control" id="inputPassword4" placeholder="Ingrese sus apellidos">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Dirección</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Ingrese su dirección">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Telefono</label>
    <input type="number" class="form-control" id="inputAddress2" placeholder="Ingrese su telefono">
  </div>
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Especialidad</label>
    <select  class="form-control" name="" id="">
        <option value="">Seleccione la especialidad</option>
        <option value="">Cirugía Pediátrica</option>
        <option value="">Cardiología</option>
        <option value="">Dermatología</option>
    </select>
  </div>
  
  <div class="col-12">
    <label for="inputAddress2" class="form-label">Horarios disponibles</label>
    <select  class="form-control" name="" id="">
        <option value="">Seleccione el medico</option>
        <option value="">David Sánchez 7:00am</option>
        <option value="">Maris Oliva 8:00am</option>
        <option value="">Wendy 9:00am</option>
        <option value="">Jasmira 10:00am</option>
    </select>
  </div>
  <div class="col-12">
    <input class="form-control" type="date" name="" id="">
  </div>
  <div class="col-12">
  </div>
  <div class="col-2">
    <button type="submit" class="btn btn-primary">Enviar</button>
  </div>
  <div class="col-8">
    <a href="/prototipo/" class="btn btn-danger">Regresar</a>
  </div>
</form>

      </div>
       <!--Fin Cuerpo del modal -->

    </div>
  </div>

         

</html>