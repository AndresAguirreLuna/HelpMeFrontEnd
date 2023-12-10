
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HelpMeIU</title>
    <link rel="stylesheet" href="/Assets/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <!-- Content here -->
        <div id="titulo">
        <h3>Help Me</h3>
        </div>
        
    <nav class="navbar navbar-expand-lg navbar navbar-light" style="background-color: cadetblue;">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="https://www.iudigital.edu.co/images/11.-IU-DIGITAL.png" alt="Logo" width="60%" height="80%" class="d-inline-block align-text-top">
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
            <form action="{{ url('/api/usuarios') }}" method="get" class="row g-3">
              <form action="Controlador.php" method="post" class="row g-3">
                <div class="col-12">
                    <button type="submit" class="btn btn-link" style="color: black;" name="Boton">Admin Usuario </button>
                </div>
                </form>       
            </li>
            <li class="nav-item">
            <form action="{{ url('/api/casos') }}" method="get" class="row g-3">
                <div class="col-12">
                    <button type="submit" class="btn btn-link" style="color: black;" name="Boton">Admin Casos </button>
                </div>
                </form>            
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
            </li>
          </ul>
          <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              <button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
          </form>
     
       <br>
        </div>
      </div>
    </nav>
        <!-- Contenido -->
    
<div class="row" style="width: 90%; margin: 0px auto; text-align: left" >
    <h3>Crear Caso</h3>
</div>
<br>
<form action="{{ route('casoCreate')}}" method="post">
@csrf
    <main> 
        <div class="row" style="width: 90%; margin: 0px auto; text-align: left">
                <div class="from-group">
                <br>
                <label for="name">Fecha</label>
                <br>
                <input type="text" class="form-control" name="fecha" id="fecha">
                </div>
                <div class="from-group">
                <br>
                <label for="name">Latitud</label>
                <br>
                <input type="text" class="form-control" name="latitud" id="latitud">
                </div>
                <div class="from-group">
                <br>
                <label for="name">Longitud</label>
                <br>
                <input type="text" class="form-control" name="longitud" id="longitud">
                </div>
                <div class="from-group">
                <br>
                <label for="name">url Map</label>
                <br>
                <input type="text" class="form-control" name="urlmap" id="urlmap">
                </div>
                <div class="from-group">
                <br>
                <label for="name">Detalle</label>
                <br>
                <input type="text" class="form-control" name="detalle" id="detalle">
                </div>
                <div class="from-group">
                <br>
                <label for="name">Delitos</label>
                <br>
                <br>
    <input type="checkbox" name="opciones[]" value="1"> Acoso Sexual
    <br>
    <input type="checkbox" name="opciones[]" value="2"> Atraco
    <br>
    <input type="checkbox" name="opciones[]" value="3"> Asesinato

                </div>
                <div class="col s6">
                <br>
                <button class="btn btn-success btn-sm" type="submit">Crear</button>
        </div>
            </div>
            </div>
    </main>
</form>
