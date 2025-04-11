@extends('base')

@section('content')

<div class="bg-light p-5 mb-5 text-center">
    <div class="container">
        <h1>Agency Lorem Ipsum</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem nemo consequatur repudiandae sint! Quidem magnam, aut id facere velit cumque, sed vel, rem culpa temporibus nesciunt excepturi? Natus, unde facilis.</p>
    </div>
</div>
<div class="container">
    <h2>Last opportunities</h2>
    <div class="row">
        @foreach($properties as $property)
        <div class="col">
            @include('components.card')
        </div>
        @endforeach
    </div>
</div>

@endsection