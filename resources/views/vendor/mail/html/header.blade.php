@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="https://api.imoblist.com/bg-api.png" class="logo" alt="Imoblist Logo">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
