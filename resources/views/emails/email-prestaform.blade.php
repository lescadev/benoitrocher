@component('mail::message')

<strong>Name</strong> {{ $data['name'] }}
<strong>Email</strong> {{ $data['email'] }}

<strong>Objet</strong> {{ $data['objet'] }} 

<strong>Date</strong> {{ $data['date'] }}
<strong>Telephone</strong> {{ $data['telephone'] }}

<strong>Message</strong> 

{{ $data['message'] }}

@endcomponent
