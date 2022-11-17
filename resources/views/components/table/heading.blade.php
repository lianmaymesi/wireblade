<th scope="col" {{ $attributes->except('class') }} {{ $attributes->class(['px-4 py-3 text-left
    font-medium uppercase tracking-wider', 'hidden lg:table-cell'=> $mobileOnly,
    'w-full' => $fullWidth ]) }}>
    {{ $slot }}
</th>
