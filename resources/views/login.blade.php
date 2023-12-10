
    
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>HelpMeIU</title>
    <link rel="stylesheet" href="./Assets/css/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

    <div class="container h-100">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-4">
                <h2 class="text-center">Iniciar Sesión</h2>
    <form action="{{ url('/api/loginIn') }}" method="post" class="row g-3">
    @csrf
    <div class="form-group">
                        <label for="username">Usuario:</label>
                        <input type="text" id="username" name="username" value="" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña:</label>
                        <input type="password" id="password" name="password"  value="" class="form-control" required>
                    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary" name="Boton">Sign in</button>
    </div>
    </form>
    </div>
        </div>
    </div>
  