
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Usuarios</title>
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
        <h3>Usuarios</h3>          
      </div>
        

<!-- El Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Encabezado del modal -->
                <div class="modal-header">
                    <h4 class="modal-title">Nuevo proveedor</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <!-- Fin Encabezado del modal -->

                <!-- Cuerpo del modal Modal -->
                <form action="" method="post">
                <div class="modal-body">
                
                    <label for="">Usuario:</label>
                    <input type="text" onkeyup="un_espacio(this);" class="form-control" name="nombre"  value="" required value="" placeholder="" id="text" autocomplete = "off" onkeypress="return soloLetras(event);" minlength="4" maxlength="50" onkeyup="mayus(this);" >
                    <br>
                    <label for="">Rol:</label>
                    <select name="" class="form-control"  id="">
                      <option value="">Seleccione un rol</option>
                      <option value="">ADMINISTRADOR</option>
                      <option value="">MEDICOS</option>
                    </select>
                    <label for="">Nombres:</label>
                    <input type="text" onkeyup="un_espacio(this);" class="form-control" name="sector_comercial"  value="" required value="" placeholder="" id="txtsectorcomercial" autocomplete = "off" onkeypress="return soloLetras(event);" minlength="4" maxlength="50" onkeyup="mayus(this);" >
                    <br>
                    <label for="">Apellidos:</label>
                    <TEXtarea  style="background-color: white;" onkeyup="un_espacio(this);" name="direccion" class="form-control" id="" cols="40" rows="5"
                    autocomplete = "off"  onkeypress="return soloLetras(event);" minlength="3" maxlength="245"  ></TEXtarea>
                    <br>
                    <label for="">Teléfono</label>
                    <input onblur="quitarespacios(this);" onkeydown="sinespacio(this);"  onkeyup="quitarespacios1(this);" type="text" class="form-control" name="telefono" value="" value=""  placeholder="" id="txttelefono" autocomplete = "off" required minlength="8" maxlength="8" placeholder="" pattern="[0-9]+[1-9]+[0-9]+" title="8 caracteres y no todos ceros" onkeypress="return solonumero(event)" >
                    <br>
                    <label for="">Correo</label>
                    <input onblur="quitarespacios(this);" onkeyup="quitarespacios1(this);"  onkeydown="sinespacio(this);"   type="email" class="form-control" minlength="3" maxlength="50" name="correo" required value=""  value="" placeholder="" id="txtcorreo"  autocomplete = "off" >
                    <br>
                    <label for="">DNI</label>
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
                       Nuevo usuario
                    </button>
              <button type="submit"  name="accion" value="reporte_pdf" class="btn btn-secondary buttons-pdf buttons-html5"  onclick="return confirm('¿Quieres generar reporte de Proveedores?')" onclick="textToPdf()"><span>Reporte PDF</span></button>
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
                      <th class="desaparecerTemporalmente1">Usuario</th>
                      <th class="desaparecerTemporalmente1">Rol</th>
                      <th class="desaparecerTemporalmente1">Nombres</th>
                      <th class="desaparecerTemporalmente1">Apellidos</th>
                      <th class="desaparecerTemporalmente1">Teléfono</th>
                      <th class="desaparecerTemporalmente1">Correo</th>
                      <th class="desaparecerTemporalmente1">DNI</th>
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
                                  <h4 class="modal-title">Editar proveedor</h4>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Fin Encabezado del modal -->


                                <!-- Cuerpo del modal Modal -->
                                <form action="" method="post">
                                          <div class="modal-body">
                                          <input type="hidden" name="nombre_anterior" value="">
                                              <!--<label  for="">Id Proveedor:</label> -->
                                              <input type="hidden" class="form-control" name="id_proveedor" readonly required value="" placeholder="" id="txtPrecio_Compra"   >
                                              <br>
                                              <label for="">Nombre Proveedor:</label>
                                              <input onkeyup="un_espacio(this);" onkeypress="return soloLetras(event);" type="text" class="form-control" name="nombre" autocomplete = "off" required value="" placeholder="" id="txtPrecio_Compra" onkeypress="return soloLetras(event);" onkeyup="mayus(this);" >
                                              <br>
                                              <label for="">Nombre Referencia:</label>
                                             <input onkeyup="un_espacio(this);" onkeypress="return soloLetras(event);"  type="text" class="form-control" name="nombre_referencia" autocomplete = "off" required value="" placeholder="" id="txtnombrer" onkeypress="return soloLetras(event);" onkeyup="mayus(this);" >
                                             <br>
                                             <label for="">Sector Comercial:</label>
                                             <input onkeyup="un_espacio(this);" onkeypress="return soloLetras(event);"  type="text" class="form-control" name="sector_comercial" autocomplete = "off" required value="" placeholder="" id="txtsectorcomercial" onkeypress="return soloLetras(event);" onkeyup="mayus(this);" >
                                             <br>
                                             <label for="">Dirección:</label>
                                             <input onkeyup="un_espacio(this);"   type="text" class="form-control" name="direccion" autocomplete = "off" required value="" placeholder="" id="txtdireccionproveedor"  onkeyup="mayus(this);" >
                                             <br>
                                             <label for="">Teléfono:</label>
                                             <input onblur="quitarespacios(this);" onkeydown="sinespacio(this);"  onkeyup="quitarespacios1(this);" type="text" class="form-control" name="telefono" autocomplete = "off" required value="" placeholder="" id="txttelefono" minlength="8" maxlength="8" required value="" placeholder="" required pattern="[0-9]+[1-9]+[0-9]+" title="8 caracteres y no todos ceros" onkeypress="return solonumero(event)"  >
                                             <br>
                                             <label for="">Correo:</label>
                                             <input onblur="quitarespacios(this);" onkeydown="sinespacio(this);"  onkeyup="quitarespacios1(this);"  type="email" class="form-control" name="correo" autocomplete = "off" required value="" placeholder="" id="txtcorreo"  >
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
                                         <td class="desaparecerTemporalmente1">ADMIN</td>
                                         <td class="desaparecerTemporalmente1">ADMINISTRADOR</td>
                                         <td class="desaparecerTemporalmente1">DAVID</td>
                                         <td class="desaparecerTemporalmente1">SANCHEZ</td>
                                         <td class="desaparecerTemporalmente1">8965777</td>
                                         <td class="desaparecerTemporalmente1">correo@unah.hn</td>
                                         <td class="desaparecerTemporalmente1">08010000222772</td>
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
    <strong>SEACCO &copy; 2022 </strong> 
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
      "order": [[ 1, "desc" ]],
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
<!-- un espacio entre palabras -->
<script type="text/javascript" src="../../js/un_espacio.js"></script>
<!-- Enlace Script para que solo permita letras -->
<script type="text/javascript" src="../../js/solo_letras.js"></script>

<!-- Enlace Script para que convierta a mayusculas las teclas que se van pulsando -->
<script type="text/javascript" src="../../js/converir_a_mayusculas.js"></script>

<!-- Enlace Script para quitar espacios en blanco -->
<script type="text/javascript" src="../../js/quitar_espacios.js"></script>
</body>

<!-- // Inicio para exportar en pdf // -->
<?php

	require '../../conexion/conexion.php';
	$sql = "SELECT * FROM tbl_proveedores 
  ORDER BY NOMBRE asc";
	$query = $conn->query($sql);
	$data = array();
	while($r=$query->fetch_object()){
	$data[] =$r;
	}
?>
<?php 
    $select_nombre = "SELECT * FROM tbl_parametros WHERE PARAMETRO='NOMBRE'";
    $select_nombre1 = mysqli_query($conn, $select_nombre);
    if (mysqli_num_rows($select_nombre1) > 0)
    {
    while($row = mysqli_fetch_assoc($select_nombre1))
      { 
          $nombre_constructora = $row['VALOR'];
      } 
    }
?>

<script>
		//para descar al tocar el boton	
    var form = document.getElementById("form")
  
	form.addEventListener("submit",function(event) {
  
	event.preventDefault()
  $(".desaparecerTemporalmente1").css("display","");
  $(".desaparecerTemporalmente").css("display","none");

				const pdf = new jsPDF('L', 'mm', 'letter');			
        	

				
				

				pdf.autoTable(
				{ 
          html:'#example1',
					
					margin:{ top: 30 },
          
          columnStyles: {
      
            0: {cellWidth: 11},
            1: {cellWidth: 41}, 
            2: {cellWidth: 40},  
            3: {cellWidth: 35},  
            4: {cellWidth: 55},  
            5: {cellWidth: 20},            
            6: {cellWidth: 50}
           } 
          }
				);
			//Inicio Encabezado y pie de pagina
			const pageCount = pdf.internal.getNumberOfPages();
			for(var i = 1; i <= pageCount; i++) 
			{
				pdf.setPage(i);
												//////// Encabezado ///////
				//Inicio para imagen de logo 
				var logo = new Image();
				logo.src = '../../imagenes/seacco.jpg';
				pdf.addImage(logo, 'JPEG',14,7,24,15);
				//Fin para imagen de logo 

				//muestra el titulo principal
				pdf.setFont('Arial');
				pdf.setFontSize(17);
				pdf.text('<?php echo $nombre_constructora ?>', pdf.internal.pageSize.getWidth() / 2, 15, null, 'center');

				//muestra el titulo secundario
				pdf.setFont('times');
				pdf.setFontSize(12);
				pdf.text("Reporte de proveedores", pdf.internal.pageSize.getWidth() / 2, 20, null, 'center');

												//////// pie de Pagina ///////
				//muestra la fecha
				pdf.setFont('times');
				pdf.setFontSize(9);
				var today = new Date();
				let horas = today.getHours()
				let jornada = horas >=12 ? 'PM' : 'AM';
				var newdat = "Fecha: " + today.getDate() + "/" + (today.getMonth()+1) + "/" + today.getFullYear() + " " + (horas % 12) + ":" + today.getMinutes() + ":" + today.getSeconds() + " " + jornada;
				pdf.text(245-20,297-284,newdat);

				//muestra el numero de pagina
				pdf.text('Pagina ' + String(i) + '/' + String(pageCount),282-20,297-89,null,null,"right");
			}
				//Fin Encabezado y pie de pagina

							pdf.save('Reporte de proveedores.pdf');
              $(".desaparecerTemporalmente").css("display","");
	})

</script>
<script type="text/javascript" src="../../js/un_espacio.js"></script>
<!-- // Fin para exportar en pdf // -->
<script type="text/javascript" src="../../js/evitar_reenvio.js"></script>
<script type="text/javascript"> function solonumero(e) {
        tecla = (document.all) ? e.keyCode : e.which;
        if (tecla==8) return true;
        else if (tecla==0||tecla==9)  return true;
       // patron =/[0-9\s]/;// -> solo letras
        patron =/[0-9-\s]/;// -> solo numeros
        te = String.fromCharCode(tecla);
        return patron.test(te);
    }
	</script>
</html>


