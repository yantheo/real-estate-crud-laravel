<div class="card">
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{ route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">{{ $property->title }}</a>
        </h5>
        <p class="card-text">{{ $property->surface }}m2 - {{ $property->city }} {{ $property->postal_code }}</p>
        <div class="text-primary bold">
            {{ number_format($property->price, thousands_separator: ' ') }}€
        </div>
    </div>
</div>