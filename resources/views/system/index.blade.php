@extends('template/template')


@section('content')
    <div class="row bg-light mt-5">
        <div class="col bg-dark text-center">
            <h5 class="text-light m-2">Novo Sistema</h5>
        </div>
    </div>
    @if($message = Session::get('success'))
        <div class="alert alert-success mt-3 mb-3">
            {{ $message }}
        </div>
    @endif
    @if($errors->any())
        @foreach($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
    <form action="{{ route('system.Insertsystem') }}" method="post">
        @csrf
        <div class="row bg-light">
            <div class="col mt-5">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="name">
                    <label for="floatingInput">Nome</label>
                </div>
            </div>
        </div>

        <div class="row bg-light">
            <div class="col">
                <div class="form-floating mb-3">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="description"></textarea>
                    <label for="floatingTextarea2">Descrição</label>
                </div>
            </div>
        </div>

        <div class="row bg-light">
            <div class="col mb-3">
                <select class="form-select" aria-label="Default select example" name="user_id">
                    <option selected>Selecione o usuário</option>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach

                </select>
            </div>
        </div>

        <div class="row bg-light">
            <div class="col text-center mb-3">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </div>


    </form>
@endsection
