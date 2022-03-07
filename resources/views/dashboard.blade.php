@extends('default')
@section('content')

<div class="p-5 mb-4">
    <div class="row">
        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Classes</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a class="btn btn-primary dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="false">Options</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown09">
                <li><a class="dropdown-item" href="/sections/liste">Liste des classes</a></li>
                <li><a class="dropdown-item" href="/section/ajouter">Ajouter une classe</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Etudiants</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <a class="btn btn-primary dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="false">Options</a>
              <ul class="dropdown-menu" aria-labelledby="dropdown09">
                <li><a class="dropdown-item" href="/etudiants/liste">Liste des étudiants</a></li>
                <li><a class="dropdown-item" href="/etudiant/ajouter">Ajouter un étudiant</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Matières</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a class="btn btn-primary dropdown-toggle" href="#" id="dropdown09" data-bs-toggle="dropdown" aria-expanded="false">Options</a>
                <ul class="dropdown-menu" aria-labelledby="dropdown09">
                    <li><a class="dropdown-item" href="/sujets/liste">Liste des matières</a></li>
                    <li><a class="dropdown-item" href="/sujets/ajouter">Ajouter une matière</a></li>
                </ul>
              </div>
            </div>
          </div>
<div>
    <br/>
    <br/>
</div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@stop

