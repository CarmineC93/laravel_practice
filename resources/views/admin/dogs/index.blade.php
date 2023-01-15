@extends('layouts.admin')

@section('content')
    <div class="container mt-4">
        <h3 class="text-center">La lista dei miei cani</h3>
        <div class="text-end">
            <a class="btn btn-success" href="{{ route('admin.dogs.create') }}">
                Nuovo Cane
            </a>
        </div>
        <div class="row justify-content-center">
            <div class="col-8">

                {{-- messaggio per comunicare avvenuta creazione tramite funzione with() --}}
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Colore</th>
                            <th scope="col">Azioni</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dogs as $dog)
                            <tr>
                                <th scope="row">{{ $dog->name }}</th>
                                <th scope="row">{{ $dog->color }}</th>


                                {{-- <td>
                                    @if ($project->cover_image)
                                        <img id="image_preview" src="{{ asset('storage/' . $project->cover_image) }}"
                                            alt="project cover" style="max-width:100px">
                                    @else
                                    @endif
                                </td> --}}

                                <td>
                                    <a class="btn btn-success" href="{{ route('admin.dogs.show', $dog->slug) }}">
                                        <i class="fa-solid fa-eye"></i>
                                    </a>

                                    <a class="btn btn-warning" href="{{ route('admin.dogs.edit', $dog->slug) }}">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                    </a>

                                    <form action="{{ route('admin.dogs.destroy', $dog->slug) }}" method="POST"
                                        class="d-inline-block">
                                        @csrf
                                        @method('DELETE')

                                        {{-- <button class="btn btn-danger delete-btn" type="submit"
                                            data-project-title="{{ $project->title }}">
                                            <i class="fa-solid fa-trash"></i>
                                        </button> --}}
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        {{-- @include('partials.delete-modal') --}}
    </div>
@endsection
