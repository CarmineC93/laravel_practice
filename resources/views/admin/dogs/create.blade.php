@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2 class="text-center mt-3">Aggiungo un nuovo cane</h2>
        <div class="row justify-content-center">
            <div class="col-8">

                {{-- mostro in pagina gli errori
                @include('partials.errors') --}}

                <form action="{{ route('admin.dogs.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name">Nome</label>
                        <input type="text" id="name" name="name"
                            class="form-control @error('name')
                        is-invalid
                        @enderror"
                            value="{{ old('name') }}">
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="name">Colore</label>
                        <input type="text" id="color" name="color"
                            class="form-control @error('color')
                        is-invalid
                        @enderror"
                            value="{{ old('color') }}">
                        @error('color')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>


                    {{-- <div class="form-group mb-3">
                        <label for="cover_image">Immagine</label>
                        <input type="file" name="cover_image" id="cover_image"
                            class="form-control
                            @error('cover_image')
                            is-invalid
                            @enderror">
                        @error('cover_image')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>

                    {{-- anteprima immagine che si aggiorna tramit attributo id colllegato ad app.js --}}
                    <div class="mt-3">
                        <img id="image_preview" src="" alt="" style="max-height: 200px">
                    </div>

                    <div class="form-group mb-3">
                        <label for="content">Descrizione</label>
                        <textarea name="content" id="content" rows="10"
                            class="form-control @error('content')
                        is-invalid
                        @enderror">{{ old('content') }}</textarea>
                        @error('content')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div> --}}

                    <button class="btn btn-success" type="submit">Salva</button>
                </form>
            </div>
        </div>
    </div>
@endsection
