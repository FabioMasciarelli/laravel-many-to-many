@extends('layouts.admin')

@section('content')

<div>

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
        <dd></dd>
    </dl>

</div>

@endsection