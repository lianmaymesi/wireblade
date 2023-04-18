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
    <div x-data="{textEditor:@entangle($attributes->wire('model')).defer}"
        x-init="()=>{setEditor{{$id}}Value(textEditor)}" @reseteditor{{$id}}.window="setEditorValue('');" wire:ignore>
        <input x-ref="editor{{$id}}" id="editor-x{{$id}}" type="hidden" value="">
        <trix-editor id="editor{{$id}}" input="editor-x{{$id}}"
            x-on:trix-change="textEditor=$refs.editor{{$id}}.value;">
        </trix-editor>
    </div>
    @if($error)
    <span @class([ 'text-xs text-red-400 mt-1 font-bold' ])>
        {{ $error }}
    </span>
    @endif
</div>
<script>
    function setEditor{{$id}}Value(value) {
        let element{{$id}}= document.getElementById("editor{{$id}}");
        let input = document.getElementById("editor-x{{$id}}");
        if(value=='') {
            input.value = "";
            element{{$id}}.innerHTML = "";
        }
        else {
            element{{$id}}.editor.insertHTML(value);
        }
    }

    var trixEditor = document.getElementById("{{$id}}");

    var mimeTypes = ["image/png", "image/jpeg", "image/jpg"];

    addEventListener("trix-file-accept", function(event) {
        if (! mimeTypes.includes(event.file.type) ) {
            return event.preventDefault();
        }
    });

    addEventListener("trix-attachment-add", function(event){
        uploadTrixImage(event.attachment);
    });

    function uploadTrixImage(attachment){
        // upload with livewire
        @this.upload(
            'photos',
            attachment.file,
            function (uploadedURL) {
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
            function(event){
                attachment.setUploadProgress(event.detail.progress);
            },
        )
    }

    var style = document.createElement('style');
    style.type = 'text/css';
    style.innerHTML = '.cssClass { min-height: {{ $height }}; margin-top: 17px; }';
    document.getElementsByTagName('head')[0].appendChild(style);

    document.getElementById('{{ $thisVal }}').className = 'cssClass';
</script>
