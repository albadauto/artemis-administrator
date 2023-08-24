@extends('template.template')

@section('content')
    <div class="row bg-dark mt-5">
        <div class="col text-center">
            <h5 class="text-light">Ações com clientes</h5>
        </div>
    </div>
    <table class="table table-sm table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">Username</th>
            <th scope="col">Email</th>
            <th scope="col">CNPJ</th>
            <th scope="col">Endereço</th>
            <th scope="col">Número</th>
            <th scope="col">Representante</th>
            <th scope="col">CPF</th>
            <th scope="col"></th>


        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <th scope="row">{{ $user->name }}</th>
                <td>{{ $user->email }}</td>
                <td>{{ $user->cnpj }}</td>
                <td>{{ $user->address }}</td>
                <td>{{ $user->number }}</td>
                <td>{{ $user->pf_user }}</td>
                <td>{{ $user->pf_cpf }}</td>
                <td>
                    <a class="btn btn-danger" href="{{ route('user.Deleteuser', $user->id) }}">Excluir</a>
                </td>
                <td>
                    <a class="btn btn-warning" href="{{ route('user.Updateuser', $user->id) }}">Atualizar</a>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
@endsection
