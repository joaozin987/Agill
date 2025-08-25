<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Seu App</title>
</head>
<body>

<header class="p-3 bg-success text-white" style="--bs-bg-opacity: .9;">
  <div class="container">
    <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-between">
      
      <ul class="nav col-12 col-lg-auto mb-2 justify-content-center mb-lg-0">
        <li><a href="{{ route('user.create') }}" class="nav-link px-2 text-white">Início</a></li>
        <li><a href="{{ route('user.index') }}" class="nav-link px-2 text-white">Usuarios</a></li>
        <li><a href="#" class="nav-link px-2 text-white">Trabalhe Conosco</a></li>
      </ul>

      <div class="text-end">
        <button type="button" class="btn btn-light">Portal do Cliente</button>
      </div>

    </div>
  </div>
</header>

<div class="bg-success d-flex align-items-center justify-content-center" style="--bs-bg-opacity: .8; min-height: 300px;border-radius: 2px;">
    <img src="https://www.agill.com.br/img/logo_agill_branca.png" alt="Agill Logo" width="350">
</div>
 
  <div>
    <h1 class="text-success text-center text-uppercase  mt-3" style="font-family: Verdana, Geneva, Tahoma, sans-serif">Gerenciamento de Usuários</h1>
  </div>
  <div class="container">
  @yield('content')
  </div>
</body>
</html>