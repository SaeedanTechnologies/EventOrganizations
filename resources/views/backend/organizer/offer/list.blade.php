@extends('backend.organizer.layout.layout')
@section('content')

<div class="col-md-12 mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Event Special Offers</h3>
        </div>
        <div class="card-body table-border-style">
            <a href="{{route('organizer.special_offers.create')}}" class="btn btn-primary float-right mb-2"> Add New</a>
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
                            <th>Title</th>
                            <th>Discount</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($offers as $key => $offer)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $offer->Event->title }}</td>
                            <td>{{ $offer->title }}</td>
                            <td>{{ $offer->discount_percentage }}%</td>
                            <td>{{ $offer->start_date }}</td>
                            <td>{{ $offer->end_date }}</td>
                            <td>
                                <a href="{{route('organizer.special_offers.edit', $offer->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('organizer.special_offers.destroy', $offer->id)}}" class="btn btn-danger">Delete</a>
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