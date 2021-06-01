@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <div class="card-header bg-info text-white">{{ __('Get code') }}</div>
                    <div class="card-body">
                        <form action="getCode" method="post">
                            @csrf
                            <input type="text" name="name" id="name" required class="form-control" placeholder="Name">
                            <select name="type" id="type" required class="form-control mt-2">
                                <option value="" disabled required selected>Selected Type</option>
                                <option value="regular">Regular</option>
                                <option value="student">Student</option>
                                <option value="senior">Senior</option>
                            </select>
                            <button class="btn btn-success font-weight-bold mt-3">Get Code</button>
                        </form>
                    </div>
                </div>

                <div class="card mt-5">
                    <div class="card-header bg-info text-white">{{ __('Routes') }}</div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <th>Route from</th>
                                    <th>Route to</th>
                                    <th>Regular</th>
                                    <th>Student</th>
                                    <th>Senior</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>
                                    @foreach ($routes as $route)
                                        <tr>
                                            <td>{{ $route->from }}</td>
                                            <td>{{ $route->to }}</td>
                                            <td>{{ $route->regular }}</td>
                                            <td>{{ $route->student }}</td>
                                            <td>{{ $route->senior }}</td>
                                            <td>
                                                <a href="deleteRoute/{{ $route->id }}"><button type="button"
                                                        class="btn btn-danger">Delete</button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


                <div class="card mt-5">
                    <div class="card-header bg-info text-white">{{ __('New Route') }}</div>
                    <div class="card-body">
                        <form action="newRoute" method="post">
                            @csrf
                            <input type="text" name="from" id="from" required class="form-control" placeholder="Route from">
                            <input type="text" name="to" id="to" required class="form-control mt-2" placeholder="Route to">
                            <input type="number" name="regular" id="regular" required class="form-control mt-2"
                                placeholder="Regular">
                            <input type="number" name="student" id="student" required class="form-control mt-2"
                                placeholder="Student">
                            <input type="number" name="senior" id="senior" required class="form-control mt-2"
                                placeholder="Senior">
                            <button class="btn btn-success font-weight-bold mt-3">New Route</button>
                        </form>
                    </div>
                </div>


                <div class="card mt-5">
                    <div class="card-header bg-info text-white">{{ __('Update Route') }}</div>
                    <div class="card-body">
                        <form action="updateRoute" method="post">
                            @csrf
                            <select name="routeID" required id="routeID" class="form-control mt-2">
                                <option value="" disabled required selected>Selected Route</option>
                                @foreach ($routes as $route)
                                    <option value="{{$route->id}}">{{$route->from}} -> {{$route->to}}</option>
                                @endforeach
                            </select>
                            <input type="text" name="from" id="from" class="form-control mt-2" placeholder="Route from">
                            <input type="text" name="to" id="to" class="form-control mt-2" placeholder="Route to">
                            <input type="number" name="regular" id="regular" class="form-control mt-2"
                                placeholder="Regular">
                            <input type="number" name="student" id="student" class="form-control mt-2"
                                placeholder="Student">
                            <input type="number" name="senior" id="senior" class="form-control mt-2" placeholder="Senior">
                            <button class="btn btn-success font-weight-bold mt-3">Update Route</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
