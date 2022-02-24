<div class="flex flex-auto w-full h-full">
    <div class="flex flex-auto w-full h-full">
        <div class="relative flex flex-auto">
            <x-wb::navigation>
                {{ $navigation_list }}
            </x-wb::navigation>
            <div class="flex flex-col flex-auto relative"
                :class="{ 'ltr:ml-[280px] rtl:mr-[280px]': window.innerWidth > 1080 & isOpen() }">
                <div
                    class="sticky top-0 flex items-center bg-green-400 dark:bg-slate-900 h-16 z-[200] px-4 md:px-6 shadow border-b dark:border-slate-600">
                    <button x-show="!isOpen()" @click.prevent="handleOpen()"
                        class="w-10 h-10 flex items-center justify-center relative hover:bg-green-500 dark:hover:bg-slate-700 rounded-full transition-colors duration-200">
                        <x-wb::icons.menu class="w-6 h-6 text-green-900 dark:text-slate-400" stroke-width="2" />
                    </button>
                    <span x-show="!isOpen()" class="text-xl text-green-900 ltr:ml-2 rtl:mr-2 font-bold">
                        WB::Components
                    </span>
                    <div class="ltr:ml-auto rtl:mr-auto">
                        <div class="flex space-x-1">
                            <button @click.prevent="darkMode = false" x-show="darkMode"
                                class="w-8 h-8 flex items-center justify-center relative hover:bg-green-500 dark:hover:bg-slate-700 rounded-full transition-colors duration-200">
                                <x-wb::icons.sun class="w-5 h-5 text-green-900 dark:text-slate-400" stroke-width="2" />
                            </button>
                            <button @click.prevent="darkMode = true" x-show="!darkMode"
                                class="w-8 h-8 flex items-center justify-center relative hover:bg-green-500 dark:hover:bg-slate-700 rounded-full transition-colors duration-200">
                                <x-wb::icons.moon class="w-5 h-5 text-green-900 dark:text-slate-400" stroke-width="2" />
                            </button>
                            <button
                                class="w-8 h-8 flex items-center justify-center relative hover:bg-green-500 dark:hover:bg-slate-700 rounded-full transition-colors duration-200">
                                <x-wb::icons.bell class="w-5 h-5 text-green-900 dark:text-slate-400" stroke-width="2" />
                            </button>
                        </div>
                    </div>
                </div>
                <div class="relative flex items-top justify-center sm:items-center py-2 md:py-4 px-4 z-[199] w-full">
                    {{ $slot }}
                </div>
                <div
                    :class="{ 'absolute top-0 bottom-0 left-0 right-0 z-[200] opacity-50 bg-black': window.innerWidth < 1080 & isOpen(), 'relative': !isOpen() }">
                </div>
            </div>
        </div>
    </div>
</div>
