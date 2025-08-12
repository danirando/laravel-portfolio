@extends('layouts.master')

@section('content')
    <div class="container my-3">  
        <a class="btn btn-primary my-3" href="{{ route("projects.index")}}">Home</a>
        <h1>Titolo:</h1>
        <h1 class="mb-3">{{ $project->name}}</h1>
        <h2>Periodo:</h2>
        <h2 class="mb-3">{{ explode(' ', $project->period)[0] }}</h2>
        <h2>Descrizione:</h2>
        <p>{{ $project->description }}</p>
    </div>
@endsection