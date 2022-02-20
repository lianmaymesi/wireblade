<div class="">
    <div class="flex items-center justify-between">
        <label class="inline-flex items-center" for="{{ str_slug($label) }}">
            <span class="text-sm font-medium flex items-center ltr:ml-1 rtl:mr-1">
                {{ $label }}
                @if($mandatory)
                <b class="text-xl leading-none font-medium text-red-700 ltr:ml-1 rtl:mr-1">*</b>
                @endif
            </span>
        </label>
        <div class="flex group">
            @if ($toolTip)
            <x-wireblade-tooltip :position="$toolTipPosition">
                {{ $toolTip }}
            </x-wireblade-tooltip>
            @endif
            <div class="invisible group-hover:visible absolute top-0 ltr:right-0 ltr:left-0 z-10 space-y-1 bg-slate-900 dark:bg-slate-800 text-slate-300 text-sm rounded px-4 py-2 w-full max-w-xs shadow-md border dark:border-slate-700 cursor-pointer"
                role="tooltip" aria-hidden="true">
                Hello World
            </div>
        </div>
    </div>
    <textarea id="{{ str_slug($label) }}" {{ $attributes->except(['class']) }}
        @class([ 'block mt-1 p-2 transition duration-75 shadow-sm focus:ring-1 focus:ring-inset font-semibold bg-gray-50
        text-sm dark:bg-slate-800 dark:border-slate-700 w-full ltr:rounded-md rtl:rounded-md',
        'focus:border-blue-400 focus:ring-blue-400 border-gray-300 focus:bg-white' => !$error,
        'focus:ring-red-400 focus:border-red-400 border-red-400 focus:bg-red-200 bg-red-200
        placeholder:text-red-900' => $error
        ])
    >
        {{ $content }}
    </textarea>
    @if($error)
    <span @class([ 'text-xs text-red-400 mt-1 font-bold' ])>
        {{ $error }}
    </span>
    @endif
</div>
