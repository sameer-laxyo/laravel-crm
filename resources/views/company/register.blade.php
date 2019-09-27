@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register your comany here.</div>

                
                <form method="POST" action="{{ url('company') }}" id="register" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="nameHelp" placeholder="Enter name" name="name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleFormLogo">Upload your logo</label>
                    <input type="file" class="form-control-file" id="exampleFormLogo" name="img">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputWebsite">Website</label>
                    <input type="website" class="form-control" id="exampleInputWebsite" aria-describedby="websiteHelp" placeholder="Enter website" name="web">
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
