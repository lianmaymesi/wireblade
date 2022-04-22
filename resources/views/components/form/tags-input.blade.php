<div x-data="{
    open: false,
    textInput: '',
    tags: @entangle($attributes->wire('model')),
    removeTag(index) {
        this.tags.splice(index, 1)
        this.fireTagsUpdateEvent()
    },
    fireTagsUpdateEvent() {
        this.$el.dispatchEvent(new CustomEvent('tags-update', {
            detail: { tags: this.tags },
            bubbles: true,
        }));
    },
    clearSearch() {
        this.textInput = ''
        this.toggleSearch()
    },
    toggleSearch() {
        this.open = this.textInput != ''
    },
    search(q) {
        if ( q.includes(' ,') ) { q.split(' ,').forEach(function(val) { this.addTag(val) }, this) } this.toggleSearch()
    },
    addTag(tag) {
        tag = tag.trim()
        if (tag != '' && !this.hasTag(tag)) {
            this.tags.push( tag )
        }
        this.clearSearch()
        this.$refs.textInput.focus()
        this.fireTagsUpdateEvent()
    },
    hasTag(tag) {
        var tag = this.tags.find(e => {
            return e.toLowerCase() === tag.toLowerCase()
        })
        return tag != undefined
    },
}">
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
        <div @click.away="clearSearch()" class="w-full" @keydown.escape="clearSearch()">
            <div class="relative" @keydown.enter.prevent="addTag(textInput)">
                <input type="text" x-model="textInput" x-ref="textInput" @input="search($event.target.value)" @class([ 'block transition duration-75 shadow-sm focus:ring-1 focus:ring-inset font-semibold bg-gray-50
            text-sm dark:bg-slate-800 dark:border-slate-700 w-full flex ltr:rounded-md rtl:rounded-md'
                    , 'focus:border-blue-400 focus:ring-blue-400 border-gray-300 focus:bg-white'=> !$error,
                'focus:ring-red-400 focus:border-red-400 border-red-400 focus:bg-red-200 bg-red-200
                placeholder:text-red-900' => $error
                ])
                placeholder="{{ $label }}">
                <div :class="[open ? 'block' : 'hidden']">
                    <div class="absolute z-[9999] left-0 mt-2 w-full">
                        <div
                            class="py-1 text-sm bg-white dark:bg-slate-900 rounded shadow-lg border border-gray-300 dark:border-slate-700">
                            <a @click.prevent="addTag(textInput)"
                                class="block py-1 px-5 cursor-pointer hover:bg-indigo-600 hover:text-white">
                                Add tag "<span class="font-semibold" x-text="textInput"></span>"
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <select class="hidden" multiple {{ $attributes }}>
                <template x-for="(tag, index) in tags">
                    <option :value="tag" x-text="tag" selected></option>
                </template>
            </select>
        </div>
    </div>
    <template x-for="(tag, index) in tags">
        <div class="bg-green-300 dark:bg-green-600 inline-flex items-center text-xs rounded mt-2 mr-1">
            <span class="ml-2 mr-1 leading-relaxed truncate max-w-xs dark:text-white" x-text="tag"></span>
            <button @click.prevent="removeTag(index)"
                class="w-6 h-8 inline-block align-middle text-gray-500 dark:text-gray-100 hover:text-gray-600 dark:hover:text-red-700 focus:outline-none">
                <svg class="w-6 h-6 fill-current mx-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                    <path fill-rule="evenodd"
                        d="M15.78 14.36a1 1 0 0 1-1.42 1.42l-2.82-2.83-2.83 2.83a1 1 0 1 1-1.42-1.42l2.83-2.82L7.3 8.7a1 1 0 0 1 1.42-1.42l2.83 2.83 2.82-2.83a1 1 0 0 1 1.42 1.42l-2.83 2.83 2.83 2.82z" />
                </svg>
            </button>
        </div>
    </template>
    @if($error)
    <span @class([ 'text-xs text-red-400 mt-1 font-bold' ])>
        {{ $error }}
    </span>
    @endif
</div>
