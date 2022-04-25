<div>
    <link rel="stylesheet" href="https://unpkg.com/trix@2.0.0-alpha.1/dist/trix.css">
    </link>
    <script src="https://unpkg.com/trix@2.0.0-alpha.1/dist/trix.umd.js"></script>
    <label for="{{ str_slug($label) }}">{{ $label }}</label>
    <div x-data="{ value: '' }" x-init="$refs.trix.editor.loadHTML(value)" x-id="['trix']"
        @trix-change="value = $refs.input.value" @trix-file-accept.prevent>
        <input :id="$id('trix')" type="hidden" x-ref="input" {{ $attributes->except(['class']) }}>

        <!-- Optional .prose class added to utilize Tailwind's Typography Plugin for styling -->
        <trix-editor x-ref="trix" :input="$id('trix')"></trix-editor>
    </div>
    @if($error)
    <span @class([ 'text-xs text-red-400 mt-1 font-bold' ])>
        {{ $error }}
    </span>
    @endif
</div>
