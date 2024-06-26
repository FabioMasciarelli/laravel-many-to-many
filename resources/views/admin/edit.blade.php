@extends('layouts.admin')


@section('content')
    <h1>Modifica progetto</h1>

    <form action="{{ route('admin.projects.update', ['project' => $project->slug]) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $project->title }}">
        </div>

        <div class="mb-3">
            <label for="readme" class="form-label">ReadME</label>
            <textarea class="form-control" id="readme" rows="3" name="readme">{{ $project->readme }}</textarea>
        </div>

        <div class="mb-3">
            <label for="latest_fix" class="form-label">Latest fix</label>
            <input type="text" class="form-control" id="latest_fix" name="latest_fix" value="{{ $project->latest_fix }}">
        </div>

        <div class="btn-group" role="group">
            @foreach ($technologies as $technology)
                <input @checked($project->technologies->contains($technology)) type="checkbox" name="technologies[]" class="btn-check" id="accessory {{ $technology->id }}" value="{{ $technology->id }}">
                <label class="btn btn-outline-primary" for="accessory {{ $technology->id }}">{{ $technology->name }}</label>
            @endforeach
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-success">Modifica</button>
        </div>
    </form> 
@endsection