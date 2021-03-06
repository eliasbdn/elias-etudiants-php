@section('title')
Présentation de la classe
@stop

@extends('default')
    @section('content')
    <div class="p-5 mb-4">
        <h1>La classe</h1>
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Options
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="{{ url('/section/associer',[ $section->id ])}}">Associer une matière</a>
            </div>
        </div>
        <div><br></div>
        <h3>Les matières appartenants à la classe</h3>
        <div><br></div>
        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Matière</th>
            <th scope="col">Durée</th>
            <th scope="col">Coefficient</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($section -> subjects as $subject)
                <tr>
                    <td> {{ $subject->id }}</td>
                    <td> {{ $subject->name }}</td>
                    <td> {{ $subject->pivot->duree }}</td>
                    <td> {{ $subject->pivot->coefficient }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Options
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ url('/section',[ $section->id ])}}" >Modifier</a>
                                <a class="dropdown-item" href="{{ url('/section/associer',[ $section->id ])}}">Associer une matière</a>
                                <a class="dropdown-item" href="{{ url('/section/delete',[ $section->id ])}}">Supprimer</a>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
        </table>

        <div><br></div>
        <h3>Les élèves appartenants à la classe</h3>
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
                @foreach($section -> students as $student)
                    <tr>
                        <td> {{ $student->id }}</td>
                        <td> {{ $student->name }}</td>
                        <td><a href="{{ url('/etudiant',[ $student->id ])}}">{{ $student->surname }}</td></a>
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

