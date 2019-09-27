@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Employee<a href="{{url('employee/create')}}"><i style="font-size:24px">+</i></a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-dark">
                      <thead>
                        <tr>
                          <th scope="col">#</th>
                          <th scope="col">First Name</th>
                          <th scope="col">Last Name</th>
                          <th scope="col">Company</th>
                          <th scope="col">Email</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($employee as $employees)
                        <tr>
                          <th scope="row">{{$employees->id}}</th>
                          <td>{{$employees->first_name}}</td>
                          <td>{{$employees->last_name}}</td>
                          <td>{{$employees->company}}</td>
                          <td>{{$employees->email}}</td>
                          <td>{{$employees->phone}}</td>
                          <td>EDIT</td>
                        </tr>
                        @endforeach
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
