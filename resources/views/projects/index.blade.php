@extends('layouts.master')

@section('content')
<div class="container my-3">  

    <div class="container d-flex justify-content-between"><h1 class="mb-3">Progetti</h1>

      <a class="btn btn-primary" href="{{ route('projects.create')}}">Aggiungi progetto</a></div>
      

    <table class="table">
        <thead>
            <tr>
                <th>
                Nome
            </th>
            <th>
                Periodo
            </th>
            <th>

            </th>
        </tr>
            
        </thead>
        <tbody>
            @foreach ($projects as $project)
               <tr>
                   <td>{{ $project->name }}</td>
                   <td>{{ explode(' ', $project->period)[0] }}</td>
                   <td class="d-flex justify-content-end gap-3">
                    <a class="btn btn-primary" href="{{ route('projects.show', $project->id)}}">Dettagli</a>
                    <a class="btn btn-warning" href="{{ route('projects.edit', $project->id)}}">Modifica</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                         Elimina
                    </button>
                   </td>
                </tr>
                @endforeach
        </tbody>
    </table></div>

    <!-- Button trigger modal -->


<!-- Modal -->
<form action="{{ route('projects.destroy', $project)}}" method="POST">

    @csrf
    @method('DELETE')
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Sei sicuro di eliminare il progetto?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
        <button type="submit" class="btn btn-danger">Elimina</button>
      </div>
    </div>
  </div>
</div>

</form>


@endsection