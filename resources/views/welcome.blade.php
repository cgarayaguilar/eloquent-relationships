<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Relaciones</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    </head>
    <body>
    <main class="container">
        <h1>Usuarios</h1>
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Instagram</th>
                <th scope="col">Pais</th>
                <th scope="col">Nivel</th>
                <th scope="col">&nbsp;</th>
            </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->profile->instagram}}</td>
                            <td>{{ $user->location->country }}</td>
                            <td>{{ $user->level->name }}</td>
                            <td><a href="{{ route('profile', $user->slug)  }}" class="btn btn-primary">
                                    <i class="fas fa-external-link-alt"></i>
                                </a></td>
                        </tr>

                @endforeach
            </tbody>
        </table>
    </main>

    </body>
</html>
