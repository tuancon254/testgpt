@extends('layouts.app')

@section('title', 'Files')

@section('content')
    <div class="card">
        <div class="card-header">
            Files
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif

            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Name</th>
                    <th>Preview</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($files as $file)
                    <tr>
                        <td>{{ $file->name }}</td>
                        <td><img src="{{ $file->url }}" alt="{{ $file->name }}" width="100"></td>
                        <td>
                            <a href="{{ $file->url }}" target="_blank" class="btn btn-primary">Download</a>
                            <a data-url="{{ $file->url }}" target="_blank" class="images_preview btn btn-secondary">Preview</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="preview_area p-2">
                <img src="" alt="" id="preview" class="w-100">
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function (){
            $('.images_preview').click(function (){
                let url = $(this).data('url')
                $('#preview').attr('src',url)
            })
        })
    </script>
@endsection
