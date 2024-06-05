@extends('backend.organizer.layout.layout')
@section('content')
<div class="col-md-12 mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Update Organizer</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('organizer.events.update', $event->id) }}" method="post"
                enctype="multipart/form-data">
                @csrf
                @method('put')
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
                        <input type="text" class="form-control" name="title" value="{{$event->title}}" id="title"
                            placeholder="Event Title" required>
                    </div>

                    <div class="form-group col-md-6">
                        <label for="image">Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="image" id="image">
                            <label class="custom-file-label" for="image">Choose file</label>
                        </div>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="time">Start Time</label>
                        <input type="time" class="form-control" name="start_time" value="{{$event->start_time}}"
                            id="time" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="time">End Time</label>
                        <input type="time" class="form-control" name="end_time" value="{{$event->end_time}}" id="time"
                            required>
                    </div>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="location">Location</label>
                        <input type="text" class="form-control" name="location" value="{{$event->location}}"
                            id="location" placeholder="Event Location" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="description">Description</label>
                        <textarea class="form-control" name="description" id="description"
                            placeholder="Event Description" required>{{$event->description}}</textarea>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" name="date" value="{{$event->date}}" id="date" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="date">Price</label>
                        <input type="text" class="form-control" name="price" value="{{$event->price}}" id="date"
                            required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <img src="{{ $event->image }}" alt="Event Image" class="img-fluid rounded"
                            style="max-height: 100px;">
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Update Event</button>
            </form>
        </div>
    </div>
</div>

@endsection