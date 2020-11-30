@extends('layouts.app')

@section('title') UploadDocs @endsection

@section('content')
    <div class = "container">
        <form style="margin: 300px 0;" method="POST" action="{{ route('uploadFile') }}" enctype="multipart/form-data">
        @csrf
            <label for="file">Choose File</label>
            <input type="file" name="file">
            <button type="submit" name submit>Upload</button>
        </form>
    </div>

@endsection
