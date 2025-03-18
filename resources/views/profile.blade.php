@extends('layout')
@section('title', 'Profile')

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
                    <h2>Profile</h2>
                    <p>You can update your profile information from here!</p>
                    <hr>
                </div>
                <form action="{{ route('profile') }}" method="POST">
                    @csrf
                    <div class="row g-3">
                        <div class="form-group col-md-6 mt-5">
                            <label for="first_name">First Name</label>
                            <input type="text" name="first_name" id="first_name" class="form-control" placeholder="John" value="{{ old('first_name', $user->first_name) }}">
                            @error('first_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-6 mt-5">
                            <label for="last_name">Last Name</label>
                            <input type="text" name="last_name" id="email" class="form-control" placeholder="Doe" value="{{ old('last_name', $user->last_name) }}">
                            @error('last_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="form-group col-md-12 mt-5">
                            <label for="email">Email Address</label>
                            <input type="text" name="email" id="email" class="form-control" placeholder="johndoe@example.com" value="{{ old('email', $user->email) }}">
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-12 mt-5">
                            <button type="submit" class="btn btn-dark rounded-pill py-2"  style="width: 100%;">
                                Update Profile
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


@endsection
