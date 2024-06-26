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
            <label for="languages" class="form-label">Language</label>
            <select class="form-select" aria-label="Default select example" id="languages" name="languages">
                <option selected>Select</option>
                <option value="Javascript">Javascript</option>
                <option value="PHP">PHP</option>
                <option value="CSS">CSS</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="latest_fix" class="form-label">Latest fix</label>
            <input type="text" class="form-control" id="latest_fix" name="latest_fix" placeholder="YYYY-MM-DD">
        </div>

        <button type="submit" class="btn btn-success">Create</button>
    </form>
@endsection
