<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="register-container">
        <form class="register-form" action="{{ route('register') }}" method="post">
            @csrf
            <div class="input-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
            </div>
            <div class="input-group">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email">
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </div>
            <div class="input-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" name="password_confirmation" id="password_confirmation">
            </div>
            <div class="input-group">
                <button type="submit">Register</button>
            </div>
        </form>
    </div>
    @if ($errors->any())
    <div class="errors">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>

</html>
