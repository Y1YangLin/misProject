<x-mail::message>
# {{ $mailData['subject'] }}

{{ $mailData['name'] }} {{$mailData['content']}}

<x-mail::button :url="'/index'">
前往YOFU
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
