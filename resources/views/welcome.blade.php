<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contato</title>
    <!-- Bootstrap minified -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Contato</h1>
        <hr />
        @if (count($errors)>0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <form action="/enviar" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            
            <div class="form-group">
                <label for="name">Categoria</label>
                <select name="categoria_id" id="categoria_id" class="form-control">
                    <option value="null">Selecione uma Categoria</option>
                    @foreach (App\Categoria::all() as $categoria)
                        <option value="{{$categoria->id }}">{{$categoria->name}}</option>
                    @endforeach
                </select>
            </div>
            <hr />

            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" id="nome" name="nome" class="form-control" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="text" id="email" name="email" class="form-control" placeholder="E-mail">
            </div>
            <div class="form-group">
                <label for="message">Mensagem</label>
                <textarea name="mensagem" id="message" class="form-control" placeholder="Digite sua Mensagem"></textarea>
            </div>

            <button type="submit" class="btn btn-default">Enviar</button>
        </form>
    </div>
</body>
</html>