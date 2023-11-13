@extends('layouts.base')
@section('page.title', 'Send Reset Link')
@section('content')
    <style>
        .send_message {
            height: 500px;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
<div class="flex-center position-ref full-height send_message">
    <div class="content d-flex flex-column">
        <form class="form-signin w-100 text-center" action="{{ route('password.request') }}" method="POST">
            @csrf
                <label>
                    <h3>Forgot your<br>password</h3>
                </label>
                @if(session('status'))
                    <div class="alert alert-success mb-2 mt-2" role="alert">
                        {{ session('status')  }}
                    </div>
                @endif
                <div class="form-floating mt-3">
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
                <button class="btn btn-primary w-auto mt-3" type="submit">Send Reset link</button>

        </form>
    </div>
</div>
@endsection

