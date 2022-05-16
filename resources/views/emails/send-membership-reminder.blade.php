@component('mail::message')
Dear {{$name}}

This is a kind reminder that your monthly membership payment is due.

You can submit your payment using one of the methods below.

- Venmo: browardfiercefighters@gmail.com
- Zelle: browardfiercefighters@gmail.com

We appreciate you being part of our team!

Thank you for being awesome,<br>
{{ config('app.name') }}
@endcomponent
