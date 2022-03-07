<style>
.modifier {
    width:48px;
    padding-left:10px;
    padding-right:10px;
}
</style>


@section('title')
Liste des classes
@stop

@extends('default')
    @section('content')
        <div class="p-5 mb-4">
            <a href="/section/ajouter" class="btn btn-primary" type="button" role="button">Ajouter une classe</a>
            <table class="table table-striped">
                <thead class="">
                  <tr>
                    <th scope="col">Ref</th>
                    <th scope="col">Classe</th>
                    <th scope="col">Options</th>
                  </tr>
                </thead>
                  <tbody>
                    @foreach ($sections as $section)
                        <tr>
                            <td> {{ $section->id }}</td>
                            <td><a href="/section/{{ $section->id }}">{{ $section->name }}</td></a>
                            <td>
                                <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Options
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="/section/{{ $section->id }}">Modifier</a>
                                        <a class="dropdown-item" href="/section/delete/{{ $section->id }}">Supprimer</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
              </table>
        </div>
    @stop
