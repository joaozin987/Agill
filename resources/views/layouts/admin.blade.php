<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Agill</title>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success" style="--bs-bg-opacity: .9;">
        <div class="container">
         

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a href="{{ route('user.create') }}" class="nav-link text-white">Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('user.index') }}" class="nav-link text-white">Usuários</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link text-white">Trabalhe Conosco</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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