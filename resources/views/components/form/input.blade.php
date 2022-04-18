<div>
    <div @class([ 'relative w-full' , 'flex flex-wrap items-stretch'=> $prefixLabel || $suffixLabel,
        'flex-row-reverse' => $suffixLabel,
        'space-y-1' => !$prefixLabel && !$suffixLabel
        ])>
        @if ($label)
        <div @class([ 'flex items-center justify-between'
            , 'ltr:-mr-[1px] rtl:-ml-[1px] border-gray-300 dark:border-slate-700 bg-gray-100 transition duration-75 shadow-sm p-2 ltr:border-l rtl:border-r border-t border-b text-gray-500 ltr:rounded-l-md rtl:rounded-r-md dark:bg-slate-800'=>
            $prefixLabel,
            'ltr:-ml-[1px] rtl:-mr-[1px] border-gray-300 dark:border-slate-700 bg-gray-100 transition duration-75
            shadow-sm p-2 border-r
            border-t border-b ltr:rounded-r-md rtl:rounded-l-md dark:bg-slate-800' => $suffixLabel,
            'text-red-900 border-red-400' => $error,
            'bg-red-200' => ($error && $suffixLabel) || ($error && $prefixLabel)
            ])
            >
            <label class="inline-flex items-center" for="{{ str_slug($label) }}">
                @if ($prefixLabel || $suffixLabel)
                {{ $icon ?? '' }}
                @endif
                <span class="text-sm font-medium flex items-center ltr:ml-1 rtl:mr-1">
                    {{ $label }}
                    @if($mandatory)
                    <b class="text-xl leading-none font-medium text-red-700 ltr:ml-1 rtl:mr-1">*</b>
                    @endif
                </span>
            </label>
            @if ($toolTip)
            <x-wb::tooltip :position="$toolTipPosition">
                {{ $toolTip }}
            </x-wb::tooltip>
            @endif
        </div>
        @endif
        <input {{ $attributes->except(['class']) }} id="{{ str_slug($label) }}"
        @class([ 'block transition duration-75 shadow-sm focus:ring-1 focus:ring-inset font-semibold bg-gray-50
        text-sm dark:bg-slate-800 dark:border-slate-700',
        'focus:border-blue-400 focus:ring-blue-400 border-gray-300 focus:bg-white' => !$error,
        'focus:ring-red-400 focus:border-red-400 border-red-400 focus:bg-red-200 bg-red-200
        placeholder:text-red-900' => $error,
        'w-[1%] flex-auto ltr:rounded-r-md rtl:rounded-l-md' => $prefixLabel,
        'w-[1%] flex-auto ltr:rounded-l-md rlt:rounded-r-md' => $suffixLabel,
        'flex w-full ltr:rounded-md rtl:rounded-md' => !$prefixLabel && !$suffixLabel
        ])
        />
    </div>
    @if($error)
    <span @class([ 'text-xs text-red-400 mt-1 font-bold' ])>
        {{ $error }}
    </span>
    @endif
</div>
