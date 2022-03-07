@section('title')
Profil de l'étudiant
@stop

@extends('default')
    @section('content')
        <div class="p-5 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $student->name. ' ' .$student->surname }}</h5>
                  <p class="card-text">Etudiant</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">{{ $student->email }}</li>
                  <li class="list-group-item">{{ $student->adress }}</li>
                  <li class="list-group-item">Est dans la classe : {{ $student->section->name }}</li>
                </ul>
                <div class="card-body">
                  <a href="/" class="card-link">LinkedIn</a>
                </div>
              </div>
        </div>
    @stop
