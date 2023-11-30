<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @vite('resources/css/app.css')

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       
    </head>
    <body >
        <h1 class="bg-blue-200">Registrar en la base de datos.</h1>

        <form action="" method="post">
            @csrf

            <label for="">Ingresar nombre: </label>
            <input placeholder="nombre" name="nombre" type="text">

            <label for="">Ingresar Cedula: </label>
            <input placeholder="Cedula" name="cedula" type="number">

            <label for="">Ingresar Telefono: </label>
            <input placeholder="Telefono" name="telefono" type="number">

            <label for="">Ingresar direccion: </label>
            <input placeholder="Direccion" name="direccion" type="text">


            <input class="bg-blue-400" type="submit" value="Enviar">
        </form>




        <h1 class=" mt-20 bg-blue-200">Mostrar Usuarios </h1>
        
        <table>

            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Cedula</th>
                <th>Telefono</th>
                <th>Direccion</th>
            </tr>

            @foreach ($infoUsers as $item)
                <tr>
                    <th>{{$item->id}}</th>
                    <th>{{$item->nombre}}</th>
                    <th>{{$item->cedula}}</th>
                    <th>{{$item->telefono}}</th>
                    <th>{{$item->direccion}}</th>
                </tr>
            @endforeach

        </table>


        <h1 class=" mt-20 bg-blue-200">Eliminar usuarios</h1>

 





    </body>
</html>
