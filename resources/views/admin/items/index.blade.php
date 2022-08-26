@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">

  <div class="d-flex justify-content-start">

      {{-- Contenuto centrale della pagina --}}
      <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
          
          <div class="d-flex justify-content-start flex-wrap align-items-center pt-3 pb-2 mb-3">

              <div class="card w-100">
                  <div class="card-header">{{ __('I tuoi Piatti') }}</div>
  
                  <div class="card-body">
                    
                    <table class="table my-5">
                      <thead>
                        <tr>
                          <th scope="col">ID</th>
                          <th scope="col">Nome</th>
                          <th scope="col">Categoria</th>
                          <th scope="col">Descrizione</th>
                          <th scope="col">Modifiche</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach ($items as $item )
                  
                        <tr>
                          <td>{{ $item->id }}</td>
                          <td>{{ $item->name }}</td>
                          <td> CATEGORIA </td>
                  
                          <td>{{ $item->description }}</td>
                  
                          <td>
                            {{-- <a class="btn btn-primary" href=" {{ route('admin.item.show', $post)  }}">MOSTRA</a>
                            <a class="btn btn-secondary" href="{{ route('admin.item.edit', $post)  }}">MODIFICA</a>
                   --}}
                            {{-- <form class= "d-inline"
                                  onsubmit= "return confirm('Vuoi eliminare definitivamente il post ## {{ $post->title }} ## ?')"
                                  action= "{{ route('admin.posts.destroy', $post) }}" method= "POST">
                              @csrf
                              @method ('DELETE')
                              <button class="btn btn-danger">ELIMINA</button>
                            </form> --}}
                  
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
