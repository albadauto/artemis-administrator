@extends('template/template')


@section('content')
    <div class="row bg-light mt-5">
        <div class="col bg-dark text-center">
            <h5 class="text-light m-2">Atualizar cliente</h5>
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
    <form action="{{ route('user.Updateoneuser', [$user->id]) }}" method="post">
        @csrf
        @method('put')
        <div class="row bg-light">
            <div class="col mt-5">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="username" value="{{ $user->name }}">
                    <label for="floatingInput">Username</label>
                </div>
            </div>

            <div class="col mt-5">
                <div class="form-floating mb-3">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" name="email" value="{{ $user->email }}">
                    <label for="floatingInput">Email</label>
                </div>
            </div>

            <div class="col mt-5">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="" name="cnpj" value="{{ $user->cnpj }}">
                    <label for="floatingInput">CNPJ</label>
                </div>
            </div>
        </div>
        <div class="row bg-light">
            <div class="col mt-5">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="address" value="{{ $user->address }}">
                    <label for="floatingInput">Endereço</label>
                </div>
            </div>

            <div class="col mt-5">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com" name="number" value="{{ $user->number }}">
                    <label for="floatingInput">Número</label>
                </div>
            </div>

        </div>
        <div class="row bg-light">
            <div class="col mt-5">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="pf_user" value="{{ $user->pf_user }}">
                    <label for="floatingInput">Nome do representante da empresa</label>
                </div>
            </div>

            <div class="col mt-5">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" placeholder="name@example.com" name="pf_cpf" value="{{ $user->pf_cpf }}">
                    <label for="floatingInput">CPF</label>
                </div>
            </div>


        </div>


        <div class="row bg-light">
            <div class="col text-center mb-3">
                <button type="submit" class="btn btn-dark">Enviar</button>
            </div>
        </div>
    </form>
@endsection
