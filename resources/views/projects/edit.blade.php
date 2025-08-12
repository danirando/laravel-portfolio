@extends('layouts.master')

@section('content')
<div class="container">
    <a class="btn btn-primary my-3" href="{{ route("projects.index")}}">Home</a>
    <h1 class="my-3">Aggiungi un nuovo progetto</h1>

<form class="d-flex w-50 flex-column gap-3" action="{{ route('projects.update', $project) }}" method="POST">
    @csrf
    @method('PUT')
    <label class="form-label" for="name">Nome:</label>
    <input class="form-control" type="text" name="name" id="name" value="{{ $project->name }}">
    <label class="form-label" for="period">Periodo:</label>
    <input class="form-control" type="date" name="period" id="period" value="{{ $project->period ? date('Y-m-d', strtotime($project->period)) : '' }}">
    <label class="form-label" for="name">Descrizione:</label>
    <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{$project->description}}</textarea>
    <button class="btn btn-primary">Salva</button>
</form>
</div>


@endsection