@extends('base')

@section('title', 'Login')

@section('content')
<div class="mt-4 container">
    <h1>@yield('title')</h1>
    @include('shared.flash')
    <form action="{{ route('login') }}" method="post" class="vstack gap-2">
        @csrf
        @include('shared.input', ['type' => 'email', 'class' => 'col', 'name' => 'email'])
        @include('shared.input', ['type' => 'password', 'class' => 'col', 'name' => 'password'])
        <div>
            <button class="btn btn-primary">
                Connect
            </button>
        </div>
    </form>
</div>
@endsection