
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pacientes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

  <?php include '../../configuracion/navar.php' ?>
 
<body>

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1></h1>
            <!-- Inicio de modal de agregar -->
      <div class="container mt-3">
        <h3>Pacientes</h3>          
      </div>
        

<!-- El Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Encabezado del modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Nuevo Paciente</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Fin Encabezado del modal -->

                <!-- Cuerpo del modal Modal -->
                <form action="" method="post">
                <div class="modal-body">
                
                    <label for="">Paciente:</label>
                    <input type="text" onkeyup="un_espacio(this);" class="form-control" name="nombre"  value="" required value="" placeholder="" id="text" autocomplete = "off" onkeypress="return soloLetras(event);" minlength="4" maxlength="50" onkeyup="mayus(this);" >
                    <br>
                
                    <label for="">Nombres:</label>
                    <input type="text" onkeyup="un_espacio(this);" class="form-control" name="sector_comercial"  value="" required value="" placeholder="" id="txtsectorcomercial" autocomplete = "off" onkeypress="return soloLetras(event);" minlength="4" maxlength="50" onkeyup="mayus(this);" >
                    <br>
                    <label for="">Apellidos:</label>
                    <input type="text" class="form-control" name="" id="">
                    <br>
                    <label for="">DNI</label>
                    <input onblur="quitarespacios(this);" onkeyup="quitarespacios1(this);"  onkeydown="sinespacio(this);"   type="email" class="form-control" minlength="3" maxlength="50" name="correo" required value=""  value="" placeholder="" id="txtcorreo"  autocomplete = "off" >
                    <br>
                    <label for="">Teléfono</label>
                    <input onblur="quitarespacios(this);" onkeydown="sinespacio(this);"  onkeyup="quitarespacios1(this);" type="text" class="form-control" name="telefono" value="" value=""  placeholder="" id="txttelefono" autocomplete = "off" required minlength="8" maxlength="8" placeholder="" pattern="[0-9]+[1-9]+[0-9]+" title="8 caracteres y no todos ceros" onkeypress="return solonumero(event)" >
                    <br>
                    <label for="">Direccion</label>
                    <input onblur="quitarespacios(this);" onkeyup="quitarespacios1(this);"  onkeydown="sinespacio(this);"   type="email" class="form-control" minlength="3" maxlength="50" name="correo" required value=""  value="" placeholder="" id="txtcorreo"  autocomplete = "off" >
                    <br>
                    <label for="">Correo</label>
                    <input onblur="quitarespacios(this);" onkeyup="quitarespacios1(this);"  onkeydown="sinespacio(this);"   type="email" class="form-control" minlength="3" maxlength="50" name="correo" required value=""  value="" placeholder="" id="txtcorreo"  autocomplete = "off" >
                    <br>
                    
                </div>
                <!-- Fin Cuerpo del modal Modal -->
                <!-- pie del modal -->
                <div class="modal-footer">
      	            <button type="submit" name="accion" value="agregar" class="btn btn-primary" >Agregar</button>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                </div>
                <!-- Fin pie del modal -->
                </form>
            </div>
        </div>
    </div>
    <!-- Fin  de modal de agregar --><br>
      </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
            
          </div>
          
        </div>
        
      </div><!-- /.container-fluid -->
      
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            <!-- /.card -->
            
            <div class="card">
              <div class="card-header">
              <form id="form" action="" method="post">
                    <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
                       Nuevo paciente
                    </button>
              <!-- <button type="submit"  name="accion" value="reporte_pdf" class="btn btn-secondary buttons-pdf buttons-html5"  onclick="return confirm('¿Quieres generar reporte de Proveedores?')" onclick="textToPdf()"><span>Reporte PDF</span></button> -->
	               </div>
            </form>
                
              </div>
              
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                      <th class="desaparecerTemporalmente">Acciones</th>
                      <th class="desaparecerTemporalmente1" >ID</th>
                      <th class="desaparecerTemporalmente1">Nombres</th>
                      <th class="desaparecerTemporalmente1">Apellidos</th>
                      <th class="desaparecerTemporalmente1">DNI</th>
                      <th class="desaparecerTemporalmente1">Teléfono</th>
                      <th class="desaparecerTemporalmente1">Direccion</th>
                      <th class="desaparecerTemporalmente1">Correo</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                
                   
                  <tr>
                  <td class="desaparecerTemporalmente">
             
                        <!-- inicio boton editar -->
                      <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal2editar">
                      <i class="fas fa-pencil-alt"></i>
                      </button>
                     
                          <!-- El Modal -->
                          <div class="modal" id="myModal2editar">
                            <div class="modal-dialog">
                              <div class="modal-content">

                                <!-- Encabezado del modal -->
                                <div class="modal-header">
                                  <h4 class="modal-title">Editar paciente</h4>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Fin Encabezado del modal -->


                             <!-- Cuerpo del modal Modal -->
                <form action="" method="post">
                <div class="modal-body">
                    <label for="">Nombres:</label>
                    <input type="text" value="DANIELA" class="form-control" name="sector_comercial"   required value="" placeholder="" id="txtsectorcomercial" autocomplete = "off" onkeypress="return soloLetras(event);" minlength="4" maxlength="50" onkeyup="mayus(this);" >
                    <br>
                    <label for="">Apellidos:</label>
                    <input type="text" value="SAUCEDA" class="form-control" name="" id="">
                    <label for="">DNI</label>
                    <input  type="email" class="form-control"   value="0808199002635" placeholder=""   autocomplete = "off" >
                    <br>
                    <label for="">Teléfono</label>
                    <input  value="88950000"  type="text" class="form-control" name="telefono"  placeholder="" id="txttelefono" autocomplete = "off" required minlength="8" maxlength="8" placeholder="" pattern="[0-9]+[1-9]+[0-9]+" title="8 caracteres y no todos ceros" onkeypress="return solonumero(event)" >
                    <br>
                    <label for="">Direccion </label>
                    <input  value="Col. El carrizal"  type="email" class="form-control" minlength="3" maxlength="50" name="correo" required  placeholder="" id="txtcorreo"  autocomplete = "off" >
                    <br>
                    <label for="">Correo</label>
                    <input  value="correo@unah.hn"  type="email" class="form-control" minlength="3" maxlength="50" name="correo" required  placeholder="" id="txtcorreo"  autocomplete = "off" >
                    <br>
                    
                  
                  
                </div>
                <!-- Fin Cuerpo del modal Modal -->

                                <!-- pie del modal -->
                                <div class="modal-footer">
                                <button type="submit" name="accion" value="editar" class="btn btn-primary">Guardar</button>
                                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                </div>
                              </form>
                                  <!-- Fin pie del modal -->
                                  <form action="" method="post">
                              </div>
                            </div>
                          </div>
                          <!-- fin boton editar -->
                      
                      <button  value="eliminar" name="accion" 
                        onclick="return confirm('¿Quieres eliminar este dato?')"
                        type="submit" class="btn btn-danger " data-id="19">
                        <i class="fas fa-trash-alt"></i>
                    </button>
                  
                      </form>
</td>
                         
                    </td>
                                         <td class="desaparecerTemporalmente1">1</td>
                                         <td class="desaparecerTemporalmente1">DANIELA</td>
                                         <td class="desaparecerTemporalmente1">SAUCEDA</td>
                                         <td class="desaparecerTemporalmente1">0808199002635</td>
                                         <td class="desaparecerTemporalmente1">88950000</td>
                                         <td class="desaparecerTemporalmente1">Col. El carrizal</td>
                                         <td class="desaparecerTemporalmente1">correo@unah.hn</td>
                                         
                                        </tr>
                                   
                    
      </tr>
                  
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="float-right d-none d-sm-inline">
     
    </div>
    <!-- Default to the left -->
    <strong>HELP_CLINIC_SYSTEM &copy; 2022 </strong> 
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plantilla/AdminLTE-3.2.0/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plantilla/AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="../../plantilla/AdminLTE-3.2.0/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="../../plantilla/AdminLTE-3.2.0/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="../../plantilla/AdminLTE-3.2.0/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="../../plantilla/AdminLTE-3.2.0/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="../../plantilla/AdminLTE-3.2.0/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="../../plantilla/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="../../plantilla/AdminLTE-3.2.0/plugins/jszip/jszip.min.js"></script>
<script src="../../plantilla/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.html5.min.js"></script> 
 <script src="../../plantilla/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.print.min.js"></script>


<script src="../../plantilla/AdminLTE-3.2.0/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="../../plantilla/AdminLTE-3.2.0/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../plantilla/AdminLTE-3.2.0/dist/js/demo.js"></script>
<!-- Page specific script -->

<!-- INICIO muestra los botones, traduce y Agrupar -->

<script>
  $(function () {
    $("#example1").DataTable({
     
      language: {
                          processing: "Tratamiento en curso...",
                          search: "Buscar&nbsp;:",
                          lengthMenu: "Agrupar de _MENU_ items",
                          info: "Mostrando del item _START_ al _END_ de un total de _TOTAL_ items",
                          infoEmpty: "No existen datos.",
                          infoFiltered: "(filtrado de _MAX_ elementos en total)",
                          infoPostFix: "",
                          loadingRecords: "Cargando...",
                          zeroRecords: "No se encontraron datos con tu busqueda",
                          emptyTable: "No hay datos disponibles en la tabla.",
                          paginate: {
                                          first: "Primero",
                                          previous: "Anterior",
                                          next: "Siguiente",
                                          last: "Ultimo"
                                      },
                              aria: {
                                      sortAscending: ": active para ordenar la columna en orden ascendente",
                                      sortDescending: ": active para ordenar la columna en orden descendente"
                                    },

                          buttons:{
                            "copy": "Copiar",
                            "colvis": "Visibilidad",
                            "collection": "Colección",
                            "colvisRestore": "Restaurar visibilidad",
                            "copyKeys": "Presione ctrl o u2318 + C para copiar los datos de la tabla al portapapeles del sistema. <br \/> <br \/> Para cancelar, haga clic en este mensaje o presione escape.",
                            "copySuccess": {
                                "1": "Copiada 1 fila al portapapeles",
                                "_": "Copiadas %ds fila al portapapeles"
                                },
                                },    
                         },
                         
                         "responsive": true, "lengthChange": true, "autoWidth": false,
                          "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],                   
        
    })

      
    .buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
<!-- Fin muestra los botones y traduce y Agrupar -->

</body>


</html>


