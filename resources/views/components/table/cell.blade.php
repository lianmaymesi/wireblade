<td {{ $attributes->except('class') }} {{ $attributes->class(['px-4 py-3 whitespace-nowrap', 'hidden
    lg:table-cell' => $mobileOnly, 'w-full' =>
    $fullWidth]) }}>
    {{ $slot }}
</td>
