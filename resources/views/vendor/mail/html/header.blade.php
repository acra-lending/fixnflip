<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'FixNFlip')
<img src="{{ asset('img/acra-logo-horizontal.png') }}" alt="Acra Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
