@extends('backend.admin.layout.layout')
@section('content')
<div class="col-md-12 mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Update Profile</h3>
        </div>
        <div class="card-body">
            <form action="{{route('admin.update_profile', auth()->user()->id)}}" method="post">
                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{Session::get('success')}}
                </div>
                @endif
                @if(Session::get('error'))
                <div class="alert alert-danger">
                    {{Session::get('error')}}
                </div>
                @endif
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">First Name</label>
                        <input type="text" class="form-control" name="first_name" id="inputEmail4"
                            placeholder="First Name" value="{{auth()->user()->first_name}}" >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Last Name</label>
                        <input type="text" class="form-control" name="last_name" value="{{auth()->user()->value}}" id="inputPassword4"
                            placeholder="Last Name" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" name="email" value="{{auth()->user()->email}}" id="inputEmail4" placeholder="Email"
                            >
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" name="password" value="{{auth()->user()->original_password}}" id="inputPassword4"
                            placeholder="Password" >
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">Phone</label>
                        <input type="number" class="form-control" name="phone" value="{{auth()->user()->phone}}" id="inputCity" placeholder="Phone"
                            >
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">Check me out</label>
                    </div>
                </div>
                <button type="submit" class="btn  btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>

@endsection