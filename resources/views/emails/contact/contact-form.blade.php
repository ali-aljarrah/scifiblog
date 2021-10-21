@component('mail::message')
A new message !

<strong>Name</strong> {{ $mail['fname'] }}

<strong>Name</strong> {{ $mail['lname'] }}

<strong>Email</strong> {{ $mail['email'] }}

<strong>Message</strong>

{{ $mail['message'] }}
@endcomponent
