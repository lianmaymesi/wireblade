<div>
    <label for="{{ str_slug($label) }}">{{ $label }}</label>
    <div x-data="{
            value: @entangle($attributes->wire('model')),
            isFocused() { return document.activeElement !== this.$refs.trix },
            setValue() { this.$refs.trix.editor.loadHTML(this.value) }
        }" x-init="setValue(); $watch('value', () => isFocused() && setValue())"
        x-on:trix-change="value = $event.target.value" {{ $attributes->whereDoesntStartWith('wire:model') }}
        wire:ignore
        >

        <input id="x" type="hidden" />
        <trix-editor x-ref="trix" input="x"></trix-editor>

    </div>
    @if($error)
    <span @class([ 'text-xs text-red-400 mt-1 font-bold' ])>
        {{ $error }}
    </span>
    @endif
</div>
