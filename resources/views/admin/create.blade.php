@extends('layouts.admin')

@section('content')
    <h1>Create New Project</h1>
    <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="input-group mb-3 mt-5">
            <input type="file" class="form-control" id="uploadfile">
            <label class="input-group-text" for="uploadfile" name="uploadfile">Upload file</label>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
        </div>

        <div class="mb-3">
            <label for="readme" class="form-label">ReadME</label>
            <textarea class="form-control" id="readme" rows="3" name="readme"></textarea>
        </div>

        <div class="mb-3">
            <label for="latest_fix" class="form-label">Latest fix</label>
            <input type="text" class="form-control" id="latest_fix" name="latest_fix" placeholder="YYYY-MM-DD">
        </div>

        {{-- <div class="btn-group mb-3">

            @foreach ($collection as $item)
                <input type="checkbox" name="technologies[]" class="btn-check" id="btncheck" autocomplete="off">
                <label class="btn btn-outline-primary" for="btncheck">{{  }}</label>
            @endforeach
        </div> --}}

        <div class="mt-3">
            <button type="submit" class="btn btn-success">Create</button>
        </div>
    </form>
@endsection
