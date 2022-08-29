@extends('admin.layouts.app')

@section('content')

<div class="container-fluid">
    <div class="d-flex justify-content-start">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-start flex-wrap align-items-center pt-3 pb-2 mb-3">

                <form action="{{ route('admin.items.store') }}" method="POST">
                    @csrf

            {{-- Title --}}
                    <div class="form-group">
                        <label for="name">Nome del piatto</label>
                        <input type="text" value="{{old('name')}}"
                            class="form-control @error('name') is-invalid @enderror"
                            id="name" name="name"
                            placeholder="Scrivi qualcosa"
                        >
                        @error('name')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

            {{-- Content --}}
                    <div class="form-group">
                        <label for="description">Descrizione del piatto</label>
                        <textarea type="text" rows="6"
                                class="form-control @error('description') is-invalid @enderror"
                                id="description" name="description"
                                placeholder="Scrivi qualcosa">
                            {{old('description')}}
                        </textarea>
                        @error('description')
                            <p class="text-danger">{{ $message }}</p>
                        @enderror
                    </div>

            {{-- Select per Category --}}
                    {{-- <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="category_id">Categoria di giochi</label>
                        </div>
                        <select class="custom-select"
                                id="category_id" name="category_id">
                            <option value="">Scegli di che tipo di gioco vuoi parlare</option>
                            @foreach ($categories as $category)
                                <option
                                    value="{{ $category->id }}"
                                    @if ($post->category && $category->id == old('category_id', $post->category->id)) selected @endif>
                                        {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div> --}}

            {{-- Checks per Tags --}}
                    {{-- <h5 class="mb-1 mt-4">Scegli dei tags per il tuo post!</h5>
                    <div class="form-check mb-4">
                        @foreach ($tags as $tag)
                            <input class="form-check-input"
                                type="checkbox"
                                value="{{ $tag->id }}"
                                id="tag{{ $loop->iteration }}"
                                name="tags[]"
                                @if (!$errors->any() && $post->tags->contains($tag->id))
                                    checked
                                @elseif (!$errors->any() && in_array($tag->id, old('tags', [])))
                                    checked
                                @endif>

                            <label class="form-check-label mr-5"
                                for="tag{{ $loop->iteration }}"
                                name="tags[]">
                                {{ $tag->name }}
                            </label>
                        @endforeach
                    </div> --}}

            {{-- Submit --}}
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </main>
    </div>
</div>


@endsection
