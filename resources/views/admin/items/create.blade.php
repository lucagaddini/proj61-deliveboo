@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-start">
        <section class="col-md-10 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-start flex-wrap align-items-center pt-3 pb-2 mb-3">

                <div class="card w-100">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        <span class="font-weight-bold"> Aggiungi Prodotto</span>
                        <a href="{{ route('admin.items.index') }}" class="btn btn_custom_secondary">Indietro</a>
                    </div>

                    <div class="card-body">

                        <form action="{{ route('admin.items.store') }}" method="POST" enctype="multipart/form-data" id="item-form" data-parsley-validate>
                            @csrf

                            {{-- Nome prodotto --}}
                            <div class="form-group">
                                <label class="font-weight-bold" for="name">Nome del prodotto</label>
                                <input type="text"
                                    value="{{old('name')}}"
                                    class="form-control @error('name') is-invalid @enderror"
                                    id="name"
                                    name="name"
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
                                <label class="font-weight-bold" for="price">Prezzo del prodotto</label>
                                <input type="text"
                                    value="{{old('price')}}"
                                    class="form-control @error('price') is-invalid @enderror"
                                    id="price"
                                    name="price"
                                    placeholder="Inserisci il Prezzo"

                                    {{-- Utilizzo della libreria Parsley --}}
                                    required
                                    data-parsley-type="number"
                                    data-parsley-trigger="keyup"
                                    {{-- // Parsley --}}
                                >

                            </div>

                            {{-- Descrizione prodotto --}}
                            <div class="form-group">
                                <label class="font-weight-bold" for="description">Descrizione del prodotto</label>
                                <textarea type="text"
                                        rows="6"
                                        class="form-control @error('description') is-invalid @enderror"
                                        id="description"
                                        name="description"
                                        placeholder="Inserisci la descrizione del Prodotto"

                                        {{-- Utilizzo della libreria Parsley --}}
                                        required
                                        data-parsley-minlength="3"
                                        data-parsley-maxlength="255"
                                        data-parsley-trigger="keyup"
                                        {{-- // Parsley --}}

                                {{-- Non cambiare la disposizione delle >old< se no aggiunge spazi --}}
                                >{{old('description')}}</textarea>

                            </div>

                            {{-- Prodotto vegetariano --}}
                            <div class="form-group d-flex flex-column">
                                <label class="font-weight-bold" for="vegetarian">Questo prodotto è vegetariano?</label>
                                <div class="d-flex">
                                    

                                    <div class="form-check">
                                        <input class="form-check-input"
                                                type="radio"
                                                name="vegetarian"
                                                id="vegetarianTrue"
                                                value="1"
                                                {{ old('vegetarian') == "1" ? 'checked' : '' }}
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
                                        <input class="form-check-input"
                                                type="radio"
                                                name="vegetarian"
                                                id="vegetarianFalse"
                                                value="0"
                                                {{ old('vegetarian') == "0" ? 'checked' : '' }}
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
                            <div class="form-group d-flex flex-column">
                                <label class="font-weight-bold" for="visible">Rendi visibile sul tuo men&ugrave; questo prodotto</label>
                                <div class="d-flex">
                                    
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"
                                                name="visible" id="visibleTrue"
                                                value="1"
                                                {{ old('visible') == '1' ? 'checked' : '' }}

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
                                                {{ old('visible') == '0' ? 'checked' : '' }}
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
                                                @if (old('course_id')) selected @endif
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
                            <div class="form-group">
                                <label class="font-weight-bold" for="item-image">Aggiungi l'immagine del prodotto</label>
                                <input type="file" 
                                        class="form-control-file" 
                                        id="item-image" 
                                        name="image"
                                        onchange="showImage(event)"
                                        {{-- Utilizzo della libreria Parsley --}}
                                        required
                                        data-parsley-errors-container="#error-image"
                                        {{-- // Parsley --}}
                                        >
                            </div>

                             {{-- Span contenente gli errori relativi al gruppo di visible --}}
                            <div id="error-image">
                            </div>

                            <div id="new-image-box" class="d-none">
                                <p for="immagine-prodotto">Immagine inserita:</p>
                                <img id="new-image" name="immagine-prodotto" style="max-width: 50%" src="" alt="Nuova Immagine">
                            </div>

                            {{-- Submit --}}
                            <button type="submit" class="btn btn_custom">Salva</button>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>


<script>

    console.log('test');
    
    (function(){
        $("#item-form").parsley();
    });

    var showImage = function(event) {
        const image = document.getElementById('new-image');
        image.src = URL.createObjectURL(event.target.files[0]);
        const box = document.getElementById('new-image-box');
        box.classList.remove('d-none');
    };

</script>


@endsection
