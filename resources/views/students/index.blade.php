@section('title')
Liste des étudiants
@stop
@extends('default')
    @section('content')
        <div class="p-5 mb-4">
            <a href="{{ url('/etudiant/ajouter')}}" class="btn btn-primary" type="button" role="button">Ajouter un étudiant</a>
            <div><br></div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Prénom</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($students as $student)
                        <tr>
                            <td><a href="/etudiant/{{ $student->id }}">{{ $student->id }}</a></td>
                            <td> {{ $student->name }}</td>
                            <td>{{ $student->surname }}</td>
                            <td> {{ $student->email }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Options
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ url('/etudiant',[ $student->id ])}}">Modifier</a>
                                        <a class="dropdown-item" href="{{ url('/etudiant/delete',[ $student->id ])}}">Supprimer</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @stop
