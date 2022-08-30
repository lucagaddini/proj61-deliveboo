@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-start">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-start flex-wrap align-items-center pt-3 pb-2 mb-3">

                <div class="card-body">

                    <form action="{{ route('admin.items.update', $item) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        {{-- Nome prodotto --}}
                        <div class="form-group">
                            <label for="name">Nome del prodotto</label>
                            <input type="text" value="{{old('name', $item->name)}}"
                                class="form-control @error('name') is-invalid @enderror"
                                id="name" name="name"
                                placeholder="Scrivi qualcosa"
                            >
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Prezzo prodotto --}}
                        <div class="form-group">
                            <label for="price">Prezzo del prodotto</label>
                            <input type="text" value="{{old('price', $item->price)}}"
                                class="form-control @error('price') is-invalid @enderror"
                                id="price" name="price"
                                placeholder="Scrivi qualcosa"
                            >
                            @error('name')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Descrizione del prodotto --}}
                        <div class="form-group">
                            <label for="description">Descrizione del prodotto</label>
                            <textarea type="text" rows="6"
                                    class="form-control @error('description') is-invalid @enderror"
                                    id="description" name="description"
                                    placeholder="Scrivi qualcosa"
                            {{-- Non cambiare la disposizione delle >old< se no aggiunge spazi --}}
                            >{{old('description', ucfirst($item->description))}}</textarea>
                            @error('description')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Prodotto vegetariano --}}
                        <div class="form-group d-flex">
                            <label for="vegetarian">Questo prodotto è vegetariano?</label>
                            <div class="d-flex">
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
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"
                                            name="vegetarian" id="vegetarianTrue"
                                            value="1"
                                            {{ old('vegetarian') || $item->vegetarian == "1" ? 'checked' : '' }}
                                    >
                                    <label class="form-check-label" for="vegetarianTrue">
                                    {{-- L'avverbio affermativo richiede sempre l'accento --}}
                                       S&igrave;
                                    </label>
                                </div>
                            </div>
                        </div>

                        {{-- Prodotto visibile --}}
                        <div class="form-group d-flex">
                            <label for="visible">Rendi visibile sul tuo men&ugrave; questo prodotto</label>
                            <div class="d-flex">
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
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"
                                            name="visible" id="visibleTrue"
                                            value="1"
                                            {{ old('visible') || $item->visible == '1' ? 'checked' : '' }}
                                    >
                                    <label class="form-check-label" for="visibleTrue">
                                    {{-- L'avverbio affermativo richiede sempre l'accento --}}
                                        S&igrave;
                                    </label>
                                </div>
                            </div>
                        </div>

                        {{-- Select per Courses --}}
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="course_id">Scegli il tipo di portata</label>
                            </div>
                            <select class="custom-select"
                                    id="course_id" name="course_id">
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

                        {{-- Inserimento Immagini --}}
                        <div class="p-2 m-3">
                            <p for="immagine-prodotto">Immagine precedente:</p>
                            <img name="immagine-prodotto" style="max-width: 50%" src="{{ asset('images/' . $item->image_path) }}" alt="{{ $item->path_name }}">
                        </div>

                        <div class="form-group">
                            <label for="item-image">Aggiungi l'immagine del prodotto</label>
                            <input type="file" class="form-control-file" id="item-image">
                        </div>

                        {{-- Submit --}}
                        <button type="submit" class="btn btn-primary">Completa</button>
                    </form>
                </div>
            </div>
        </main>
    </div>
</div>


@endsection
