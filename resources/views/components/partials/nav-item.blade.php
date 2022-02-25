<div class="flex flex-col basis-auto grow shrink-0 select-none">
    {{ $slot }}
    <div class="my-0 mx-3">
        @if (!$dropdown)
        <a href="{{ $route }}"
            class="flex items-center justify-start px-2.5 py-3 text-[13px] font-medium leading-4 text-slate-300 hover:bg-slate-700 hover:text-slate-200 rounded-md">
            <div class="ltr:mr-3 rtl:ml-3">
                <x-wb::icons.chart-pie class="w-5 h-5 text-slate-300" stroke-width="1.5" />
            </div>
            <div class="text-slate-300 text-sm">
                <span>{{ $title }}</span>
            </div>
        </a>
        @else
        <a @click.prevent="toggle('{{ str_slug($title) }}')"
            class="flex items-center justify-start cursor-pointer px-2.5 py-3 text-[13px] font-medium leading-4 text-slate-300 hover:bg-slate-700 hover:text-slate-200 rounded-md">
            <div class="ltr:mr-3 rtl:ml-3">
                <x-wb::icons.chart-pie class="w-5 h-5 text-slate-300" stroke-width="1.5" />
            </div>
            <div class="text-slate-300 text-sm">
                <span>{{ $title }}</span>
            </div>

            <div class="ltr:ml-auto rtl:mr-auto">
                <div x-show="tab != '{{ str_slug($title) }}'">
                    <x-wb::icons.chevron-right class="w-4 h-4 text-slate-300" />
                </div>
                <div x-show="tab === '{{ str_slug($title) }}'">
                    <x-wb::icons.chevron-down class="w-4 h-4 text-slate-300" />
                </div>
            </div>
        </a>
        @endif
    </div>
    @if($submenu)
    <div x-show="tab === '{{ str_slug($title) }}'" x-transition:enter="transition ease-in-out duration-300"
        x-transition:enter-start="transform scale-y-0 -translate-y-1/2"
        x-transition:enter-end="h-full transform scale-y-100 translate-y-0"
        x-transition:leave="transition ease-in-out duration-300"
        x-transition:leave-start="h-full transform scale-y-100 translate-y-0"
        x-transition:leave-end="transform scale-y-0 -translate-y-1/2" class="overflow-hidden mt-1"
        style="display: none;">
        {{ $submenu }}
    </div>
    @endif
</div>
