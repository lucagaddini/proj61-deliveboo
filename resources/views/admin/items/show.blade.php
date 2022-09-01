@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-start">
        <section class="col-md-10 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-start flex-wrap align-items-center pt-3 pb-2 mb-3">

            {{-- Singola scheda --}}
            {{-- Verifichiamo se "user_id" associato al piatto corrisponde a quello dell'utente loggato ed visualizziamo le informazioni richieste --}}
                @if (Auth::user()->id == $item->user_id)
                    <div class="card w-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span class="font-weight-bold"> Informazioni aggiuntive del prodotto selezionato</span>
                            <a href="{{ route('admin.items.index') }}" class="btn btn_custom_secondary">Torna al Men&ugrave;</a>
                        </div>

                        <div class="card-body d-flex flex-column flex-md-row row">
                            <img class="card-img-top col-12 col-lg-4 w-100" src="{{ asset('images/' . $item->image_path) }}" alt="{{ $item->name }}">
                            <div class="card-body col-12 col-lg-8">

                                <h4 class="card-title">{{ $item->name }}</h4>
                                <p class="card-text"><strong>Tipologia: </strong>{{ ($item->course->name) }}</p>
                                <p class="card-text"><strong>Prezzo: </strong>{{ ($item->price) }} &euro;</p>
                                <p class="card-text"><strong>Descrizione: </strong><br>{{ ucfirst($item->description) }}</p>
                                <p class="card-text"><strong>Vegano: </strong>{{ $item->vegetarian === 1? 'Sì' : 'No' }}</p>
                                <p class="card-text"><strong>Visibile: </strong>{{ $item->visible === 1? 'Sì' : 'No' }}</p>


                                <div class="button_container d-flex justify-content-end align-items-center">
                                    <a class=" mx-3 btn btn_custom_edit" href="{{ route('admin.items.edit', $item)  }}">Modifica <i class="fas fa-edit"></i></a>
                                    <form class= "d-inline"
                                            onsubmit= "return confirm('Vuoi eliminare definitivamente il piatto ## {{ $item->name }} ## ?')"
                                            action= "{{ route('admin.items.destroy', $item) }}" method= "POST">
                                        @csrf
                                        @method ('DELETE')
                                        <button class="btn btn_custom_delete">Elimina <i class="far fa-trash-alt"></i></button>
                                    </form>
                                </div>


                            </div>
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
            {{-- /Singola scheda --}}

            </div>
        </section>
    </div>
</div>


@endsection
