@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-start">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-start flex-wrap align-items-center pt-3 pb-2 mb-3">

{{-- Singola scheda --}}
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="..." alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ ucfirst($item->description) }}</p>
                        <a href="{{ route('admin.items.index') }}" class="btn btn-primary">Torna al Men&ugrave;</a>
                    </div>
                </div>
{{-- /Singola scheda --}}

            </div>
        </main>
    </div>
</div>


@endsection
