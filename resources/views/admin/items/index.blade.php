@extends('admin.layouts.app')

@section('content')

<div class="container-fluid mt-5">


    <div class="d-flex justify-content-start">
        {{-- Contenuto centrale della pagina --}}
      <section class="col-md-10 ml-sm-auto col-lg-10 px-md-4">

          <div class="d-flex justify-content-start flex-wrap align-items-center pt-3 pb-2 mb-3">

              <div class="card w-100">
                  <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="font-weight-bold"> I tuoi Prodotti </span>
                    <a href="{{ route('admin.items.create') }}" class="btn btn_custom_secondary"><i class="fas fa-plus"></i></a>
                </div>

                  <div class="card-body">
                    {{-- Pop-up delle modifiche e della cancellazione agli item nella CRUD --}}
                    @if(session('prodotto_modificato'))
                        <div class="alert alert-success" role="alert">
                            {{ session('prodotto_modificato') }}
                        </div>

                    @elseif (session('prodotto_cancellato'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('prodotto_cancellato') }}
                        </div>

                    @endif
                    {{-- ---------End----------- --}}
                    <table class="table my-1">
                      <thead>
                          <tr class="text-center">
                          {{-- <th scope="col">ID</th> --}}
                          <th scope="col">Nome</th>
                          <th class="d-none d-md-block" scope="col">Vegetariano</th>
                          <th scope="col">Visibile</th>
                          <th class="d-none d-md-block" scope="col">Portata</th>
                          <th scope="col">Modifiche</th>
                        </tr>
                    </thead>
                      <tbody>

                        @foreach ($items as $item )
                        @include('admin.items.modal.delete')

                        @php

                        if ($item->vegetarian === 1) {
                           $colorVeg = "green";
                        }else{
                          $colorVeg = "red";
                        };

                        if ($item->visible === 1) {
                           $coloreVis = "green";
                        }else{
                          $coloreVis = "red";
                        }

                        @endphp

                        <tr class="text-center">

                          {{-- <td>{{ $item->id }}</td> --}}
                          <td>{{ $item->name }}</td>
                          <td class="d-none d-md-block" style="color:{{$colorVeg}}">{{ $item->vegetarian === 1? 'Sì' : 'No' }}</td>
                          <td style="color:{{$coloreVis}}">{{ $item->visible === 1? 'Sì' : 'No' }}</td>
                          <td class="d-none d-md-block" >{{$item->course->name}}</td>

                          <td>
                            <a class="btn btn_custom_info" href=" {{ route('admin.items.show', $item)  }}"><i class="fas fa-info-circle"></i></a>
                            <a class="btn btn_custom_edit" href="{{ route('admin.items.edit', $item)  }}"><i class="fas fa-edit"></i></a>
                            <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#ModalDelete{{$item->id}}"><i class="fas fa-trash"></i></a>
                          </td>

                        </tr>

                        @endforeach

                      </tbody>
                    </table>

                    <div class="d-flex justify-content-center">
                      {{ $items->links() }}
                    </div>

                  </div>
              </div>
          </div>


      </section>

  </div>



</div>

@endsection
