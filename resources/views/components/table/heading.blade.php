<th scope="col" {{ $attributes->except('class') }} {{ $attributes->class(['px-6 py-3 text-left
    font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider', 'hidden lg:table-cell'=> $mobileOnly,
    'w-full' => $fullWidth ]) }}>
    {{ $slot }}
</th>
