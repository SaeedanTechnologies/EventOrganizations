@extends('backend.admin.layout.layout')
@section('content')

<div class="col-md-12 mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">All Subscriber</h3>
        </div>
        <div class="card-body table-border-style">
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
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($subscibers as $key => $subsciber)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $subsciber->email }}</td>
                            <td>
                                <a href="" class="btn btn-danger">Delete</a>
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