@extends('admin.admin')

@section('title', $property->exist ? "Editer un bien" : "Créer un lien")

@section('content')
<h1>@yield('title')</h1>
<form class="vstack gap-2" action="{{ route($property->exists ? 'admin.property.update' : 'admin.property.store',['property' => $property]) }}" method="post">
    @csrf
    @method($property->exists ? 'put' : 'post')

    <div class="row">
        @include('shared.input', [ 'class' => 'col', 'name' => 'title', 'value' => $property->title])
        <div class="col row">
            @include('shared.input', ['class' => 'col', 'name' => 'surface', 'value' => $property->surface])
            @include('shared.input', ['class' => 'col', 'name' => 'price', 'value' => $property->price])
        </div>
    </div>
    @include('shared.input', ['name' => 'description', 'value' => $property->description , 'type' => 'textarea'])
    <div class="row">
        @include('shared.input', ['class' => 'col', 'name' => 'rooms', 'value' => $property->rooms])
        @include('shared.input', ['class' => 'col', 'name' => 'bedrooms', 'value' => $property->bedrooms])
        @include('shared.input', ['class' => 'col', 'name' => 'floor', 'value' => $property->floor])
    </div>
    <div class="row">
        @include('shared.input', ['class' => 'col','label' => 'Postal code', 'name' => 'postal_code', 'value' => $property->postal_code])
        @include('shared.input', ['class' => 'col', 'name' => 'address', 'value' => $property->address])
        @include('shared.input', ['class' => 'col', 'name' => 'city', 'value' => $property->city])
    </div>
    <div class="row">
        @include('shared.select', ['name' => 'options', 'value' => $property->options()->pluck('id'), 'multiple' => true])
        @include('shared.checkbox', ['name' => 'sold', 'label' => 'Vendu', 'value' => $property->sold])
    </div>


    <div>
        <button class="btn btn-primary">
            @if($property->exists)
            Modifier
            @else
            Ajouter
            @endif
        </button>
    </div>
</form>

@endsection