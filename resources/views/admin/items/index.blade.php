@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

  <div class="d-flex justify-content-start">

      {{-- Contenuto centrale della pagina --}}
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">

          <div class="d-flex justify-content-start flex-wrap align-items-center pt-3 pb-2 mb-3">

              <div class="card w-100">
                <div class="card-header d-flex justify-content-between align-items-center">{{ __('I tuoi Piatti') }}
                    <a href="{{ route('admin.items.create') }}" class="btn btn-dark">Aggiungi un nuovo piatto</a>
                </div>

                  <div class="card-body">

                    <table class="table my-5">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nome</th>
                          {{-- <th scope="col">Categoria</th> --}}
                          <th scope="col">Descrizione</th>
                          <th scope="col">Modifiche</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($items as $item )

                        <tr>
                          <td>{{ $item->id }}</td>
                          <td>{{ $item->name }}</td>
                          {{-- Per le portate mi serve "Se appartiene a questo id, allora mettila qui" --}}
                          {{-- <td> {{ $item->courses ? $item->courses->name : "Nessuna portata assegnata" }} </td> --}}

                          <td>{{ ucfirst($item->description) }}</td>

                          <td>
                            <a class="btn btn-dark" href=" {{ route('admin.items.show', $item)  }}">Mostra di pi&ugrave;</a>
                            <a class="btn btn-dark" href="{{ route('admin.items.edit', $item)  }}">Modifica</a>

                            <form class= "d-inline"
                                  onsubmit= "return confirm('Vuoi eliminare definitivamente il piatto ## {{ $item->name }} ## ?')"
                                  action= "{{ route('admin.items.destroy', $item) }}" method= "POST">
                              @csrf
                              @method ('DELETE')
                              <button class="btn btn-danger">Elimina</button>
                            </form>

                          </td>
                        </tr>

                        @endforeach

                      </tbody>
                    </table>

                  </div>
              </div>
          </div>


      </main>

  </div>



</div>

@endsection
