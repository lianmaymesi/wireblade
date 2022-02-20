<div class="my-0 mx-3">
    <a href="{{ $route }}"
        class="flex items-center justify-start px-2.5 py-3 text-[13px] font-medium leading-4 text-slate-300 hover:bg-slate-700 hover:text-slate-200 rounded-md">
        <div class="ltr:mr-3 rtl:ml-3">
            <x-wb::icons.chart-pie class="w-5 h-5 text-slate-300" stroke-width="1.5" />
        </div>
        <div @class([ 'text-slate-300 text-sm' , 'ltr:pl-8 rtl:pr-8'=> $dropdown
            ])>
            <span>{{ $title }}</span>
        </div>
        @if (!$dropdown)
        <div class="ltr:ml-auto rtl:mr-auto">
            <x-wb::icons.chevron-right class="w-4 h-4 text-slate-300" />
        </div>
        @endif
    </a>
</div>
