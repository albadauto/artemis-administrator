<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Manrope:wght@200&display=swap');

        body {

            background-color: #f8f9fa;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
            margin: 0;
            font-family: 'Manrope', sans-serif;
        }

        .login-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .login-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Faça Login</h2>
    <div class="row mb-3">
        <div class="col text-center">
            <img src="image/logo.png" width="180px">
        </div>
    </div>
    <form method="post" action="{{ route('login.auth') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label font-weight-bold">Email</label>
            <input type="email" class="form-control" id="email" placeholder="Seu email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" placeholder="Sua senha" name="password">
        </div>
        <button type="submit" class="btn btn-dark w-100">Entrar</button>
    </form>
    @if($error = Session::get('error'))
        {{ $error }}
    @endif
    @if($errors->any())
        @foreach($errors->all() as $error)
            <div class="alert alert-danger mt-5"> {{ $error }}</div>
        @endforeach
    @endif
</div>
</body>
</html>
