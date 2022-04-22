<div>
    <div @class([ 'relative w-full' ])>
        <label class="inline-flex items-center space-x-2">
            <input type="checkbox" {{ $attributes->except(['class']) }}
            @class(['rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring
            focus:ring-offset-0 focus:ring-indigo-200 focus:ring-opacity-50'])
            >
            <span class="ml-2">{{ $label }}</span>
        </label>
    </div>
    @if($error)
    <span @class([ 'text-xs text-red-400 mt-1 font-bold' ])>
        {{ $error }}
    </span>
    @endif
</div>
