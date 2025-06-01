@extends('layout')
@section('title', 'Reset Password')

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
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                @endif
                <div class="text-center">
                    <h2>Reset Password</h2>
                    <p>Now you can reset your password!</p>
                    <hr>
                </div>
                <form action="{{ route('resetPassword', ['id' => request('id')]) }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="form-group col-md-12">
                            <label for="password">Password</label>
                            <input type="text" name="password" id="password" class="form-control" placeholder="**********" value="{{ old('password') }}">
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <label for="password_confirmation">Confirm Password</label>
                            <input type="text" name="password_confirmation" id="password_confirmation" class="form-control" placeholder="**********" value="{{ old('password_confirmation') }}">
                            @error('password_confirmation')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-dark rounded-pill py-2"  style="width: 100%;">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection
