@extends('backend.organizer.layout.layout')
@section('content')

<div class="col-md-12 mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">All Booking</h3>
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
                            <th>Event</th>
                            <th>Price</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>User</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    @isset($booking)
                        @foreach($booking as $key => $booking)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $booking->Event->title }}</td>
                            <td>{{ $booking->Event->price }}</td>
                            <td>{{ $booking->Event->date }}</td>
                            <td>{{ \Carbon\Carbon::parse($booking->start_time)->format('h:i A') }} -
                                {{ \Carbon\Carbon::parse($booking->end_time)->format('h:i A') }}</td>
                            <td>{{ $booking->User->first_name }} {{ $booking->User->last_name }}</td>
                            <td>
                                <a href="" class="btn btn-primary">Edit</a>
                                <a href="" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    @endisset
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