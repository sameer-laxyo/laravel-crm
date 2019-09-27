@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Register empolyees here.</div>

                
                <form method="POST" action="{{ url('employee') }}" id="register" >
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputFirstName">First Name</label>
                    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="fnameHelp" placeholder="Enter First name" name="fname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputLastName">Last Name</label>
                    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="lnameHelp" placeholder="Enter Last name" name="lname">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputCompany">Company</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Company" name="company">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPhoneNo">Phone No.</label>
                    <input type="text" class="form-control" id="exampleInputPhoneNo" aria-describedby="phoneHelp" placeholder="Enter phone no" name="phone">
                  </div>
                  <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
