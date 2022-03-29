@section('title')
Profil de la matière
@stop

@extends('default')
    @section('content')
        <div class="p-5 mb-4">
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">{{ $subject->name}}</h5>
                  <p class="card-text">Matière</p>
                </div>
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">{{ $subject->duree }}</li>
                </ul>
              </div>
        </div>
    @stop
