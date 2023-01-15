12 lines (11 sloc) 363 Bytes

@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1 class="text-center mt-3">{{ $dog->name }}</h1>
        <div class="d-flex justify-content-between mt-3">
            <p>{{ $dog->slug }}</p>
        </div>
        <p class="mt-3">{{ $dog->color }}</p>

        {{-- <div class="text-center">
            @if ($dog->cover_image)
                <img src="{{ asset('storage/' . $dog->cover_image) }}" alt="dog cover" style="max-width:300px">
            @else
                <div class="w-50 bg-secondary py-4 text-center">
                    Nessun immagine
                </div>
            @endif
        </div> --}}
    </div>
@endsection
