@extends('layouts.app')

@section('title', 'Upload File')

@section('content')
    <div class="card">
        <div class="card-header">
            Upload File
        </div>
        <div class="card-body">
            <form method="post" action="{{ route('files.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="file">Choose file to upload:</label>
                    <input type="file" name="file" id="file" class="form-control-file" accept=".jpg,.png">
                </div>
                <button type="submit" class="btn btn-primary">Upload</button>
            </form>
        </div>
    </div>
@endsection
