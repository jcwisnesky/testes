<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Cadastro</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <h1 id="tituloH1">Cadastro de Corretor</h1>

    @if ($errors->any())
        <div class="alert alert-danger" style="background-color: rgb(202, 125, 125); color: white; text-align: center; margin: 20px auto; max-width: 50%;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('mensagem.sucesso'))
        <div class="alert alert-success" style="text-align: center; margin: 20px auto; max-width: 50%;">
            {{ session('mensagem.sucesso') }}
        </div>
    @endif

    <form id="formularioCadastro" action="{{ url('/') }}" method="post" onsubmit="return validarFormulario()">
        @csrf
        <div class="input-group">
            <div>
                <label for="cpf">CPF:</label>
                <input type="text" id="cpf" name="cpf" placeholder="Digite o CPF: " maxlength="11" type="number" required>
            </div>
            <div>
                <label for="creci">CRECI:</label>
                <input type="text" id="creci" name="creci" placeholder="Digite o CRECI: " maxlength="8" type="number" required>
            </div>
        </div>
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="Digite o Nome: " maxlength="20" required>
        <button type="submit" id="botaoEnviar">Enviar</button>
    </form>

    <table border="1" id="tabelaRegistros">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Creci</th>
                <th>CPF</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($todosCorretores as $registro)
                <tr>
                    <td>{{ $registro->id }}</td>
                    <td>{{ $registro->nome }}</td>
                    <td>{{ $registro->creci }}</td>
                    <td>{{ $registro->cpf }}</td>
                    <td class="acao-buttons">
                        <a href="{{ url('/edit/'.$registro->id) }}" class="btn btn-primary">Editar</a>
                        <a href="{{ url('/delete/'.$registro->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">Excluir</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
