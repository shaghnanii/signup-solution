@extends('layouts.main')

@section('main_content')
    <div class="container" style="margin-top: 80px">
        <div class="alert alert-danger text-dark">500 | Server Error <strong data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Click here to check the error.</strong></div>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                {{ $message }}
            </div>
        </div>
        <a href="{{ route('home.index') }}" class="d-flex justify-content-center">
            <button class="btn btn-primary">Back to HOME</button>
        </a>
    </div>
@endsection
