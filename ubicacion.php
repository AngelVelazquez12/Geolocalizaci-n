<?php 
# CDN de MDB 4.19.0
// require_once 'cdn.html';
?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Geolocalización</title>
  <link rel="icon" type="text/css" href="images/icono.png">

  <!-- Incluye el CSS de Bootstrap -->
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="icon" href="https://cdn-icons-png.flaticon.com/256/273/273259.png">
  <style>
        /* Estilo para el footer */
        footer {
            background-color: #f0f0f0; /* Color de fondo gris */
            padding: 20px 0; /* Espaciado interno arriba y abajo */
            text-align: center; /* Centrar el contenido del footer */
        }
    </style>
  
</head>
<body>

  <!-- Barra de navegación -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.html">Geolocalizacion</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="home.php">¿Qué es Geolocalización?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="tipos.php">Tipos Más Utilizados</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="apps.php">5 Apps</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="api.php">¿Qué es una API?</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="ubicacion.php">Mi Ubicación</a>
        </li>
      </ul>
      <span class="navbar-text">
        Aqui se mostrara su ubicacion.
      </span>
    </div>
  </div>
</nav>

  <div class="container mt-5">
    <h1 class="mb-4">Mostrar mi Ubicación</h1>
    <div id='ubicacion'></div>
    <br> <center>
    <div id="demo"></div>
    <div id="mapholder"></div>
    <script src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <br>
    <button class="btn btn-primary" onclick="cargarmap()">Mostrar Mi Ubicación</button>

    <script type="text/javascript">
      var x=document.getElementById("demo");
      function cargarmap() {
        navigator.geolocation.getCurrentPosition(showPosition,showError);
        
        function showPosition(position) {
          lat=position.coords.latitude;
          lon=position.coords.longitude;
          latlon=new google.maps.LatLng(lat, lon)
          mapholder=document.getElementById('mapholder')
          mapholder.style.height='600px';
          mapholder.style.width='800px';
          var myOptions={
            center:latlon,zoom:10,
            mapTypeId:google.maps.MapTypeId.ROADMAP,
            mapTypeControl:false,
            navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
          };
          var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
          var marker=new google.maps.Marker({position:latlon,map:map,title:"You are here!"});
        }

        function showError(error) {
          switch(error.code) {
            case error.PERMISSION_DENIED:
            x.innerHTML="Denegada la petición de Geolocalización en el navegador."
            break;
            case error.POSITION_UNAVAILABLE:
            x.innerHTML="La información de la localización no está disponible."
            break;
            case error.TIMEOUT:
            x.innerHTML="El tiempo de petición ha expirado."
            break;
            case error.UNKNOWN_ERROR:
            x.innerHTML="Ha ocurrido un error desconocido."
            break;
          }
        }
      }
    </script> 
  </div>    
</div>



<footer style="margin-top: 60px;">
        <div class="container" >
            <p>Derechos de autor © 2023 - Angel Velazquez</p>
        </div>
    </footer>


<!-- Incluye el JavaScript de Bootstrap y jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
