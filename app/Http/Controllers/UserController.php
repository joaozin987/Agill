<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Iluminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function index(Request $request){
       $status = $request->query('status', 'ativos');
       $query = User::query();
       if ($status === 'inativos'){
          $query->where('ativo', false);
       } elseif($status === 'todos'){

       } else {
        $query->where('ativo', true);

       }
       $users = $query->orderByDesc('id')->paginate(10);
        return view('user.index', ['users' => $users]); 

    }
    public function show(User $user){
        return view ('user.show', ['user' => $user]);
    }
    public function create(){
        return view('user.create');
    }
    public function store(UserRequest $request){
        $request->validated();
       
        User::create ([
            'name' => $request->name,
            'email'=> $request->email,
            'password'=> $request->password,
            'endereco'=> $request->endereco,
            'telefone'=> $request->telefone
        ]);
        return redirect()->route('user.index')->with('success', 'usuario cadastrado com sucesso');
    }
    public function edit(User $user){
        return view('user.edit', ['user' => $user]);
    }
    public function update(UserRequest $request, User $user){
        $request->validated();

        $user->update([
           'name' => $request->name,
           'email'=> $request->email,
           'password'=> $request->password,
           'endereco'=> $request->endereco,  
           'telefone'=> $request->telefone
        ]);
           return redirect()->route('user.show', ['user' => $user->id])->with('success', 'usuario editado com sucesso');
    }
    public function destroy(User $user){
        $user->delete();
        return redirect()->route('user.index')->with('success', 'usuario deletado com sucesso');
    }
    public function toggleStatus(User $user) {
        $user->ativo = !$user->ativo;
        $user->save();

        $message = $user->ativo ? 'Usuario ativado com sucesso.' : 'Usuario desativado com sucesso.';
        return redirect()->route('user.index')->with('success', $message);
    }
}
