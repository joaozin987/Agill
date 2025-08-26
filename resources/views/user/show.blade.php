@extends('layouts.admin')
@section('content')


<div class="card mb-4 mt-5 border-light shadow">
  
     <div class="card-header hstack gap-2">
      
      <span class="" style="font-family: 'sans-serif'; font-size:20px">Vizualizar Usuários</span>
   <span class="ms-auto d-sm-flex flex-row gap-3">
     
     <a href="{{ route('user.index') }}"  class="btn btn-warning btn-sm">Listar</a>
      <a href="{{ route('user.show', ['user' => $user->id]) }}"  class="btn btn-warning btn-sm">Vizualizar</a>
        <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-info btn-sm">Editar</a>

        <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}" class="d-inline sm:mt-5">
            @csrf
            @method('delete')
            <button type="submit" onclick="return confirm('tem certeza que deseja apagar?')" class="btn btn-danger  btn-sm">Deletar</button>
        </form>
      </td>
    </tr>
    </div>
 <div class="card-body ">
     
    <x-alert />
         
      <dl class="row">
      <dt class="col-sm-3">Id</dt>
      <dd class="col-sm-9">{{ $user->id }}</dd>
     <dt class="col-sm-3">Nome</dt>
      <dd class="col-sm-9">{{ $user->name }}</dd>
       <dt class="col-sm-3">  E-mail</dt>
      <dd class="col-sm-9">{{ $user->email }}</dd>
       <dt class="col-sm-3">Telefone</dt>
      <dd class="col-sm-9">{{ $user->telefone }}</dd>
       <dt class="col-sm-3">Endereço</dt>
      <dd class="col-sm-9">{{ $user->endereco }}</dd>  
    </dl>

           
</span>
   
 </div>
</div>
@endsection