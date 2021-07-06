@component('mail::message')

# Fix N Flip Contact Us Inquiry
<hr/>

<strong>Name:</strong> {{ $mail['name'] }}<br/>
<strong>Email:</strong> {{ $mail['email'] }}<br/>

<strong>Message:</strong> {{ $mail['message'] }}<br/>

<hr/>

<br/>
~<em>{{ 'Acra Webmaster' }}</em>
@endcomponent
