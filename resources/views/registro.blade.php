<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORMULARIO DE REGISTRO</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="/css/registro.css">
</head>
<body>
    <header class="title1">
        <h1>REGISTRO DE ADMINISTRADOR</h1>
    </header>
    <main>
        <nav class="title1">
        <h3>FORMULARIO</h3>
        </nav>
        <section class="p-2">
        @if(session('success'))
            <div>{{ session('success') }}</div>
        @endif
            <div class="container fw-bold">
                <form class="row" action="{{ route('users.store') }}" method="POST">
                @csrf
                    <div class="col-12 col-md-6 form-group p-2">
                        <label class="mb-1">Nombre Completo:</label>
                        <input type="text" class="form-control text-secondary" name="name" id="name" placeholder="Nombre Completo" required>
                    </div>
                    <div class="col-12 col-md-6 form-group p-2">
                        <label class="mb-1">Dirección:</label>
                        <input type="text" class="form-control text-secondary" name="address" id="address" placeholder="Dirección" required>
                    </div>
                    <div class="col-12 col-md-6 form-group p-2">
                        <label class="mb-1">Zona:</label>
                        <input type="text" class="form-control text-secondary" name="zone" id="zone" placeholder="Zona" required>
                    </div>
                    <div class="col-12 col-md-6 form-group p-2">
                        <label class="mb-1">Celular:</label>
                        <input type="number" class="form-control text-secondary" name="phone" id="phone" placeholder="Celular" required>
                    </div>
                    <div class="col-12 col-md-6 form-group p-2">
                        <label class="mb-1">Correo Electrónico:</label>
                        <input type="email" class="form-control text-secondary" name="email" id="email" placeholder="Correo Electrónico" required>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="submit" type="submit">Registrarse</button>
                    </div>
                </form>
            </div>
        </section>
    </main>
    <footer>

    </footer>
    
</body>
</html>