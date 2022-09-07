@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

  <div class="d-flex justify-content-start">

      {{-- Contenuto centrale della pagina --}}
      <section class="col-md-10 ml-sm-auto col-lg-10 px-md-4">

          <div class="d-flex justify-content-start flex-wrap align-items-center pt-3 pb-2 mb-3">

              <div class="card w-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="font-weight-bold"> I tuoi Ordini </span>
                </div>

                  <div class="card-body">

                    <table class="table my-1">
                      <thead>
                        <tr class="text-center">
                          <th scope="col">ID Ordine</th>
                          <th scope="col">Nome Cliente</th>
                          <th scope="col">Totale Ordine</th>
                          <th scope="col">Dettagli</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($orders as $order )

                        {{-- @dd($order) --}}

                        <tr class="text-center">
                          <td>{{ $order->id }}</td>
                          <td>{{ $order->name}} {{ $order->surname }}</td>
                          <td>{{ $order->total}} &euro; </td>
                          <td>
                            <a class="btn btn_custom_info" href=" {{ route('admin.orders.show', $order->id)  }}"><i class="fas fa-info-circle"></i></a>
                          </td>
                        </tr>

                        @endforeach

                      </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                      {{-- {{ $orders->links() }} --}}
                    </div>
              
                  </div>
              </div>
          </div>
      </main>

  </div>



</div>

@endsection
