@extends('backend.admin.layout.layout')
@section('content')
<div class="col-md-12 mt-5">
    <div class="card">
        <div class="card-header">
            <h3 class="text-center">Send Newsletter</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.send_newsletter') }}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="subject">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="content">Content</label>
                        <textarea class="form-control" name="content" id="content" rows="5" placeholder="Newsletter content" required></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Send Newsletter</button>
            </form>
        </div>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#content'))
        .catch(error => {
            console.error(error);
        });
</script>
@endsection




