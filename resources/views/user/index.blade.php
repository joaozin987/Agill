@extends('layouts.admin')

@section('content')

<div class="card my-4 border-light shadow">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0 fs-4">Listar Usuários</h5>
        <a href="{{ route('user.create') }}" class="btn btn-success">Cadastrar Usuário</a>
    </div>

    <div class="card-body">
      <div class="d-flex justify-content-end mb-3">
    <a href="{{ route('user.index', ['status' => 'ativos']) }}" class="btn btn-sm btn-outline-success me-2">Ver Ativos</a>
    <a href="{{ route('user.index', ['status' => 'inativos']) }}" class="btn btn-sm btn-outline-danger me-2">Ver Inativos</a>
    <a href="{{ route('user.index', ['status' => 'todos']) }}" class="btn btn-sm btn-outline-secondary">Ver Todos</a>
    </div>
        <x-alert />

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Telefone</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Status</th>
                        <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $user)
                        <tr class="{{ !$user->ativo ? 'table-light text-muted' : '' }}">
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->telefone }}</td>
                            <td>{{ $user->endereco }}</td>
                            <td>
                                @if ($user->ativo)
                                    <span class="badge bg-success">Ativo</span>
                                @else
                                    <span class="badge bg-secondary">Inativo</span>
                                @endif
                            </td>
                            <td>
                                <form action="{{ route('user.toggleStatus', $user->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('PATCH')
                                    @if ($user->ativo)
                                        <button type="submit" class="btn btn-warning btn-sm" title="Inativar">Inativar</button>
                                    @else
                                        <button type="submit" class="btn btn-success btn-sm" title="Ativar">Ativar</button>
                                    @endif
                                </form>

                                <a href="{{ route('user.show', $user->id) }}" class="btn btn-info btn-sm" title="Visualizar">Visualizar</a>
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-sm" title="Editar">Editar</a>

                                <form method="POST" action="{{ route('user.destroy', $user->id) }}" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" onclick="return confirm('Tem certeza que deseja apagar?')" class="btn btn-danger btn-sm" title="Apagar">Apagar</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Nenhum usuário encontrado.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($users->hasPages())
            <div class="mt-4 d-flex justify-content-center">
                {{ $users->links() }}
            </div>
        @endif
    </div>
</div>
@endsection