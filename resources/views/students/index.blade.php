<style>
.modifier {
    width:48px;
    padding-left:10px;
    padding-right:10px;
}
</style>


@section('title')
Liste des étudiants
@stop
@extends('default')
    @section('content')
        <div class="p-5 mb-4">
            <a href="/etudiant/ajouter" class="btn btn-primary" type="button" role="button">Ajouter un étudiant</a>
            <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Email</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                    <tr>
                        <td> {{ $student->id }}</td>
                        <td> {{ $student->name }}</td>
                        <td><a href="/etudiant/{{ $student->id }}">{{ $student->surname }}</td></a>
                        <td> {{ $student->email }}</td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Options
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/etudiant/{{ $student->id }}">Modifier</a>
                                    <a class="dropdown-item" href="/etudiant/delete/{{ $student->id }}">Supprimer</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    @stop
