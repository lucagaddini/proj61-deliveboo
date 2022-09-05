@extends('admin.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Registrazione') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" id="register-form" data-parsley-validate>
                        @csrf

                        {{-- Nome ristorante --}}
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">* {{ __('Nome Ristorante') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text"
                                class="form-control @error('name') is-invalid @enderror"
                                name="name"
                                value="{{ old('name') }}"
                                autocomplete="name"
                                autofocus

                                {{-- Utilizzo della libreria Parsley --}}
                                required
                                data-parsley-minlength="3"
                                data-parsley-maxlength="255"
                                data-parsley-trigger="keyup"
                                {{-- // Parsley --}}
                                >

                            </div>
                        </div>

                        {{-- Indirizzo ristorante --}}
                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">* {{ __('Indirizzo') }}</label>

                            <div class="col-md-6">
                                <input id="address"
                                type="text"
                                class="form-control @error('address') is-invalid @enderror"
                                name="address"
                                value="{{ old('address') }}"
                                autocomplete="address"
                                autofocus

                                {{-- Utilizzo della libreria Parsley --}}
                                required
                                data-parsley-minlength="3"
                                data-parsley-maxlength="60"
                                data-parsley-trigger="keyup"
                                {{-- // Parsley --}}
                                >

                            </div>
                        </div>

                        {{-- Partita IVA --}}
                        <div class="form-group row">
                            <label for="vat_number" class="col-md-4 col-form-label text-md-right">* {{ __('P.Iva') }}</label>

                            <div class="col-md-6">
                                <input id="vat_number"
                                type="text"
                                class="form-control @error('vat_number') is-invalid @enderror"
                                name="vat_number"
                                value="{{ old('vat_number') }}"
                                autocomplete="vat_number"
                                autofocus

                                {{-- Utilizzo della libreria Parsley --}}
                                required
                                data-parsley-minlength="11"
                                data-parsley-maxlength="16"
                                data-parsley-trigger="keyup"
                                {{-- // Parsley --}}
                                >

                            </div>
                        </div>

                        {{-- Email Account --}}
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">* {{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email"
                                type="email"
                                class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}"
                                autocomplete="email"

                                {{-- Utilizzo della libreria Parsley --}}
                                required
                                data-parsley-maxlength="255"
                                data-parsley-trigger="keyup"
                                {{-- // Parsley --}}
                                >

                            </div>
                        </div>

                        {{-- Password Account --}}
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">* {{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password"
                                type="password"
                                class="form-control @error('password') is-invalid @enderror"
                                name="password"
                                autocomplete="new-password"

                                {{-- Utilizzo della libreria Parsley --}}
                                required
                                data-parsley-minlength="8"
                                data-parsley-maxlength="255"
                                data-parsley-trigger="keyup"
                                {{-- // Parsley --}}
                                >

                            </div>
                        </div>

                        {{-- Conferma Password Account --}}
                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">* {{ __('Conferma Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm"
                                type="password"
                                class="form-control"
                                name="password_confirmation"
                                autocomplete="new-password"

                                {{-- Utilizzo della libreria Parsley --}}
                                required
                                data-parsley-equalto="#password"
                                data-parsley-maxlength="255"
                                data-parsley-trigger="keyup"
                                {{-- // Parsley --}}

                                >
                            </div>
                        </div>


                        {{-- Checkbox Categorie --}}
                        <div class="form-group row">
                            <label for="categories" class="col-md-4 col-form-label text-md-right">* {{ __('Seleziona le categorie') }} <br> (Scegliere attentamente, non sarà possibile modificarle successivamente)</label>

                            <div class="col-md-6">

                                @php
                                    $categories = \App\Category::all();
                                @endphp

                                <div class="form-check @error('categories') is-invalid @enderror" >

                                    @foreach ( $categories as $category)

                                    <div class="form-check">
                                        <input class="form-check-input"
                                            type="checkbox"
                                            name="categories[]"

                                            {{-- Utilizzo della libreria Parsley per il checkbox ed assegnazione "required" all'ultimo elemento dell'array --}}
                                            data-parsley-mincheck="1"
                                            {{ ($category->id === count($categories) ) ? 'required' : '' }}
                                            data-parsley-errors-container="#error-checkbox"
                                            {{-- Fine utilizzo libreria --}}

                                            value="{{$category->id}}"
                                            id="{{'category-'.$category->id}}"
                                            {{ (is_array(old('categories')) && in_array($category->id, old('categories'))) ? ' checked' : '' }}
                                        >
                                        <label class="form-check-label" for="defaultCheck2">
                                            {{$category->name}}
                                        </label>
                                    </div>

                                    @endforeach

                                    {{-- Span contenente gli errori relativi al gruppo di checkbox --}}
                                    <span id="error-checkbox">
                                    </span>

                                </div>

                            </div>
                        </div>

                        {{-- Bottone registrazione --}}
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn_custom">
                                    {{ __('Registrati') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>

(function(){
         $("#register-form").parsley();
     });

</script>

@endsection
