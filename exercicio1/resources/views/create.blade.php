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
                    <h1>
                        @if (isset($usuario))
                            Editar usuário
                        @else
                            Cadastro de usuário
                        @endif
                    </h1>
                </div>

                <div class="col-6" style="justify-content: end; display: flex;">
                    <a href="{{ route('getUsers') }}">
                        <button class="btn btn-primary">Voltar para listagem</button>
                    </a>
                </div>
            </div>

            @if (isset($usuario))
                <form method="post" action="{{ route('update', $usuario->id) }}">
                    @method('PUT')
                @else
                    <form method="post" action="{{ route('store') }}">
            @endif
            @csrf

            <div class="form-group mb-2">
                <label for="name">Nome completo:</label>
                <input type="text" id="name" name="name" class="form-control"
                    @error('name') is-invalid @enderror value="{{ $usuario->name ?? old('name') }}">
                @error('name')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="userName">Nome de login:</label>
                <input type="text" id="userName" name="userName" class="form-control"
                    @error('userName') is-invalid @enderror value="{{ $usuario->userName ?? old('userName') }}">
                @error('userName')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="zipCode">CEP</label>
                <input type="text" id="zipCode" name="zipCode" class="form-control"
                    @error('zipCode') is-invalid @enderror value="{{ $usuario->zipCode ?? old('zipCode') }}">
                @error('zipCode')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="email">Email:</label>
                <input type="text" id="email" name="email" class="form-control"
                    @error('email') is-invalid @enderror value="{{ $usuario->email ?? old('email') }}">
                @error('email')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="form-group mb-2">
                <label for="password">Senha:</label>
                <input type="password" id="password" name="password" class="form-control"
                    @error('password') is-invalid @enderror value="{{ $usuario->password ?? old('password') }}">
                @error('password')
                    <div class="invalid-feedback d-block">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            @if (isset($error))
                <span class="mb-4" style="color: red"> {{ $message }}</span>
            @endif
            
        </div>

        <div class="col-12 text-center mt-3">
            <input class="btn btn-success" type="submit"
                value="@if (isset($usuario)) Editar @else Cadastrar @endif">
        </div>

        </form>

    </div>
</body>

</html>
