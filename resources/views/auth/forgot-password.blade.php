@extends('layout')
@section('title', 'Forgot Password')

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
                    <h2>Forgot Password</h2>
                    <p>Please enter your Eamil Address!</p>
                    <hr>
                </div>
                <form action="{{ route('forgotPassword') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="form-group col-md-12">
                            <label for="email">Email Address</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="johndoe@example.com" value="{{ old('email') }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                            @if (Session::has('error'))
                                <span class="text-danger">{{ session('error') }}</span>
                            @endif
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-dark rounded-pill py-2"  style="width: 100%;">
                                Submit
                            </button>
                        </div>
                        <p>Want to go <a href="{{ route('login') }}">Login</a> again?</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection
