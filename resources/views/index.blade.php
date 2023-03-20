<!DOCTYPE html>
<html>
<head>
    <title>Laravel File Upload and Preview</title>
</head>
<body>
@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif
@if(session('error'))
    <div class="alert alert-danger">{{ session('error') }}</div>
@endif

<form method="post" action="{{ route('files.store') }}" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="file">Choose file to upload:</label>
        <input type="file" name="file" id="file">
        <button type="submit">Upload</button>
    </div>
</form>

<hr>

@foreach($files as $file)
    <div>
        <a href="{{ $file->url }}" target="_blank">{{ $file->name }}</a>
    </div>
@endforeach
</body>
</html>
