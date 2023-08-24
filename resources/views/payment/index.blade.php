@extends('template/template')


@section('content')
    <div class="row bg-light mt-5">
        <div class="col bg-dark text-center">
            <h5 class="text-light m-2">Novo Pagamento</h5>
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
    <form action="{{ route('payment.Insertpayment') }}" method="post">
        @csrf
        <div class="row bg-light mt-3">
            <div class="col ">
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" placeholder="name@example.com" name="price" step="0.010">
                    <label for="floatingInput">Preço mensal</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Faturas" name="invoice">
                        <option selected>Selecione a quantidade de faturas</option>
                        @for($i = 1; $i <= 24; $i++)
                            <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                    </select>
                    <label for="floatingSelect">Faturas</label>
                </div>
            </div>
        </div>

        <div class="row bg-light ">
            <div class="col ">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Faturas" name="user_id">
                        <option selected>Selecione o usuário</option>
                        @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                    <label for="floatingSelect">Usuário</label>
                </div>
            </div>
            <div class="col">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect" aria-label="Faturas" name="system_id">
                        <option selected>Selecione o sistema</option>
                        @foreach($systems as $system)
                            <option value="{{ $system->id }}">{{ $system->name }}</option>
                        @endforeach
                    </select>
                    <label for="floatingSelect">Sistema</label>
                </div>
            </div>
        </div>

        <div class="row bg-light ">
            <div class="col mt-3 mb-3 text-center">
                <button type="submit" class="btn btn-dark">Registrar</button>
            </div>
        </div>

    </form>
@endsection
