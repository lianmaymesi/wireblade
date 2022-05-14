<a href="{{ $link }}" {{ $attributes->class([
    'text-sm font-medium hover:underline',
    'text-blue-600 dark:text-blue-500' => $color === 'blue',
    'text-red-600 dark:text-red-500' => $color === 'red',
    'text-yellow-600 dark:text-yellow-500' => $color === 'yellow',
    'text-purple-600 dark:text-purple-500' => $color === 'purple',
    'text-green-600 dark:text-green-500' => $color === 'green',
    ])}}>
    {{ $slot }}
</a>
