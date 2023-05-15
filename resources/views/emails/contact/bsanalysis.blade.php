@component('mail::message')

# Fix N Flip Bank Statement Analysis
<hr/>

<strong>Name:</strong> {{ $mail['name'] }}<br/>
<strong>Company:</strong> {{ $mail['company'] }}<br/>
<strong>Email:</strong> {{ $mail['email'] }}<br/>
<storng>Phone:</strong> {{ $mail['phone'] }}<br/>


<hr/>

<br/>
~<em>{{ 'Acra Webmaster' }}</em>
@endcomponent