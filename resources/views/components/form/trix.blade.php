@php
$thisVal = 'editor' . $id;
$height = $editorHeight ?? '10rem';
@endphp
<div>
    <div class="flex items-center justify-between mb-4">
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
            <x-wb::tooltip :position="$toolTipPosition">
                {{ $toolTip }}
            </x-wb::tooltip>
            @endif
        </div>
    </div>
    <div
        x-data="{
            value: @entangle($attributes->wire('model')).defer,
            isFocused() { return document.activeElement !== this.$refs.trix },
            setValue() { this.$refs.trix.editor.loadHTML(this.value) }
        }"
        @if ($hideAttachment)
            @trix-file-accept.preventDefault
        @endif
        x-init="setValue();
        $watch('value', () => isFocused() && setValue())"
        x-on:trix-change="value = $event.target.value"
        {{ $attributes->whereDoesntStartWith('wire:model') }}
        wire:ignore
    >
        <input id="{{ $id }}" type="hidden">
        <trix-editor input="{{ $id }}" x-ref="trix" class="prose max-w-full bg-white" style="min-height: {{ $editorHeight }}">
        </trix-editor>
    </div>
    @if($error)
    <span @class([ 'text-xs text-red-400 mt-1 font-bold' ])>
        {{ $error }}
    </span>
    @endif
</div>
@once
    @push('scripts')
        <script>
            addEventListener("trix-attachment-add", function(event) {
                if (event.attachment.file) {
                    uploadTrixImage(event.attachment);
                }
            });

            function uploadTrixImage(attachment) {
                // upload with livewire
                @this.upload(
                    'photos',
                    attachment.file,
                    function(uploadedURL) {
                        // We need to create a custom event.
                        // This event will create a pause in thread execution until we get the Response URL from the Trix Component @completeUpload
                        const trixUploadCompletedEvent = `trix-upload-completed:${btoa(uploadedURL)}`;
                        const trixUploadCompletedListener = function(event) {
                            attachment.setAttributes(event.detail);
                            window.removeEventListener(trixUploadCompletedEvent, trixUploadCompletedListener);
                        }
                        window.addEventListener(trixUploadCompletedEvent, trixUploadCompletedListener);
                        // call the Trix Component @completeUpload below
                        @this.call('completeUpload', uploadedURL, trixUploadCompletedEvent);
                    },
                    function(event) {
                        attachment.setUploadProgress(event.detail.progress);
                    }
                )
            }
        </script>
    @endpush
@endonce
@if ($hideAttachment)
    <style>
        .{{ $id }} [data-trix-button-group="file-tools"] {
            display: none !important;
        }
    </style>
@endif
