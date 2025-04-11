@php

$class ??= null;
$name ??= '';
$value ??= '';
$label ??= ucfirst($name);

@endphp

<div @class(['form-group', $class]) >
    <label for="{{ $name }}">{{$label}}</label>
    <select name="{{ $name }}[]" id="{{ $name }}" multiple>
        @foreach($options as $option_id => $options_name)
        <option @selected($value->contains($option_id)) value="{{ $option_id }}">{{ $options_name}}</option>
        @endforeach
    </select>
    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>