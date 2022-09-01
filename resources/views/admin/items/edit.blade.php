@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-start">
        <section class="col-md-10 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-start flex-wrap align-items-center pt-3 pb-2 mb-3">

                {{-- Verifichiamo se "user_id" associato al piatto corrisponde a quello dell'utente loggato ed visualizziamo le informazioni richieste --}}
                @if (Auth::user()->id == $item->user_id)
                    <div class="card w-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span class="font-weight-bold"> Modifica le informazioni del prodotto selezionato</span>
                            <a href="{{ route('admin.items.index') }}" class="btn btn_custom_secondary">Torna al Men&ugrave;</a>
                        </div>

                        <div class="card-body">

                            <form action="{{ route('admin.items.update', $item) }}" method="POST" enctype="multipart/form-data"
                            id="item-edt-form" data-parsley-validate>
                                @csrf
                                @method('PUT')

                                {{-- Nome prodotto --}}
                                <div class="form-group">
                                    <label class="font-weight-bold"  for="name">Nome del prodotto</label>
                                    <input type="text" value="{{old('name', $item->name)}}"
                                        class="form-control @error('name') is-invalid @enderror"
                                        id="name" name="name"
                                        placeholder="Inserisci il nome del Prodotto"
                                        {{-- Utilizzo della libreria Parsley --}}
                                        required
                                        data-parsley-minlength="3"
                                        data-parsley-maxlength="255"
                                        data-parsley-trigger="keyup"
                                        {{-- // Parsley --}}
                                    >
                                </div>

                                {{-- Prezzo prodotto --}}
                                <div class="form-group">
                                    <label class="font-weight-bold"  for="price">Prezzo del prodotto</label>
                                    <input type="text" value="{{old('price', $item->price)}}"
                                        class="form-control @error('price') is-invalid @enderror"
                                        id="price" name="price"
                                        placeholder="Inserisci il Prezzo"
                                        {{-- Utilizzo della libreria Parsley --}}
                                        required
                                        data-parsley-type="number"
                                        data-parsley-trigger="keyup"
                                        {{-- // Parsley --}}
                                    >
                                    
                                </div>

                                {{-- Descrizione del prodotto --}}
                                <div class="form-group">
                                    <label class="font-weight-bold"  for="description">Descrizione del prodotto</label>
                                    <textarea type="text" rows="6"
                                            class="form-control @error('description') is-invalid @enderror"
                                            id="description" name="description"
                                            placeholder="Inserisci la descrizione del Prodotto"
                                            {{-- Utilizzo della libreria Parsley --}}
                                            required
                                            data-parsley-minlength="3"
                                            data-parsley-maxlength="255"
                                            data-parsley-trigger="keyup"
                                            {{-- // Parsley --}}
                                    {{-- Non cambiare la disposizione delle >old< se no aggiunge spazi --}}
                                    >{{old('description', ucfirst($item->description))}}</textarea>
                                    

                                </div>

                                {{-- Prodotto vegetariano --}}
                                <div class="form-group d-flex">
                                    <label class="font-weight-bold" for="vegetarian">Questo prodotto è vegetariano?</label>
                                    <div class="d-flex">
                                        
                                        <div class="form-check mx-3">
                                            <input class="form-check-input" type="radio"
                                                    name="vegetarian" id="vegetarianTrue"
                                                    value="1"
                                                    {{ old('vegetarian') || $item->vegetarian == "1" ? 'checked' : '' }}
                                                    {{-- Utilizzo della libreria Parsley --}}
                                                    required
                                                    data-parsley-errors-container="#error-vegetarian"
                                                    {{-- // Parsley --}}
                                            >
                                            <label class="form-check-label" for="vegetarianTrue">
                                            {{-- L'avverbio affermativo richiede sempre l'accento --}}
                                            S&igrave;
                                            </label>
                                        </div>

                                        <div class="form-check mx-3">
                                            <input class="form-check-input" type="radio"
                                                    name="vegetarian" id="vegetarianFalse"
                                                    value="0"
                                                    {{ old('vegetarian') || $item->vegetarian == "0" ? 'checked' : '' }}
                                            >
                                            <label class="form-check-label" for="vegetarianFalse">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                    {{-- Span contenente gli errori relativi al gruppo di vegetarian --}}
                                    <div id="error-vegetarian">
                                    </div>
                                </div>

                                {{-- Prodotto visibile --}}
                                <div class="form-group d-flex">
                                    <label class="font-weight-bold" for="visible">Rendi visibile sul tuo men&ugrave; questo prodotto</label>
                                    <div class="d-flex">
                                        
                                        <div class="form-check mx-3">
                                            <input class="form-check-input" type="radio"
                                                    name="visible" id="visibleTrue"
                                                    value="1"
                                                    {{ old('visible') || $item->visible == '1' ? 'checked' : '' }}
                                                    {{-- Utilizzo della libreria Parsley --}}
                                                    required
                                                    data-parsley-errors-container="#error-visible"
                                                    {{-- // Parsley --}}
                                            >
                                            <label class="form-check-label" for="visibleTrue">
                                            {{-- L'avverbio affermativo richiede sempre l'accento --}}
                                                S&igrave;
                                            </label>
                                        </div>

                                        <div class="form-check mx-3">
                                            <input class="form-check-input" type="radio"
                                                    name="visible" id="visibleFalse"
                                                    value="0"
                                                    {{ old('visible') || $item->visible == '0' ? 'checked' : '' }}
                                            >
                                            <label class="form-check-label" for="visibleFalse">
                                                No
                                            </label>
                                        </div>
                                    </div>
                                    {{-- Span contenente gli errori relativi al gruppo di visible --}}
                                    <div id="error-visible">
                                    </div>
                                </div>

                                {{-- Select per Courses --}}
                                <div class="d-flex flex-column">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <label class="font-weight-bold input-group-text" for="course_id">Scegli il tipo di portata</label>
                                        </div>
                                        <select class="custom-select"
                                                id="course_id" 
                                                name="course_id"
                                                {{-- Utilizzo della libreria Parsley --}}
                                                required
                                                data-parsley-errors-container="#error-courses"
                                                {{-- // Parsley --}}>
                                            <option value=""></option>
                                            @foreach ($courses as $course)
                                                <option
                                                    value="{{ $course->id }}"
                                                    {{ $item->course_id === $course->id ? 'selected' : '' }}
                                                >
                                                        {{ $course->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                    {{-- Span contenente gli errori relativi al gruppo di visible --}}
                                    <div id="error-courses">
                                    </div>
                                </div>

                                {{-- Inserimento Immagini --}}
                                <div class="mb-3">
                                    <p class="font-weight-bold" for="immagine-prodotto">Immagine attuale:</p>
                                    <img id="old-image" name="immagine-prodotto" style="max-width: 50%" src="{{ asset('images/' . $item->image_path) }}" alt="{{ $item->path_name }}">
                                </div>

                                <div class="form-group">
                                    <label class="font-weight-bold" for="item-image">Aggiungi/Cambia l'immagine del prodotto</label>
                                    <input type="file"
                                            class="form-control-file"
                                            id="item-image"
                                            onchange="showImage(event)"
                                            >
                                </div>

                                {{-- Submit --}}
                                <button type="submit" class="btn btn_custom">Modifica</button>
                            </form>
                        </div>
                    </div>
                @else
                    {{-- Se "user_id" associato al piatto non corrisponde a quello dell'utente loggato viene restituto un messaggio d'errore --}}
                    <div class="card w-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span class="font-weight-bold"> Accesso negato </span>
                            <a href="{{ route('admin.items.index') }}" class="btn btn_custom_secondary">Torna al Men&ugrave;</a>
                        </div>

                        <div class="card-body d-flex flex-column flex-md-row row">
                            <div class="card-body col-12 col-lg-8">
                                <p class="card-title">Il piatto selezionato non è presente nel tuo menu</p>
                            </div>
                        </div>
                    </div>
                @endif
            </div>
        </main>
    </div>
</div>

<script>

(function(){
        $("#item-edit-form").parsley();
    });

    var showImage = function(event) {
        const image = document.getElementById('old-image');
        image.src = URL.createObjectURL(event.target.files[0]);
    };
</script>


@endsection
