<div class="flex flex-col basis-auto grow shrink-0 select-none">
    {{ $slot }}
    @if($dropdownMenus)
    <div class="overflow-hidden mt-1">
        {{ $dropdownMenus }}
    </div>
    @endif
</div>
