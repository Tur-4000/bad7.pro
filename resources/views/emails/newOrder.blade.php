@component('mail::message')
# Заявка № {{ $order }}

От: {{ $name }}

Представляет компанию: {{ $company }}

{{ $description }}

Контактная информация:
{{ $contact }}

С уважением,<br>
команда {{ config('app.name') }}
@endcomponent
