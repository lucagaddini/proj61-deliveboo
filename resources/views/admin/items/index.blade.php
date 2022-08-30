@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

  <div class="d-flex justify-content-start">

      {{-- Contenuto centrale della pagina --}}
      <main role="main" class="col-md-10 ml-sm-auto col-lg-10 px-md-4">

          <div class="d-flex justify-content-start flex-wrap align-items-center pt-3 pb-2 mb-3">

              <div class="card w-100">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <span class="font-weight-bold"> I tuoi Prodotti </span>
                    <a href="{{ route('admin.items.create') }}" class="btn btn_custom_secondary"><i class="fas fa-plus"></i></a>
                </div>

                  <div class="card-body">

                    <table class="table my-1">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nome</th>
                          {{-- <th scope="col">Categoria</th> --}}
                          <th scope="col">Vegetariano</th>
                          <th scope="col">Visibile</th>
                          <th scope="col">Portata</th>
                          <th scope="col">Modifiche</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($items as $item )

                        <tr>
                          <td>{{ $item->id }}</td>
                          <td>{{ $item->name }}</td>



                          <td>{{ $item->vegetarian === 1? 'Sì' : 'No' }}</td>
                          <td>{{ $item->visible === 1? 'Sì' : 'No' }}</td>

                          <td> {{$item->course->name}}</td>

                          <td>
                            <a class="btn btn_custom_info" href=" {{ route('admin.items.show', $item)  }}"><i class="fas fa-info-circle"></i></a>
                            <a class="btn btn_custom_edit" href="{{ route('admin.items.edit', $item)  }}"><i class="fas fa-edit"></i></a>

                            <form class= "d-inline"
                                  onsubmit= "return confirm('Vuoi eliminare definitivamente il piatto ## {{ $item->name }} ## ?')"
                                  action= "{{ route('admin.items.destroy', $item) }}" method= "POST">
                              @csrf
                              @method ('DELETE')
                              <button class="btn btn btn_custom_delete">
                                <i class="far fa-trash-alt"></i>
                              </button>
                            </form>

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


      </main>

  </div>



</div>

@endsection
