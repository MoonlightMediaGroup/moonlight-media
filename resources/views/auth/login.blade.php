@extends('layouts.base')
@section('page.title', 'Log-In')
@section('content')
    <main class="form-signin w-100 m-auto">
        <form class="needs-validation" action="{{ route('login') }}" method="POST" style="margin-top: 100px;">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Please Log-In</h1>

            <!--Alerts-->
            @if(session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status')  }}
                </div>
            @endif

            @error('email')
                <div class="alert alert-danger" role="alert">
                    {{ $message  }}
                </div>
            @enderror

            <div class="form-floating">
                <input required name="email" autofocus value="{{ old('email') }}" type="email" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="floatingInput" placeholder="name@example.com">

                @error('email')
                <div class="invalid-feedback">
                    {{ $message  }}
                </div>
                @else
                <div class="valid-feedback">
                    Looks good!
                </div>
                @enderror
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input required name="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="floatingPassword" placeholder="Password">

                @error('password')
                <div class="invalid-feedback">
                    {{ $message  }}
                </div>
                @else
                <div class="valid-feedback">
                    Looks good!
                </div>
                @enderror
                <label for="floatingPassword">Password</label>
            </div>

            <div class="form-check text-start my-3">
                <input class="form-check-input" type="checkbox" value="remember-me" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    Remember me
                </label>
            </div>
            <button class="btn btn-primary w-100 py-2" type="submit">Log In</button>
            <a class="link_forgot" href="{{ route('password.request')  }}">Forgot your password?</a>

        </form>
    </main>
@endsection

