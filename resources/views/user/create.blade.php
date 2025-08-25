@extends('layouts.admin')
@section('content')

<div class="card mb-4 mt-5 border-light shadow">
  
     <div class="card-header hstack gap-2">
      
      <span class="" style="font-family: 'sans-serif'; font-size:20px">Cadastrar Usuários</span>
   <span class="ms-auto d-sm-flex flex-row">
     
      <a href="{{ route('user.index')"  class="btn btn-warning btn-sm">Vizualizar</a>
   </span>
    </div>
    
 <div class="card-body ">
     
    <x-alert />
    

    <form action="{{ route('user.store') }}" method="POST" class="row g-3"> 
        @csrf

          <div class="col-md-12">
            <label for="name" class="form-label">Nome</label>
            <input id="name" type="text" name="name" class="form-control" id="name" placeholder="Nome Completo" value="{{ old('name') }}">
        </div>
       
         <div class="col-md-12">
        <label for="email" class="form-label">Email</label>
         <input id="email" type="email" name="email" class="form-control" id="email" placeholder="Email do usuario" value="{{ old('email') }}">
        </div>
    
          <div class="col-md-12">
        <label for="telefone" class="form-label">Telefone</label>
         <input id="name" type="number" name="telefone" class="form-control" id="telefone" placeholder="Telefone do usuario" value="{{ old('telefone') }}">
        </div>
        
          <div class="col-md-12">
        <label for="endereco" class="form-label">Endereco</label>
         <input id="endereco" type="text" name="endereco" class="form-control" id="endereco" placeholder="Endereço do usuario" value="{{ old('endereco') }}">
        </div>
        
           <div class="col-md-12">
        <label for="password" class="form-label">Senha</label>
         <input id="password" type="number" name="password" class="form-control" id="password" placeholder="Senha de no minimo 6 caracteres" value="{{ old('password') }}">
        </div>
        

        <button type="submit" class="btn btn-success btn-sm">Cadastrar</button>
        
    </form>
 </div>
    @endsection