@section('title')
Modification d'un étudiant
@stop

@extends('default')
    @section('content')

    <style>
        body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-image: url("https://i.imgur.com/GMmCQHC.png");
    background-repeat: no-repeat;
    background-size: 100% 100%
    }

.card {
    padding: 30px 40px;
    margin-top: 60px;
    margin-bottom: 60px;
    border: none !important;
    box-shadow: 0 6px 12px 0 rgba(0, 0, 0, 0.2)
}

.blue-text {
    color: #00BCD4
}

.form-control-label {
    margin-bottom: 0
}

input,
textarea,
button {
    padding: 8px 15px;
    border-radius: 5px !important;
    margin: 5px 0px;
    box-sizing: border-box;
    border: 1px solid #ccc;
    font-size: 18px !important;
    font-weight: 300
}

input:focus,
textarea:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #00BCD4;
    outline-width: 0;
    font-weight: 400
}

.btn-block {
    text-transform: uppercase;
    font-size: 15px !important;
    font-weight: 400;
    height: 43px;
    cursor: pointer
}

.btn-block:hover {
    color: #fff !important
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}
</style>


    <div class="container-fluid px-1 py-2 mx-auto">
        <div class="row d-flex justify-content-center">
            <div class="col-xl-7 col-lg-8 col-md-9 col-11 text-center">
                <div class="card">
                    <h3 class="text-center mb-4">Formulaire de modification</h3>
                    <form method="POST" action="{{url('etudiant/modifier-autorise')}}">
                        {!! csrf_field() !!}
                        <input type="hidden" value="{{$student->id}}" name="id">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row mb-4">
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="name" name="name" class="form-control" value="{{$student->name}}"/>
                                    <label class="form-label" for="name">Prénom</label>
                                    @if($errors->has('name'))
                                    <div class="error text-danger">
                                        {{$errors->first('name')}}
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-outline">
                                    <input type="text" id="surname" name="surname" class="form-control" value="{{$student->surname}}"/>
                                    <label class="form-label" for="surname">Nom</label>
                                    @if($errors->has('surname'))
                                    <div class="error text-danger">
                                        {{$errors->first('surname')}}
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <input type="text" id="adress" name="adress"class="form-control" value="{{$student->adress}}"/>
                            <label class="form-label" for="adress">Adresse</label>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="email" name="email" class="form-control" value="{{$student->email}}"/>
                            <label class="form-label" for="email">Email</label>
                        </div>

                        <!-- Classe -->
                        <div class="form-outline mb-4">
                            <select class="custom-select form-control" id="section" name="section">
                             @foreach ($sections as $section)
                                    <option value="{{ $section->id }}">{{$section->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary">Envoyer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @stop
