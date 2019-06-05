@component('mail::message')

<strong>Name</strong> {{ $data['name'] }}
<strong>Email</strong> {{ $data['email'] }}

<strong>Objet</strong> {{ $data['objet'] }}

<strong>Message</strong> 

{{ $data['message'] }}

@endcomponent
