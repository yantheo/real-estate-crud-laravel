@extends('base')

@section('title', 'Tous nos biens')

@section('content')
<div class="container">
    <h2>Properties</h2>
    <div class="bg-light p-5 mb-5 text-center">
        <form action="" method="get" class="container d-flex gap-2">
            <input type="number" placeholder="Budget Max" class="form-control" name="price" value="{{ $input['price'] ?? ''}}">
            <input type="number" placeholder="Surface Min" class="form-control" name="surface" value="{{ $input['surface'] ?? ''}}">
            <input type="number" placeholder="Number of rooms" class="form-control" name="rooms" value="{{ $input['rooms'] ?? ''}}">
            <input type="text" placeholder="Titre" class="form-control" name="title" value="{{ $input['title'] ?? ''}}">
            <button class="btn btn-primary btn-sm flex-grow-0">
                Search
            </button>
        </form>
    </div>
    <div class="row">
        @forelse($properties as $property)
        <div class="col-3 mb-4">
            @include('components.card')
        </div>
        @empty
        <div class="col-3 mb-4">
            No properties match your search.
        </div>
        @endforelse
    </div>
    <div class="my-4">
        {{ $properties->links() }}
    </div>
</div>



@endsection