@extends('layouts.base')
@section('page.title', 'Change Password')
@section('content')
    <main class="form-signin w-100 m-auto">
        <form class="needs-validation" action="{{ route('password.update') }}" method="POST" style="margin-top: 100px;">
            @csrf
            <h1 class="h3 mb-3 fw-normal">Reset Password</h1>

            <input type="hidden" name="token" value="{{ $request->token  }}">

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
                <input required name="email" autofocus value="{{  $request->email }}" type="email" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="floatingInput" placeholder="name@example.com">

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
                <input required name="password_confirmation" type="password" class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}" id="floatingPassword" placeholder="Password Confirmation">

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

            <button class="btn btn-primary w-100 py-2" type="submit">Reset Password</button>

        </form>
    </main>
@endsection

