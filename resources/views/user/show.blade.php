<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
     <a href="{{ route('user.index') }}">Listar user</a>   
      <a href="{{ route('user.edit', ['user' => $user->id]) }}">Editar user</a>   

    <h1>Vizualizar usuario</h1>

        
    @if (session('success'))
    <p style="color: green; font-size: 20px; font-family:serif;">
        {{ session('success') }}
    </p>
    @endif

    Id: {{ $user->id }} <br> <hr>
    Nome: {{ $user->name }} <br> <hr>
    E-mail: {{ $user->email }} <br> <hr>
    Telefone: {{ $user->telefone }} <br> <hr>
    Endereço: {{ $user->endereco }} <br> <hr>
</body>
</html>