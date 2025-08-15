@extends('layouts.master')

@section('content')
<div class="container">
    <a class="btn btn-primary my-3" href="{{ route('projects.index') }}">Home</a>
    <h1 class="my-3">Modifica progetto</h1>

    <form class="d-flex w-50 flex-column gap-3" action="{{ route('projects.update', $project) }}" method="POST">
        @csrf
        @method('PUT')

        <label class="form-label" for="name">Nome:</label>
        <input class="form-control" type="text" name="name" id="name" value="{{ $project->name }}">

        <label class="form-label" for="period">Periodo:</label>
        <input class="form-control" type="date" name="period" id="period" value="{{ $project->period ? date('Y-m-d', strtotime($project->period)) : '' }}">

        <label class="form-label" for="description">Descrizione:</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10">{{ $project->description }}</textarea>

        <label class="form-label" for="type_id">Tipo:</label>
        <select class="form-select" name="type_id" id="type_id">
            @foreach($types as $type)
                <option value="{{ $type->id }}" {{ $project->type_id == $type->id ? 'selected' : '' }}>
                    {{ $type->name }}
                </option>
            @endforeach
        </select>

        <label class="form-label mt-3">Tecnologie:</label>
        <div class="d-flex flex-column gap-1">
            @foreach($technologies as $technology)
                <div class="form-check">
                    <input 
                        class="form-check-input" 
                        type="checkbox" 
                        name="technologies[]" 
                        value="{{ $technology->id }}" 
                        id="tech{{ $technology->id }}"
                        {{ $project->technologies->contains($technology->id) ? 'checked' : '' }}
                    >
                    <label class="form-check-label" for="tech{{ $technology->id }}">
                        {{ $technology->name }}
                    </label>
                </div>
            @endforeach
        </div>

        <button class="btn btn-primary mt-3">Salva</button>
    </form>
</div>
@endsection
