<div>
    <div @class([ 'relative w-full space-y-1' ])>
        @if ($label)
        <div @class([ 'flex items-center justify-between' , 'text-red-900 border-red-400'=> $error
            ])
            >
            <label class="inline-flex items-center" for="{{ str_slug($label) }}">
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
        <input {{ $attributes->except(['class']) }} type="file" id="{{ str_slug($label) }}" label="{{ $label }}"
        class="block w-full text-xs text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-md file:border-0
        file:text-xs file:font-semibold file:bg-green-300 dark:file:bg-slate-300 file:text-green-900
        dark:file:text-slate-800 hover:file:bg-green-600 dark:hover:file:bg-green-600 hover:file:text-white
        dark:hover:file:text-white focus:border-green-300 focus:ring focus:ring-green-200 focus:ring-opacity-50
        cursor-pointer" />
        @if($error)
        <span @class([ 'text-xs text-red-400 mt-1 font-bold' ])>
            {{ $error }}
        </span>
        @endif
    </div>
</div>
