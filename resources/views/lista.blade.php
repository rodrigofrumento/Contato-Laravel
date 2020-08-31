<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensagens enviadas</title>
    
    <!-- Bootstrap minified -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Lista de Mensagens</h1>
    <hr />
    <table class="table table-group">
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Mensagem</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contatos as $c)
                <tr>
                    <th scope="row">{{ $c->id}}</th>
                    <td>{{ $c->nome }}</td>
                    <td>{{ $c->email }}</td>
                    <td>{{ $c->mensagem }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</body>
</html>