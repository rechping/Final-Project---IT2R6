@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5 alert-success">
                    <div class="card-header font-weight-bold">{{ __('Receipt') }}</div>
                    <div class="card-body">
                        <p>Name: {{ $code->name }}</p>
                        @if ($code->type == 'regular')
                            <p>Fare rate: {{ $route->regular }}</p>
                        @elseif ($code->type == 'student')
                            <p>Fare rate: {{ $route->student }}</p>
                        @elseif ($code->type == 'senior')
                            <p>Fare rate: {{ $route->senior }}</p>
                        @endif
                        <p>code: {{ $code->code }}</p>
                        <p>Route from: {{ $route->from }}</p>
                        <p>Route to: {{ $route->to }}</p>
                        <p>Time Stamp: {{ $timeStamp }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
