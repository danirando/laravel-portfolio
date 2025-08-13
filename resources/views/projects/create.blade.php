@extends('layouts.master')

@section('content')
<div class="container">
    <h1 class="my-3">Aggiungi un nuovo progetto</h1>

    <form class="d-flex w-50 flex-column gap-3" action="{{ route('projects.store') }}" method="POST">
        @csrf
        <label class="form-label" for="name">Nome</label>
        <input class="form-control" type="text" name="name" id="name">

        <label class="form-label" for="period">Periodo</label>
        <input class="form-control" type="date" name="period" id="period">

        <label class="form-label" for="description">Descrizione</label>
        <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>

        <label class="form-label" for="type_id">Tipo</label>
        <select class="form-select" name="type_id" id="type_id">
            <option value="" selected>Seleziona un tipo</option>
            @foreach($types as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
        </select>

        <button class="btn btn-primary">Salva</button>
    </form>
</div>
@endsection
