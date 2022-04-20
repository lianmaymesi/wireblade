<div class="flex flex-auto w-full h-full">
    <div class="flex flex-auto w-full h-full">
        <div class="relative flex flex-auto">
            <div x-show="isOpen()" x-transition:enter="transition ease-in-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-x-0 -translate-x-1/2"
                x-transition:enter-end="opacity-100 transform scale-x-100 translate-x-0"
                x-transition:leave="transition ease-in-out duration-300"
                x-transition:leave-start="opacity-100 transform scale-x-100 translate-x-0"
                x-transition:leave-end="opacity-0 transform scale-x-0 -translate-x-1/2"
                class="fixed bottom-0 ltr:ml-0 rtl:mr-0 bg-gray-800 dark:bg-slate-900 print:hidden flex flex-col flex-grow shrink-0 basis-auto top-0 w-[280px] max-w-[280px] min-w-[280px] h-screen min-h-screen max-h-screen z-[201] shadow border-r border-slate-600"
                style="display: none;">
                <div @click.away="handleAway()"
                    class="ltr:left-0 rtl:right-0 absolute flex flex-col transition-all transform duration-[400ms] inset-y-0 w-full h-full overflow-hidden z-10">
                    <header class="flex-shrink-0 px-4 h-16 flex items-center justify-center border-b border-slate-600">
                        <div class="flex items-center justify-between w-full">
                            <span class="text-xl text-white ltr:ml-2 rtl:mr-2 font-semibold">
                                <a href="/">
                                    {{ $logo }}
                                </a>
                            </span>
                            <button x-show="isOpen()" @click.prevent="handleClose()"
                                class="w-8 h-8 flex items-center justify-center relative text-slate-300 dark:text-slate-400 hover:bg-green-500 hover:text-green-900 dark:hover:bg-slate-700 rounded-full transition-colors duration-200">
                                <x-wb::icons.x class="w-5 h-5" stroke-width="2" />
                            </button>
                        </div>
                    </header>
                    <x-wb::navigation>
                        {{ $navigation }}
                    </x-wb::navigation>
                    {{ $profile }}
                </div>
            </div>
            <div x-show="notification" x-transition:enter="transition ease-in-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-x-0 translate-x-1/2"
                x-transition:enter-end="opacity-100 transform scale-x-100 -translate-x-0"
                x-transition:leave="transition ease-in-out duration-300"
                x-transition:leave-start="opacity-100 transform scale-x-100 -translate-x-0"
                x-transition:leave-end="opacity-0 transform scale-x-0 translate-x-1/2"
                class="fixed bottom-0 ltr:right-0 rtl:left-0 ltr:mr-0 rtl:ml-0 bg-white dark:bg-slate-900 print:hidden flex flex-col flex-grow shrink-0 basis-auto top-0 w-[280px] max-w-[280px] min-w-[280px] h-screen min-h-screen max-h-screen z-[201] shadow border-r border-slate-600"
                style="display: none;">
                <div @click.away="notification = false"
                    class="ltr:right-0 rtl:left-0 absolute flex flex-col transition-all transform duration-[400ms] inset-y-0 w-full h-full overflow-hidden z-10">
                    <header
                        class="flex-shrink-0 px-4 h-16 flex items-center justify-center border-b border-slate-300 dark:border-slate-600">
                        <div class="flex items-center justify-between w-full">
                            <div class="text-gray-800 font-semibold flex items-center space-x-2">
                                <span class="text-lg">
                                    Notification
                                </span>
                                <div
                                    class="flex h-6 w-6 text-white bg-red-500 rounded-full justify-center items-center">
                                    5
                                </div>
                            </div>
                            <div class="flex">
                                <a href=""
                                    class="w-8 h-8 flex items-center justify-center relative text-slate-800 dark:text-slate-400 hover:bg-green-500 hover:text-green-900 dark:hover:bg-slate-700 rounded-full transition-colors duration-200">
                                    <x-wb::icons.cog class="w-5 h-5" />
                                </a>
                                <button x-show="isOpen()" @click.prevent="notification = false"
                                    class="w-8 h-8 flex items-center justify-center relative text-slate-800 dark:text-slate-400 hover:bg-green-500 hover:text-green-900 dark:hover:bg-slate-700 rounded-full transition-colors duration-200">
                                    <x-wb::icons.x class="w-5 h-5" stroke-width="2" />
                                </button>
                            </div>
                        </div>
                    </header>
                    <ul class="flex flex-col">
                        {{ $notification }}
                    </ul>
                </div>
            </div>
            <div class="flex flex-col flex-auto w-full"
                :class="{ 'fixed': window.innerWidth < 1024 && isOpen() || notification, 'ltr:ml-[280px] rtl:mr-[280px]': window.innerWidth > 1024 && isOpen(), 'relative': !isOpen() && !notification }">
                <div
                    class="sticky top-0 flex items-center bg-green-400 dark:bg-slate-900 h-16 z-[200] px-4 shadow border-b dark:border-slate-600">
                    <button x-show="!isOpen()" @click.prevent="handleOpen()"
                        class="w-10 h-10 flex items-center justify-center relative hover:bg-green-500 dark:hover:bg-slate-700 rounded-full transition-colors duration-200">
                        <x-wb::icons.menu class="w-6 h-6 text-green-900 dark:text-slate-400" stroke-width="2" />
                    </button>
                    <div class="flex items-center">
                        <span x-show="!isOpen()" class="text-xl text-green-900 ltr:ml-2 rtl:mr-2 font-bold">
                            <a href="/">
                                {{ $logo }}
                            </a>
                        </span>
                        <div class="px-4 text-gray-700/40" x-show="!isOpen()">
                            &verbar;
                        </div>
                        <div class="text-base lg:text-lg font-semibold">
                            {{ $title }}
                        </div>
                    </div>
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
                            <button @click.prevent="notification = true"
                                class="w-8 h-8 flex items-center justify-center relative hover:bg-green-500 dark:hover:bg-slate-700 rounded-full transition-colors duration-200">
                                <x-wb::icons.bell class="w-5 h-5 text-green-900 dark:text-slate-400" stroke-width="2" />
                                <span
                                    class="absolute rounded-full h-2 w-2 bg-red-500 top-1 ltr:right-1 rtl:left-1"></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div
                    class="relative flex items-top sm:items-center py-2 md:py-4 px-4 w-full bg-gray-50 dark:bg-slate-800">
                    {{ $content }}
                </div>
                <div
                    :class="{ 'absolute top-0 bottom-0 left-0 right-0 z-[200] opacity-50 bg-black': window.innerWidth < 1024 && isOpen(), 'relative': !isOpen() }">
                </div>
            </div>
        </div>
    </div>
</div>
