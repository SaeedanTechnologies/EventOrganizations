@extends('backend.admin.layout.layout')
@section('content')

<div class="col-md-12 mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">All Organizer</h3>
        </div>
        <div class="card-body table-border-style">
            <a href="{{route('admin.users.create')}}" class="btn btn-primary float-right mb-2"> Add New</a>
            <div class="table-responsive">
                <table id="myTable" class="table table-hover">
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
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Password</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $key => $organizer)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $organizer->first_name }}</td>
                            <td>{{ $organizer->last_name }}</td>
                            <td>{{ $organizer->email }}</td>
                            <td>{{ $organizer->phone }}</td>
                            <td>{{ $organizer->original_password }}</td>
                            <td>
                                <a href="{{route('admin.users.edit', $organizer->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('admin.users.destroy', $organizer->id)}}" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Then load DataTables script -->
<script>
let table = new DataTable('#myTable');
</script>
@endsection