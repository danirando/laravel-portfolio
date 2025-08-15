@extends('layouts.master')

@section('content')
    <div class="container my-3">  
        <a class="btn btn-primary my-3" href="{{ route("projects.index") }}">Home</a>
        
        <h1>Titolo:</h1>
        <h1 class="mb-3">{{ $project->name }}</h1>

        <h1>Tipo:</h1>
        <h1 class="mb-3">{{ $project->type->name }}</h1>

        <h2>Periodo:</h2>
        <h2 class="mb-3">{{ explode(' ', $project->period)[0] }}</h2>

        <h2>Descrizione:</h2>
        <p class="mb-3">{{ $project->description }}</p>

        <h2>Tecnologie:</h2>
        <div class="mb-3">
            @foreach($project->technologies as $technology)
                <span class="badge text-white" style="background-color: {{ $technology->color }}">
                    {{ $technology->name }}
                </span>
            @endforeach
        </div>
    </div>
@endsection
