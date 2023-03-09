@extends('layouts.app')

@section('title', $project->title)

@section('content')
    <header>
        <h1 class="my-5">{{ $project->title }}</h1>
    </header>
    <div class="clearfix">
        @if ($project->image)
            <img class="me-2 float-start" src="{{ $project->image }}" alt="{{ $project->slug }}">
        @endif
        <p>{{ $project->content }}</p>
        <div>
            <strong>Creato il:</strong>
            <p>{{ $project->created_at }}</p>
            <strong>Ultima modifica:</strong>
            <p>{{ $project->updated_at }}</p>
        </div>
    </div>
@endsection
