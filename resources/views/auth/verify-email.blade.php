@extends('layouts.base')
@section('page.title', 'Sign Up')
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
    <div class="content send_message">
        <form class="form-signin w-100 text-center" action="{{ route('verification.send')  }}" method="POST">
            @csrf
            <label class="">
                <h1>Verify Email</h1>
            </label>

            <button class="btn btn-primary" type="submit">Resend Verification Link</button>
        </form>
        @if(session('status'))
            <div class="alert alert-success mb-2" role="alert">
                {{ session('status')  }}
            </div>
        @endif
    </div>
@endsection

