<th scope="col" {{ $attributes->except('class') }} {{ $attributes->class(['px-4 py-3 text-left
    font-medium uppercase tracking-wider', 'hidden lg:table-cell'=> $mobileOnly,
    'w-full' => $fullWidth ]) }}>
    @unless ($sortable)
    {{ $slot }}
    @else
    <button class="flex items-center space-x-0.5 text-left group">
        <span class="uppercase">{{ $slot }}</span>
        <span class="opacity-0 group-hover:opacity-100 duration-150">
            @if ($direction === 'asc')
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-gray-400">
                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
            @else
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-4 h-4 text-gray-400">
                <path fill-rule="evenodd" d="M14.77 12.79a.75.75 0 01-1.06-.02L10 8.832 6.29 12.77a.75.75 0 11-1.08-1.04l4.25-4.5a.75.75 0 011.08 0l4.25 4.5a.75.75 0 01-.02 1.06z" clip-rule="evenodd" />
            </svg>
            @endif
        </span>
    </button>
    @endunless
</th>
