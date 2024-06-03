@extends('backend.organizer.layout.layout')
@section('content')
<div class="col-md-12 mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Add Special Offer</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('organizer.special_offers.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                @if(Session::get('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
                @if(Session::get('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
                @endif

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="organizer">Event</label>
                        <select class="form-control" id="organizer" name="event_id" required>
                            <option value="">Select Event</option>
                            @foreach($events as $event)
                            <option value="{{ $event->id }}">{{ $event->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Event Title"
                            required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description"
                            placeholder="Event Description" required></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="discount_percentage">Discount Percentage</label>
                        <input type="number" class="form-control" name="discount_percentage" id="discount_percentage"
                            placeholder="Discount Percentage" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="start_date">Start Date</label>
                        <input type="date" class="form-control" name="start_date" id="start_date" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="end_date">End Date</label>
                        <input type="date" class="form-control" name="end_date" id="end_date" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Add Offer</button>
            </form>
        </div>
    </div>
</div>
@endsection