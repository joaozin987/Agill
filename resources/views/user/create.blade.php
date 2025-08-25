<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Agill</title>
</head>
<body>
    <a href="{{ route('user.index') }}">Voltar para lista de users</a>
    <h2>Cadastrar users</h2>
    
    @if ($errors->any())
        <div style="color: brown;">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p> 
            @endforeach
        </div>
    @endif

    <form action="{{ route('user.store') }}" method="POST"> 
        @csrf

        <label for="name">Nome</label>
        <input id="name" type="text" name="name" placeholder="Nome Completo" value="{{ old('name') }}">
        <br><br>
        
        <label for="email">E-mail</label>
        <input id="email" type="email" name="email" placeholder="Email do usuario" value="{{ old('email') }}">
        <br><br>
        
        <label for="telefone">Telefone</label>
        <input id="telefone" type="text" name="telefone" placeholder="Digite seu Telefone" value="{{ old('telefone') }}"> 
        <br><br>
        
        <label for="endereco">Endereço</label>
        <input id="endereco" type="text" name="endereco" placeholder="Digite seu Endereço" value="{{ old('endereco') }}">
        <br><br>
        
        <label for="password">Senha</label>
        <input id="password" type="password" name="password" placeholder="Senha com no minimo 6 caracteres" value="{{ old('password') }}">
        <br><br>

        <button type="submit">Cadastrar</button>
        
    </form>
</body>
</html>