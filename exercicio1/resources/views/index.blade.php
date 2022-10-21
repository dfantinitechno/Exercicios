<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Superlogica</title>
    <link rel="stylesheet" href="{{ url('assets/bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container">

        <div class="col-10 m-auto">
            <div class="row pt-4 mb-4">
                <div class="col-6">
                    <h1>Listagem de usuários</h1>
                </div>

                <div class="col-6" style="justify-content: end; display: flex;">
                    <a href="{{ route('create') }}">
                        <button class="btn btn-success">Cadastrar</button>
                    </a>
                </div>
            </div>

            @csrf
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Usuário</th>
                        <th scope="col">CEP</th>
                        <th scope="col">Email</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($usuarios as $usuario)
                        <tr>
                            <th scope="row">{{ $usuario->id }}</th>
                            <td>{{ $usuario->name }}</td>
                            <td>{{ $usuario->userName }}</td>
                            <td>{{ $usuario->zipCode }}</td>
                            <td>{{ $usuario->email }}</td>
                            <td style="display: flex; justify-content: center;">
                                <a class="mr-2" href="{{ url("users/create/$usuario->id") }}">
                                    <button class="btn btn-primary btn-sm">Editar</button>
                                </a>
                                <form method="post" action="{{ route('delete', $usuario->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Deletar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</body>

</html>
