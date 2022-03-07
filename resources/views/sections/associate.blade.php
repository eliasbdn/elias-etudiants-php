@section('title')
Ajouter d'une matière dans une section
@stop

@extends('default')
    @section('content')

    <div class="container-fluid px-1 py-2 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <div class="card">
                    <h3 class="text-center mb-4">Formulaire d'ajout</h3>
                   <form method="POST" action="{{url('section/associer')}}">
                   {!! csrf_field() !!}

                        <!-- Classe -->
                        <div class="form-outline mb-4">
                            <input type="hidden" name="sectionID" value = "{{ $section->id }}">
                            <select class="custom-select form-control" id="matiere" name="matiere">
                             @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{$subject->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="duree" name="duree" class="form-control" required="required" value="{{old('duree')}}"/>
                                <label class="form-label" for="duree">Durée</label>
                                @if($errors->has('duree'))
                                <div class="error text-danger">
                                    {{$errors->first('duree')}}
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-outline">
                                <input type="text" id="coeff" name="coeff" class="form-control" required="required" value="{{old('coeff')}}"/>
                                <label class="form-label" for="coeff">Coefficient</label>
                                @if($errors->has('coeff'))
                                <div class="error text-danger">
                                    {{$errors->first('coeff')}}
                                </div>
                                @endif
                            </div>
                        </div>


                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
