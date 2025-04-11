<x-mail::message>
# New Contact Request​

A new contact request has been made for the property <a href="{{route('property.show', ['slug' => $property->getSlug(), 'property' => $property]) }}">{{ $property->title }}</a>

- Name : {{ $data['firstname'] }}
- Lastname : {{ $data['lastname'] }}
- Tel : {{ $data['phone'] }}
- Mail : {{ $data['email'] }}

** Message : **<br>
{{ $data['message'] }}

</x-mail::message>
