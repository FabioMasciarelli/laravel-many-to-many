@extends('layouts.admin')

@section('content')
    <div>

        <div class="mb-3 d-flex mt-3 gap-2">
            <a href="{{ route('admin.projects.edit', ['project' => $project->slug]) }}"
                class="btn btn-warning"><i class="fa-solid fa-pen"></i></a>
    
            <form action="{{ route('admin.projects.destroy', ['project' => $project->slug]) }}" method="POST">
    
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
    
            </form>

        </div>

        <dl>
            <dt>Project Name</dt>
            <dd>{{ $project->title }}</dd>

            <dt>Latest Fix</dt>
            <dd>{{ $project->latest_fix }}</dd>

            <dt>Type</dt>
            <dd>{{ $project->type_id ? $project->type->name : 'Undefined' }}</dd>

            <dt>ReadME</dt>
            <dd>{{ $project->readme }}</dd>

            <dt>Technologies</dt>
            @foreach ($project->technologies as $technology)
                <dd>{{ $technology->name }}</dd>
            @endforeach
        </dl>

    </div>
@endsection
