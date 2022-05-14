<td {{ $attributes->except('class') }} {{ $attributes->class(['px-4 py-4 whitespace-nowrap text-sm', 'hidden
    lg:table-cell' => $mobileOnly, 'w-full' =>
    $fullWidth]) }}>
    <div class="">
        {{ $slot }}
    </div>
</td>
