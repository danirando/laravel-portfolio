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
                   <td><a href="{{ route('projects.show', $project->id)}}">Dettagli</a></td>
                </tr>
                @endforeach
        </tbody>
    </table></div>

@endsection