<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
      <a href="{{ route('user.index') }}">Listar</a>   
          <a href="{{ route('user.show', ['user' => $user->id]) }}">Vizualizar</a>   
   
    <h1>Editar usuario</h1>

      @if ($errors->any())
        <div style="color: brown;">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p> 
            @endforeach
        </div>
    @endif

    <form action="{{ route('user.update', ['user' => $user->id]) }}" method="POST"> 
        @csrf
        @method('PUT')

         <input type="hidden" name="id" value="{{ $user->id }}">
        <label for="name">Nome</label>
        <input id="name" type="text" name="name" placeholder="Nome Completo" value="{{ old('name', $user->name) }}">
        <br><br>
        
        <label for="email">E-mail</label>
        <input id="email" type="email" name="email" placeholder="Email do usuario" value="{{ old('email',  $user->email) }}">
        <br><br>
        
        <label for="telefone">Telefone</label>
        <input id="telefone" type="text" name="telefone" placeholder="Digite seu Telefone" value="{{ old('telefone',  $user->telefone) }}"> 
        <br><br>
        
        <label for="endereco">Endereço</label>
        <input id="endereco" type="text" name="endereco" placeholder="Digite seu Endereço" value="{{ old('endereco',  $user->endereco) }}">
        <br><br>
        
        <label for="password">Senha</label>
        <input id="password" type="password" name="password" placeholder="Senha com no minimo 6 caracteres" value="{{ old('password') }}">
        <br><br>

        <button type="submit">Salvar</button>
        
    </form>
</body>
</html>