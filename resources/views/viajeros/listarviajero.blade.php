<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <title>VIAJERO</title>
</head>

<body>
    <h1>listar viajeros</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">nombre</th>
                <th scope="col">dni</th>
                <th scope="col">direccion</th>
                <th scope="col">telefono</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($viajeros as $viajero)
                <tr>
                    <th scope="row">1</th>
                    <td>{{ $viajero->nombre }}</td>{{--la variable que cree en el controlador y le paso los atributos  --}}
                    <td>{{ $viajero->dni }}</td>
                    <td>{{ $viajero->direccion }}</td> 
                    <td>{{ $viajero->telefono }}</td>                   
                    <td><a href="{{ route('viajero.edit', $viajero->id) }}">Editar</a></td>{{--aca le coloco donde el controlador ese teacher.edit  --}}
                    <td>
                        <form action="{{ route('viajero.destroy', $viajero->id) }}" method="POST">{{--aca le coloco donde el controlador ese teacher.edit--}}
                            @csrf
                            @method('delete')
                            <button type="submit"  class="btn btn-primary">Eliminar</button>
                        </form>
                    </td>



                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
