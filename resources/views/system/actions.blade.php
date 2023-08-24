@extends('template.template')

@section('content')
    <div class="row bg-dark mt-5">
        <div class="col text-center">
            <h5 class="text-light">Ações com sistemas</h5>
        </div>
    </div>
    <table class="table table-sm table-striped table-hover">
        <thead>
        <tr>
            <th scope="col">Nome</th>
            <th scope="col">Descrição</th>
            <th scope="col"></th>


        </tr>
        </thead>
        <tbody>
        @foreach($systems as $system)
            <tr>
                <th scope="row">{{ $system->name }}</th>
                <td>{{ $system->description }}</td>

                <td>
                    <a class="btn btn-danger" href="{{ route('system.Deletesystem', $system->id) }}">Excluir</a>
                </td>
                <td>
                    <a class="btn btn-warning" href="{{ route('system.Updatesystem', $system->id) }}">Atualizar</a>
                </td>
            </tr>
        @endforeach


        </tbody>
    </table>
@endsection
