@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-start">
        <section class="col-md-10 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-start flex-wrap align-items-center pt-3 pb-2 mb-3">

            {{-- Singola scheda --}}
                {{-- Verifichiamo se "user_id" associato al piatto corrisponde a quello dell'utente loggato ed visualizziamo le informazioni richieste --}}
                @if (Auth::user()->id == $items[0]->user_id)

                    <div class="card w-100 mb-2">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span class="font-weight-bold"> ORDINE #{{ $order->id }} </span>
                            <a href="{{ route('admin.orders.index') }}" class="btn btn_custom_secondary">Torna all'elenco Ordini</a>
                        </div>

                        <div class="card-body d-flex flex-column flex-md-row row">
                            <div class="card-body col-12 col-lg-8">

                                <p class="card-text"><strong>Nome e Cognome: </strong>{{$order->name}} {{$order->surname}}</p>
                                <p class="card-text"><strong>Indirizzo: </strong>{{$order->address}}</p>
                                <p class="card-text"><strong>Email: </strong>{{$order->email}}</p>
                                <p class="card-text"><strong>Telefono: </strong>{{$order->telephone_number}}</p>
                                <p class="card-text"><strong>Totale: </strong>{{$order->total}} &euro;</p>

                            </div>
                        </div>
                    </div>

                    <div class="card w-100">
                        <div class="card-header d-flex justify-content-between align-items-center">
                            <span class="font-weight-bold">CARRELLO: </span>
                        </div>
                        <div class="card-body d-flex flex-column flex-md-row row">
                            @foreach ($items as $item)
                                <div class="card-body col-12 col-lg-3">
                                    <p class="card-text"><strong>Nome prodotto: </strong>{{$item->name}}</p>
                                    <p class="card-text"><strong>Prezzo prodotto: </strong>{{$item->price}} &euro;</p>
                                    <p class="card-text"><strong>Quantità prodotto: </strong>x{{$item->quantity}}</p>
                                    <p class="card-text"><strong>Subtotale: </strong>{{$item->price*$item->quantity}} &euro;</p>
                                </div>
                            @endforeach
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
                                <p class="card-title">L'ordine selezionato non è presente nel tuo riepilogo ordini.</p>
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
