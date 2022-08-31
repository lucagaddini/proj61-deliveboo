@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

  <div class="d-flex justify-content-start">

      {{-- Contenuto centrale della pagina --}}
      <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-md-4">

          <div class="d-flex justify-content-start flex-wrap align-items-center pt-3 pb-2 mb-3">

              <div class="card w-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="font-weight-bold"> I tuoi Ordini </span>
                    {{-- <a href="{{ route('admin.orders.create') }}" class="btn btn_custom_secondary"><i class="fas fa-plus"></i></a> --}}
                </div>

                  <div class="card-body">

                    <table class="table my-1">
                      <thead>
                        <tr class="text-center">
                          <th scope="col">ID</th>
                          <th scope="col">Nome</th>
                          <th scope="col">Modifiche</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($orders as $order )

                        <tr class="text-center">
                          <td>{{ $order->id }}</td>
                          <td>{{ $order->name }}</td>
                          <td> Pulsanti

                          {{-- <td>
                            <a class="btn btn_custom_info" href=" {{ route('admin.orders.show', $order)  }}"><i class="fas fa-info-circle"></i></a>
                            <a class="btn btn_custom_edit" href="{{ route('admin.orders.edit', $order)  }}"><i class="fas fa-edit"></i></a>

                            <form class= "d-inline"
                                  onsubmit= "return confirm('Vuoi eliminare definitivamente il piatto ## {{ $order->name }} ## ?')"
                                  action= "{{ route('admin.orders.destroy', $order) }}" method= "POST">
                              @csrf
                              @method ('DELETE')
                              <button class="btn btn_custom_delete">
                                <i class="far fa-trash-alt"></i>
                              </button>
                            </form>

                          </td> --}}
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
