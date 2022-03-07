@section('title')
Liste des classes
@stop
@extends('default')
    @section('content')
        <div class="p-5 mb-4">
            <a href="{{ url('/section/ajouter')}}" class="btn btn-primary" type="button" role="button">Ajouter une classe</a>
            <div><br></div>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Classe</th>
                    <th scope="col">Options</th>
                  </tr>
                </thead>
                  <tbody>
                    @foreach ($sections as $section)
                        <tr>
                            <td><a href="{{ url('/section',[ $section->id ])}}">{{ $section->id }}</td></a>
                            <td>{{ $section->name }}</td>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Options
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="{{ url('/section/modifier',[ $section->id ])}}">Modifier</a>
                                        <a class="dropdown-item" href="{{ url('/section/delete',[ $section->id ])}}">Supprimer</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    @stop
