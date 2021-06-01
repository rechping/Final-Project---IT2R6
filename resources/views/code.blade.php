@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header bg-info text-white">{{ __('Code Generated') }}</div>
                    <div class="card-body">
                        <h1>{{ $code }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
