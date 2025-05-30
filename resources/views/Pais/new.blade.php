<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Agregar País</title>
</head>

<body>
    <div class="container">
        <h1>Agregar País</h1>

        <!-- Mostrar errores de validación -->
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('pais.store') }}">
            @csrf
            <div class="mb-3">
                <label for="pais_codi" class="form-label">Código del País</label>
                <input type="text" required class="form-control" id="pais_codi" name="pais_codi" maxlength="3" minlength="3"
                    placeholder="Ejemplo: ARG" oninput="this.value = this.value.toUpperCase()">
                <div class="form-text">Debe contener exactamente 3 letras en mayúsculas.</div>
            </div>
            <div class="mb-3">
                <label for="pais_nomb" class="form-label">Nombre del País</label>
                <input type="text" required class="form-control" id="pais_nomb" name="pais_nomb" placeholder="Ingrese el nombre del país">
            </div>
            <div class="mb-3">
                <label for="pais_capi" class="form-label">Nacionalidad</label>
                <input type="text" required class="form-control" id="pais_capi" name="pais_capi" placeholder="Ingrese la nacionalidad">
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="{{ route('pais.index') }}" class="btn btn-warning">Cancelar</a>
            </div>
        </form>
    </div>

    <!-- Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
