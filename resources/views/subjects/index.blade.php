@section('title')
Liste des matières
@stop
@extends('default')
    @section('content')
        <div class="p-5 mb-4">
            <a href="{{ url('/sujet/ajouter')}}" class="btn btn-primary" type="button" role="button">Ajouter une matière</a>
            <div><br></div>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Matière</th>
                        <th scope="col">Section</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $subject)
                        <tr>
                            <td><a href="{{ url('/sujets',[ $subject->id ])}}">{{ $subject->id }}</a></td>
                            <td>{{ $subject->name }}</td>
                            <td>
                                @foreach ($subject -> sections as $section)
                                {{ $section->name }}
                                @endforeach
                            </td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Options
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ url('/sujets/modifier',[ $subject->id ])}}">Modifier</a>
                                        <a class="dropdown-item" href="{{ url('/sujets/delete',[ $subject->id ])}}">Supprimer</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @stop
