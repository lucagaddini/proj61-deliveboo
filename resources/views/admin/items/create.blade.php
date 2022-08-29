@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-start">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-start flex-wrap align-items-center pt-3 pb-2 mb-3">

                <div class="card w-100">
                    <div class="card-header d-flex justify-content-between align-items-center">{{ __('Crea nuovo Prodotto') }}
                        <a href="{{ route('admin.items.index') }}" class="btn btn_custom_secondary">Indietro</a>
                    </div>
    
                    <div class="card-body">
    
                        <form action="{{ route('admin.items.store') }}" method="POST" data-parsley-validate>
                            @csrf

                            {{-- Nome prodotto --}}
                            <div class="form-group">
                                <label for="name">Nome del prodotto</label>
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

                                {{-- @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror --}}

                            </div>

                            {{-- Prezzo prodotto --}}
                            <div class="form-group">
                                <label for="price">Prezzo del prodotto</label>
                                <input type="text" 
                                    value="{{old('price')}}"
                                    class="form-control @error('price') is-invalid @enderror"
                                    id="price" 
                                    name="price"
                                    placeholder="Scrivi qualcosa"

                                    {{-- Utilizzo della libreria Parsley --}}
                                    required
                                    data-parsley-type="number"
                                    data-parsley-trigger="keyup"
                                    {{-- // Parsley --}}

                                >

                                {{-- @error('name')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror --}}

                            </div>

                            {{-- Descrizione prodotto --}}
                            <div class="form-group">
                                <label for="description">Descrizione del prodotto</label>
                                <textarea type="text"
                                        rows="6"
                                        class="form-control @error('description') is-invalid @enderror"
                                        id="description" 
                                        name="description"
                                        placeholder="Scrivi qualcosa"

                                        {{-- Utilizzo della libreria Parsley --}}
                                        required
                                        data-parsley-minlength="3"
                                        data-parsley-maxlength="255"
                                        data-parsley-trigger="keyup"
                                        {{-- // Parsley --}}

                                {{-- Non cambiare la disposizione delle >old< se no aggiunge spazi --}}
                                >{{old('description')}}</textarea>

                                {{-- @error('description')
                                    <p class="text-danger">{{ $message }}</p>
                                @enderror --}}

                            </div>


                            {{-- Prodotto vegetariano --}}
                            <div class="form-group d-flex">
                                <label for="vegetarian">Questo prodotto è vegetariano?</label>
                                <div class="d-flex">
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

                                    <div class="form-check">
                                        <input class="form-check-input" 
                                                type="radio"
                                                name="vegetarian" 
                                                id="vegetarianTrue"
                                                value="1"
                                                {{ old('vegetarian') == "1" ? 'checked' : '' }}
                                        >

                                        <label class="form-check-label" for="vegetarianTrue">
                                            Si
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
                                                {{ old('visible') == '0' ? 'checked' : '' }}
                                        >

                                        <label class="form-check-label" for="visibleFalse">
                                            No
                                        </label>

                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio"
                                                name="visible" id="visibleTrue"
                                                value="1"
                                                {{ old('visible') == '1' ? 'checked' : '' }}
                                        >

                                        <label class="form-check-label" for="visibleTrue">
                                            Si
                                        </label>

                                    </div>
                                </div>
                            </div>

                            {{-- Select per Category --}}
                            {{-- <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="category_id">Categoria di giochi</label>
                                </div>
                                <select class="custom-select"
                                        id="category_id" name="category_id">
                                    <option value="">Scegli di che tipo di gioco vuoi parlare</option>
                                    @foreach ($categories as $category)
                                        <option
                                            value="{{ $category->id }}"
                                            @if ($post->category && $category->id == old('category_id', $post->category->id)) selected @endif>
                                                {{ $category->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div> --}}

                            {{-- Checks per Tags --}}
                            {{-- <h5 class="mb-1 mt-4">Scegli dei tags per il tuo post!</h5>
                            <div class="form-check mb-4">
                                @foreach ($tags as $tag)
                                    <input class="form-check-input"
                                        type="checkbox"
                                        value="{{ $tag->id }}"
                                        id="tag{{ $loop->iteration }}"
                                        name="tags[]"
                                        @if (!$errors->any() && $post->tags->contains($tag->id))
                                            checked
                                        @elseif (!$errors->any() && in_array($tag->id, old('tags', [])))
                                            checked
                                        @endif>

                                    <label class="form-check-label mr-5"
                                        for="tag{{ $loop->iteration }}"
                                        name="tags[]">
                                        {{ $tag->name }}
                                    </label>
                                @endforeach
                            </div> --}}

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

    (function(){
        $("#register-form").parsley();
    });

</script>


@endsection
