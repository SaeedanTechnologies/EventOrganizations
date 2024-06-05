@extends('backend.organizer.layout.layout')
@section('content')

<div class="col-md-12 mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">All Events</h3>
        </div>
        <div class="card-body table-border-style">
            <a href="{{route('organizer.events.create')}}" class="btn btn-primary float-right mb-2"> Add New</a>
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
                            <th>Title</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Price</th>
                            <th>Location</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($events as $key => $event)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $event->title }}</td>
                            <td>{{ $event->date }}</td>
                            <td>{{ $event->start_time }} to {{ $event->end_time }}</td>
                            <td>${{ $event->price }}</td>
                            <td>{{ $event->location }}</td>
                            <td><img src="{{ $event->image }}" height="150" alt="" class="img-fluid rounded"></td>
                            <td>
                                <a href="{{route('organizer.events.edit', $event->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('organizer.events.destroy', $event->id)}}" class="btn btn-danger">Delete</a>
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