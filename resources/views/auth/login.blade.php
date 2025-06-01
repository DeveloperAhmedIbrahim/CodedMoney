
@extends('layout')
@section('title', 'Login')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<style>
    input:focus{
        box-shadow: none !important;
    }
</style>


<section>
    <div class="container pt-3">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                @if (Session::has('success'))
                    <div class="alert alert-success">
                        <strong>Hey!</strong> {{ Session::get('success') }}
                    </div>
                @endif
                <div class="text-center">
                    <h2>Login</h2>
                    <p>Login to access exchange services!</p>
                    <hr>
                </div>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="form-group col-md-12">
                            <label for="email">Email Address</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="johndoe@example.com" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="**********" value="{{ old('password') }}">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @if(Session::has('error'))
                                <span class="text-danger">{{ Session::get('error') }}</span>
                            @endif
                            <span class="text-danger">
                                <a href="{{ route('forgotPassword') }}" class="float-end">Forgot Password</a>
                            </span>
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-dark rounded-pill py-2"  style="width: 100%;">
                                Login
                            </button>
                        </div>
                        <p>Don't have an account <a href="{{ route('signUp') }}">Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection
