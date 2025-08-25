@extends('layouts.admin')

@section('content')

<div class="card mb-4 mt-5 border-light shadow">
     <div class="card-header hstack gap-2">
        <span class="text-3xl">Listar users</span>
   <span class="ms-auto">
     <a href="{{ route('user.create') }}" class="btn btn-success">Cadastrar user</a> 
       
   </span>
  </div>
    
   <div class="card-body">
    <x-alert />
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
      <th scope="col">Telefone</th>
      <th scope="col">Endereco</th>
    </tr>
   </thead>
  <tbody>
   
    @forelse ($users as $user)

     <tr>
      <th>{{ $user->id }}</th>
      <td>{{ $user->name }}</td>
      <td>{{ $user->email }}</td>
      <td> {{ $user->telefone }}</td>
      <td> {{ $user->endereco }}</td>
      <td>
           <a href="{{ route('user.show', ['user' => $user->id]) }}"  class="btn btn-warning btn-sm">Vizualizar</a>
        <a href="{{ route('user.edit', ['user' => $user->id]) }}" class="btn btn-info btn-sm">Editar</a>

        <form method="POST" action="{{ route('user.destroy', ['user' => $user->id]) }}" class="d-inline">
            @csrf
            @method('delete')
            <button type="submit" onclick="return confirm('tem certeza que deseja apagar?')" class="btn btn-danger  btn-sm">Deletar</button>
        </form>
      </td>
    </tr>

  
         @empty
    @endforelse
   </table>
</tbody>
   </div>
</div>
@endsection
   