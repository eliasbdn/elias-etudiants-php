@extends('default')
    @section('content')
        <div class="p-5 mb-4">
            <a href="/sujets/ajouter" class="btn btn-primary" type="button" role="button">Ajouter une matière</a>
            <table class="table">
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
                        <td> {{ $subject->id }}</td>
                        <td><a href="/sujet/{{ $subject->id }}">{{ $subject->name }}</td></a>
                        <td> @foreach ($subject -> sections as $section)
                            {{ $section->name }}
                            @endforeach
                        </td>
                        <td>
                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Options
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="/sujets/{{ $subject->id }}">Modifier</a>
                                    <a class="dropdown-item" href="/sujets/delete/{{ $subject->id }}">Supprimer</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            </table>
        </div>
    @stop
