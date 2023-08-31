@extends('template/template')


@section('content')
    <div class="row bg-light mt-5">
        <div class="col bg-dark text-center">
            <h5 class="text-light m-2">Atualizar administrador</h5>
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
    <form action="{{ route('UserAdmin.Updateoneuseradmin', [$user->id]) }}" method="post">
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
                    <input type="password" class="form-control" id="floatingInput" placeholder="" name="password" >
                    <label for="floatingInput">Senha</label>
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
