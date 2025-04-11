@extends('admin.admin')

@section('title', $option->exist ? "Editer une option" : "Créer une option")

@section('content')
<h1>@yield('title')</h1>
<form class="vstack gap-2" action="{{ route($option->exists ? 'admin.option.update' : 'admin.option.store',['option' => $option]) }}" method="post">
    @csrf
    @method($option->exists ? 'put' : 'post')

    <div class="row">
        @include('shared.input', ['name' => 'name', 'label' => 'Name', 'value' => $option->name])
    </div>


    <div>
        <button class="btn btn-primary">
            @if($option->exists)
            Modifier
            @else
            Ajouter
            @endif
        </button>
    </div>
</form>

@endsection