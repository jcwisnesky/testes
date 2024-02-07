<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Editar Corretor</title>
    <!-- Add your CSS here -->
</head>
<body>
    <h1>Editar Corretor</h1>

    @if ($errors->any())
    <div class="alert alert-danger" style="background-color: rgb(202, 125, 125); color: white; text-align: center; margin: 20px auto; max-width: 50%;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('corretors.update', $corretor->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="cpf">CPF:</label>
    <input type="text" id="cpf" name="cpf" value="{{ $corretor->cpf }}" maxlength="11" required>

    <label for="creci">CRECI:</label>
    <input type="text" id="creci" name="creci" value="{{ $corretor->creci }}" maxlength="8" required>

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="nome" value="{{ $corretor->nome }}" maxlength="20" required>

    <button type="submit">Atualizar</button>
</form>
</body>
</html>
