@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">

    <div class="d-flex justify-content-start">

        {{-- Contenuto centrale della pagina --}}
        <section class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

            <div class="d-flex justify-content-start flex-wrap align-items-center pt-3 pb-2 mb-3">

                <div class="card w-100">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <p> Benvenuto {{ Auth::user()->name }} </p>
                    </div>
                </div>
            </div>

        </section>

    </div>

</div>
@endsection
