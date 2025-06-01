@extends('layout')
@section('title', 'Verify Code')

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
                <div class="text-center">
                    <h2>Email Verification</h2>
                    <p>Please verify your Eamil Address!</p>
                    <hr>
                </div>
                <form action="{{ route('verifyCode', ['id' => request('id')]) }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="form-group col-md-12">
                            <label for="code">Enter Code</label>
                            <input type="text" name="code" id="code" class="form-control" placeholder="Ex: 6472" value="{{ old('code') }}">
                            @error('code')
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
                        <p>Want to get New Code or change Email Address. <a href="{{ route('forgotPassword') }}">Return</a>?</p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection
