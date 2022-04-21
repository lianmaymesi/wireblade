<td {{ $attributes->except('class') }} @class([ 'px-4 py-4 whitespace-nowrap' , 'hidden lg:table-cell'=> $mobileOnly,
    'w-full' => $fullWidth])>
    <div class="">
        {{ $slot }}
    </div>
</td>
