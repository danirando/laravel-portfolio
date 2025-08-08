@extends('layouts.master')

@section('content')
    <div class="container my-3">  
        <h1 class="mb-3">{{ $project->name}}</h1>
        <h2 class="mb-3">{{ explode(' ', $project->period)[0] }}</h2>
        <p>{{ $project->description }}</p>
    </div>
@endsection