@extends('layouts.admin')

@section('content')

    @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Titolo</th>
                <th scope="col">ReadME</th>
                <th scope="col">Linguaggi</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($projects as $project)
                <tr>
                    <th scope="row">{{ $project->title }}</th>
                    <td>{{ $project->readme }}</td>
                    <td>{{ $project->languages }}</td>
                    <td>
                        <a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}"
                            class="btn btn-success"><i class="fa-solid fa-eye"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div>
        {{ $projects->links() }}
    </div>
@endsection
