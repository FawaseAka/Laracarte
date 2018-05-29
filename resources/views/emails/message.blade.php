@component('mail::message')
# Salut Admin !!!

- {{ $msg->name }}
- {{ $msg->email }}

@component('mail::panel')
{{ $msg->message }}
@endcomponent

@component('mail::button', ['url' => ''])
Répondre
@endcomponent

Merci,<br>
{{ config('app.name') }}
@endcomponent
