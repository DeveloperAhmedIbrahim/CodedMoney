@extends('layout')
@section('title', 'Sign Up')

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
                <div class="text-center">
                    <h2>Sign Up</h2>
                    <p>Sign-up and enjoy the journey of seamless trading!</p>
                    <hr>
                </div>
                <form action="{{ route('signUp') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="form-group col-md-6">
                            <label for="firstName">First Name</label>
                            <input type="text" name="firstName" id="firstName" class="form-control" placeholder="John" value="{{ old('firstName') }}">
                            @error('firstName')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lastName">Last Name</label>
                            <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Doe" value="{{ old('lastName') }}">
                            @error('lastName')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="email">Email Address</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="johndoe@example.com" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="password">Password</label>
                            <input type="text" name="password" id="password" class="form-control" placeholder="**********" value="{{ old('password') }}">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="passwordConfirmation">Password Confirmation</label>
                            <input type="text" name="password_confirmation" id="passwordConfirmation" class="form-control" placeholder="**********" value="{{ old('passwordConfirmation') }}">
                            @error('passwordConfirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-dark rounded-pill py-2"  style="width: 100%;">
                                Sign Up
                            </button>
                        </div>
                        <p>Already have an account <a href="{{ route('login') }}">Login</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection
