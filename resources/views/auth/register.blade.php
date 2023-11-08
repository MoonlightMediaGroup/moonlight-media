<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sign-In</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        form {
            display: flex;
            flex-direction: column;
        }
        input {
            margin-bottom: 10px;
            height: 25px;
            padding: 0 5px;
        }
        .error {
            border-color: #ff0000;
        }
        .error::placeholder {
            color: #ff7474;
        }
        .error_message {
            color: #ff7474;
            text-align: start;
            text-align: start;
        }
        button {
            border: none;
            padding: 10px;
            border-radius: 10px;
            background-color: black;
            color: white;
        }
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        ul {
            text-align: start;
        }
        .checkbox {font-size: 14px; text-align: start; margin: 5px 0}
        .checkbox > input {
            padding: 0;
            height: auto;
            margin: 0;
        }
        .link_forgot {
            margin: 10px 0 0 0;
            font-size: 14px;
            color: #43869f;
            font-weight: bold;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            <a href="{{ url('/') }}">Back</a>
            @auth
                <a href="{{ route('/logout') }}">Log out</a>
            @else
                <a href="{{ route('login') }}">Login</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <label>
                <h1>Sign-In</h1>
            </label>
            @error('name')
                <label for="name" class="error_message">{{ $message  }}</label>
            @enderror
            <input value="{{ old('login') }}" autofocus id="name" class="{{ $errors->has('name') ? 'error' : '' }}" type="text" placeholder="Login" name="name">
            @error('email')
                <label for="email" class="error_message">{{ $message  }}</label>
            @enderror
            <input value="{{ old('email') }}" id="email" class="{{ $errors->has('email') ? 'error' : '' }}" type="text" placeholder="Mail" name="email">
            @error('password')
                <label for="password" class="error_message">{{ $message  }}</label>
            @enderror
            <input id="password" class="{{ $errors->has('password') ? 'error' : '' }}" type="password" placeholder="Password" name="password">
            @if($errors->has('password_confirmation'))
                <label for="password_confirmation" class="error_message">Passwords don't match</label>
            @elseif($errors->has('password'))
                <label for="password_confirmation" class="error_message">Enter the field</label>
            @endif
            <input id="password_confirmation" class="{{ $errors->has('password_confirmation') || $errors->has('password') ? 'error' : '' }}" type="password" placeholder="Repeat Password" name="password_confirmation">
            <button type="submit">Sign In</button>

            <a class="link_forgot" href="{{ route('login') }}">Already have an account?</a>
        </form>
    </div>
</div>
</body>
</html>

