@extends('layouts.base')
@section('page.title', 'Sign Up')
@section('content')

<main class="form-signin w-100 m-auto">
    <form class="needs-validation" style="margin-top: 100px;" action="{{ route('register') }}" method="POST">
        @csrf
        <h1 class="h3 mb-4 fw-normal">Please Sign Up </h1>

        <div class="form-floating">

            <input required name="email" value="{{ old('email') }}" autofocus type="email" class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}" id="floatingInput" placeholder="name@example.com...">
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

            <input required name="name" value="{{ old('name') }}" type="text" class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" id="floatingLogin" placeholder="Name...">
            @error('name')
            <div class="invalid-feedback">
                {{ $message  }}
            </div>
            @else
            <div class="valid-feedback">
                Looks good!
            </div>
            @enderror
            <label for="floatingLogin">Login</label>
        </div>
        <div class="form-floating">

            <input required name="password" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="floatingPassword" placeholder="Password...">
            @error('password')
            <div class="invalid-feedback">
                {{ $message  }}
            </div>
            @else
            <div class="valid-feedback">
                Looks good!
            </div>
            @enderror
            <label for="floatingLogin">Password</label>
        </div>
        <div class="form-floating">

            <input required name="password_confirmation" type="password" class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" id="floatingPasswordConfirm" placeholder="Password...">

            @if($errors->has('password_confirmation'))
            <div class="invalid-feedback">
                {{ $message  }}
            </div>
            @elseif($errors->has('password'))
            <div class="invalid-feedback">
                {{ $message  }}
            </div>
            @else
            <div class="valid-feedback">
                Looks good!
            </div>
            @endif
            <label for="floatingPasswordConfirm">Password Confirmed</label>
        </div>


        <div class="form-check text-start my-3">
            <input required name="check_privacy" class="form-check-input" type="checkbox" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
                    I accept the <a href="#">Privacy Policy</a>
            </label>
            @if($errors->has('check_privacy'))
            <div class="invalid-feedback">
                {{ $message  }}
            </div>
            @else
            <div class="valid-feedback">
                Looks good!
            </div>
            @endif
        </div>
        <button class="btn btn-primary w-100 py-2" type="submit">Sign in</button>
        <a class="link_forgot" href="{{ route('login') }}">Already have an account?</a>

    </form>
</main>
@endsection

