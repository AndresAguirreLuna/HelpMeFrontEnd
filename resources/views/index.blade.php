<!doctype html>
<html lang="en">

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
        <div class="container mt-4">
    <div class="alert alert-primary" role="alert">
        <h4 class="alert-heading">¡Bienvenido/a a nuestra aplicación!</h4>
        <p class="lead">En este espacio, nos comprometemos a brindar apoyo y asistencia a aquellos que han experimentado situaciones difíciles como atracos, acoso sexual o pérdida de seres queridos. Reconocemos la importancia de cada relato y la sensibilidad que rodea estos temas.</p>
        <hr class="my-4">
        <p>Nuestra prioridad es proporcionar un entorno seguro y confidencial para compartir información relevante y buscar ayuda. Valoramos profundamente tu confianza en el uso de la plataforma.</p>
        <p>Si has sido víctima de alguna situación similar o estás buscando información sobre estos temas, te alentamos a utilizar esta aplicación para consultar y/o registrar casos en temas de inseguridad.</p>
        <p>Estamos aquí para apoyarte en cada paso del camino. Juntos, trabajaremos para abordar estos desafíos y que puedas transitar seguro/a.</p>
    </div>
</div>
