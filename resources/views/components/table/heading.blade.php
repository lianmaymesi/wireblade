<th scope="col"
    @class([ 'px-4 py-4 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider'
    , 'hidden lg:table-cell'=> $mobileOnly,
    'w-full' => $fullWidth
    ])>
    {{ $slot }}
</th>
