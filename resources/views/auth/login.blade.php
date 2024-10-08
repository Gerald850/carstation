<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <header>
    </header>
    <main>
        <div class="p-3 border-2 bg-white rounded-2">
            <form method="POST" action="{{ route('login') }}">
                <div class="">
                    <img src="img/logo-car.png" class="img-fluid" alt="logo">
                </div>
                <h3 class="fw-medium text-center">Iniciar Sesión</h3>
            @csrf
            <div class="form-group">
                <input type="email" id="email" name="email" class="form-control text-secondary mb-3" placeholder="Correo electrónico" required>
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" class="form-control text-secondary mb-3" placeholder="Contraseña" required>
            </div>
            <div class="d-grid gap-2">
                <button type="submit" class="submit">Ingresar</button>
            </div>
            <div class="p-3 text-center">
                <span class="fw-light text-secondary">¿Nuevo aquí? </span><a href="/registro" class="text-warning">crear una cuenta</a>
            </div>
            
        </form>

        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <p>{{ $error }}</p>
                @endforeach
                
            </div>
        @endif
        </div>
    </main>
    <footer>

    </footer>
</body>
</html>
