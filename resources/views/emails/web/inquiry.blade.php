@component('mail::message')
# New website inquiry

Hi there.

You have a new inquiry from the BFF website. Please see the details below.

- Name: {{$inquiry->name}}
- Email: {{$inquiry->email}}
- Phone: {{$inquiry->phone}}
- Subject: {{$inquiry->subject}}
- Message: {{$inquiry->message}}

Remember you can always see all the website inquiries by login to the BFF dashboard.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
