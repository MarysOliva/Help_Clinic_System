<!DOCTYPE html>
<html>
<head>
<title>Prototipo</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif}

body, html {
  height: 100%;
  line-height: 1.8;
}

/* Full height image header */
.bgimg-1 {
  background-position: center;
  background-size: cover;
  background-image: url("https://img.freepik.com/foto-gratis/autenticacion-pie-medico-elegantes-iconos_1134-904.jpg?w=900&t=st=1668399089~exp=1668399689~hmac=82e64c483f70a7892e36912f4217e76dcf46bd762d6d6f03846e6321111aa187");
  min-height: 100%;
}

.w3-bar .w3-button {
  padding: 16px;
}

.w3-white1, .w3-hover-white:hover {
    color: #000;
    background-color: #3df3ef;
}
</style>
</head>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="#home" class="w3-bar-item w3-button w3-wide">Inicio</a>
    <!-- Right-sided navbar links -->
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">Nosotros</a>
      <a href="/Help_Clinic_System/agendar.php" class="w3-bar-item w3-button"><i class="fas fa-calendar-alt"></i>Agendar cita</a>
      <a href="/Help_Clinic_System/login.php" class="w3-bar-item w3-button"><i class="fa fa-user"></i> Ingresar</a>
      <a href="#contact" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i>Contactos</a>
    </div>
    <!-- Hide right-floated links on small screens and replace them with a menu icon -->

    <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-large w3-hide-medium" onclick="w3_open()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
</div>

<!-- Sidebar on small screens when clicking the menu icon -->
<nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Cerrar</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">Nosotros</a>
  <a href="/Help_Clinic_System/agendar.php" onclick="w3_close()" class="w3-bar-item w3-button">Agendar cita</a>
  <a href="/Help_Clinic_System/login.php" onclick="w3_close()" class="w3-bar-item w3-button">Ingresar</a>
  <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">Contactos</a>
</nav>

<!-- Header with full-height image -->
<header class="bgimg-1 w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-left w3-text-white" style="padding:48px">
    <span class="w3-jumbo w3-hide-small" style="color:#268d7e; "><h1 style="font-size: 74pt;  ">Help Clinic System</h1></span><br>
    <!-- <span class="w3-xxlarge w3-hide-large w3-hide-medium">Start something that matters</span><br> -->
    <span class="w3-large" style="  color: #9352e9;"><h2>Tu salud nuestra prioridad.</h2></span>
    <p><a href="#about"  class="w3-button w3-white1 w3-padding-large w3-large w3-margin-top w3-opacity w3-hover-opacity-off" >Sobre nosotros</a></p>
  </div> 
  <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding:24px 48px">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
</header>

<!-- About Section -->
<div class="w3-container" style="padding:128px 16px" id="about">
  <h3 class="w3-center">HELP CLINIC SYSTEM</h3>
  <p class="w3-center w3-large">Conoce mas sobre nosotros</p>
  <div class="w3-row-padding w3-center" style="margin-top:64px">
    <div class="w3-quarter">
      <i class="fas fa-laptop-medical w3-margin-bottom w3-jumbo w3-center"></i>
      <p class="w3-large">Historia</p>
      <p>La empresa se fundó con el objetivo principal de dar una atención médica
         especializada exclusivamente</p>
    </div>
    <div class="w3-quarter">
      <i class="fas fa-eye w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Mision</p>
      <p>Satisfacer de manera eficaz y eficiente las necesidades de cuidado de salud de la comunidad.
         Brindar a toda la comunidad la mejor atención medica basada en la evidencia científica y contenido ético, 
         acompañando al paciente y su familia.</p>
    </div>
    <div class="w3-quarter">
      <i class="fas fa-paper-plane w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Visión</p>
      <p>Crear y sostener un sistema integral de salud privada, que ofrezca un espacio de crecimiento y desarrollo 
        profesional enfocado en la excelencia y calidez en la asistencia al paciente y su familia.</p>
    </div>
    <div class="w3-quarter">
      <i class="fa fa-cog w3-margin-bottom w3-jumbo"></i>
      <p class="w3-large">Valores</p>
      <p>
        <ul>
            <li>Equidad</li>
            <li>Responsabilidad</li>
            <li>Etica</li>
            <li>Compromiso</li>
            <li>eficiencia</li>
        </ul>
       </p>
    </div>
  </div>
</div>








<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
  <span class="w3-button w3-xxlarge w3-black w3-padding-large w3-display-topright" title="Close Modal Image">×</span>
  <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
    <img id="img01" class="w3-image">
    <p id="caption" class="w3-opacity w3-large"></p>
  </div>
</div>

<!-- Skills Section -->
<div class="w3-container w3-light-grey w3-padding-64">
  <div class="w3-row-padding">
    <div class="w3-col m6">
      <h3>Especialidades.</h3>
      <p>Nuestros medicos cuentan con conocimientos médicos especializados relativos en diversas áreas
        específicas del cuerpo humano.</p>
    </div>
    <div class="w3-col m6">
      <p class="w3-wide"><i class="fas fa-head-side-mask w3-margin-right"></i>Cirugía Pediátrica</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
      </div>
      <p class="w3-wide"><i class="fas fa-heartbeat w3-margin-right"></i>Cardiología</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
      </div>
      <p class="w3-wide"><i class="fas fa-user-nurse w3-margin-right"></i>Dermatología</p>
      <div class="w3-grey">
        <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
      </div>
    </div>
  </div>
</div>


<!-- Contact Section -->
<div class="w3-container " style="padding:128px 16px" id="contact">
  <h3 class="w3-center">Nuestro Contactos</h3>
  <p class="w3-center w3-large">Mantengámonos en contacto. Mandanos un mensaje:</p>
  <div class="w3-light-grey" style="margin-top:48px">
    <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Universidad Nacional</p>
    <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +504 779976</p>
    <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: Ejemplo@unah.hn</p>
    <br>
    <form action="/action_page.php"  target="_blank">
      <p><input class="w3-input w3-border" type="text" placeholder="Nombre" required name="Name"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Correo" required name="Email"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Sujeto" required name="Subject"></p>
      <p><input class="w3-input w3-border" type="text" placeholder="Mensaje" required name="Message"></p>
      <p>
        <button class="w3-button w3-black" type="submit">
          <i class="fa fa-paper-plane"></i> Enviar mensaje
        </button>
      </p>
    </form>
    <!-- Image of location/map -->
   
  </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>Regresar a inicio</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <!-- <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p> -->
</footer>
 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>

</body>
</html>
