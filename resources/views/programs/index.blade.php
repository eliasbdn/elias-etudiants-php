@section('title')
Liste des programmes
@stop
@extends('default')
    @section('content')
        <div class="p-5 mb-4">
            <a href="{{ url('/programme/ajouter')}}" class="btn btn-primary" type="button" role="button">Ajouter un programme</a>
            <div><br></div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Programme</th>
                        <th scope="col">Matière</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($programs as $program)
                        <tr>
                            <td><a href="{{ url('/sujets',[ $program->id ])}}">{{ $program->id }}</a></td>
                            <td>{{ $program->name }}</td>
                            <td>
                                @foreach ($program -> subjects as $subject)
                                {{ $subject->name }}
                                @endforeach
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Options
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ url('/programmes/modifier',[ $program->id ])}}">Modifier</a>
                                        <a class="dropdown-item" href="{{ url('/programmes/delete',[ $program->id ])}}">Supprimer</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
