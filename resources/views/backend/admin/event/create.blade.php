@extends('backend.admin.layout.layout')
@section('content')
<div class="col-md-12 mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Add Event</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.events.store') }}" method="post" enctype="multipart/form-data">
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
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Event Title"
                            required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="image">Image</label>
                        <input type="file" class="form-control" name="image" id="image" required>
                    </div>
                </div>

                <div class="form-row">
                    
                    <div class="form-group col-md-6">
                        <label for="time">Start Time</label>
                        <input type="time" class="form-control" name="start_time" id="time" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="time">End Time</label>
                        <input type="time" class="form-control" name="end_time" id="time" required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="location" id="location"
                            placeholder="Event Location" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description"
                            placeholder="Event Description" required></textarea>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" name="date" id="date" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="date">Price</label>
                        <input type="text" class="form-control" name="price" id="date" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="organizer">Organizer</label>
                        <select class="form-control" id="organizer" name="organizer_id" required>
                            <option value="">Select Organizer</option>
                            @foreach($organizers as $organizer)
                            <option value="{{ $organizer->id }}">{{ $organizer->first_name }}
                                {{ $organizer->last_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Add Event</button>
            </form>


        </div>
    </div>
</div>

@endsection