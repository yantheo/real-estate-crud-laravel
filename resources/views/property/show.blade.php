@extends('base')

@section('title', $property->title)

@section('content')
<div class="container mt-4">
    <h1>{{ $property->title }}</h1>
    <h2>{{ $property->rooms }} rooms - {{ $property->surface }}m2</h2>
    <div class="text-primary fw-bold">
        {{ number_format($property->price, thousands_separator: ' ') }}€
    </div>
    <hr>
    <div class="mt-4">
        <h4>Interested by this add?</h4>
        @include('shared.flash')
        <form action="{{ route('property.contact', $property) }}" method="post" class="vstack gap-3">
            @csrf
            <div class="row">
                @include('shared.input', ['class' => 'col', 'name' => 'firstname'])
                @include('shared.input', ['class' => 'col', 'name' => 'lastname'])
            </div>
            <div class="row">
                @include('shared.input', ['class' => 'col', 'name' => 'phone'])
                @include('shared.input', ['type' => 'email', 'class' => 'col', 'name' => 'email'])
            </div>
            @include('shared.input', ['type' => 'textarea', 'class' => 'col', 'name' => 'message', 'label' => 'Votre message'])
            <div>
                <button class="btn btn-primary">
                    Contact Us
                </button>
            </div>
        </form>
    </div>
    <p class="mt-4">
        {!! nl2br(e($property->description)) !!}
        <div class="row">
            <div class="col-8">
                <h2>Features</h2>
                <table class="table table-striped">
                    <tr>
                        <td>Surface</td>
                        <td>{{ $property->surface }}m2</td>
                    </tr>
                    <tr>
                        <td>Rooms</td>
                        <td>{{ $property->rooms }}</td>
                    </tr>
                    <tr>
                        <td>Bedrooms</td>
                        <td>{{ $property->bedrooms }}</td>
                    </tr>
                    <tr>
                        <td>Floor</td>
                        <td>{{ $property->floor ?: 'Basement' }}</td>
                    </tr>
                    <tr>
                        <td>Localisation</td>
                        <td>
                            {{ $property->address}},<br>
                            {{ $property->city}} ({{ $property->postal_code}})
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-4">
                <h2>Spéficités</h2>
                <ul class="list-group">
                    @forelse ($property->options as $option )
                        <li class="list-group-item">{{ $option->name }}</li>
                    @empty
                        
                    @endforelse
                </ul>
            </div>
        </div>
    </p>
</div>


@endsection