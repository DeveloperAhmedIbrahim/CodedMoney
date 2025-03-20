@extends('layout')
@section('title', 'Orders')

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
            <div class="col-md-10">
                <div class="table-responsive">
                    <table class="table table-bordered table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>Trx ID</th>
                                <th>Flow</th>
                                <th>Spent</th>
                                <th>Receive</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transactions as $transaction)
                                <tr>
                                    <td>{{ $transaction["id"] }}</td>
                                    <td>{{ Str::ucfirst($transaction["request"]["flow"]) }}</td>
                                    <td>{{ $transaction["amounts"]["spentOriginal"]["amount"] }} {{ $transaction["amounts"]["spentOriginal"]["currency"] }}</td>
                                    <td>{{ $transaction["amounts"]["receivedOriginal"]["amount"] }} {{ $transaction["amounts"]["receivedOriginal"]["currency"] }}</td>
                                    <td>
                                        @if ($transaction["status"] == "created")
                                            <span class="badge bg-info">{{ Str::ucfirst($transaction["status"]) }}</span>
                                        @elseif($transaction["status"] == "completed")
                                            <span class="badge bg-success">{{ Str::ucfirst($transaction["status"]) }}</span>
                                        @elseif($transaction["status"] == "payment_error" || $transaction["status"] == "rejected")
                                            <span class="badge bg-danger">{{ Str::ucfirst($transaction["status"]) }}</span>
                                        @elseif($transaction["status"] == "cancelled")
                                            <span class="badge bg-warning">{{ Str::ucfirst($transaction["status"]) }}</span>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="{{ route('orders') }}" class="btn btn-dark btn-sm px-4 text-white {{ $prevPointer === NULL ? 'disabled' : '' }}">Reset</a>
                        </div>
                        <div>
                            <a href="{{ route('orders') }}?pointer={{ urlencode("$nextPointer") }}" class="btn btn-dark btn-sm px-4 text-white {{ $nextPointer === NULL ? 'disabled' : '' }}">Next</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
