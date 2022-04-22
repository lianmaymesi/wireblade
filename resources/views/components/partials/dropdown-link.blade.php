<div class="my-0 mx-3">
    <a href="{{ $route }}" @class(['flex items-center justify-start px-2.5 py-3 text-[13px] font-medium leading-4
        text-slate-300 hover:bg-slate-700 hover:text-slate-200 rounded-md', 'bg-green-600'=> $active])>
        <div class="text-slate-300 text-sm ltr:pl-8 rtl:pr-8">
            <span>{{ $title }}</span>
        </div>
    </a>
</div>
