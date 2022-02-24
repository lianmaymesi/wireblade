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
                    WB::Components
                </span>
                <button x-show="isOpen()" @click.prevent="handleClose()"
                    class="w-8 h-8 flex items-center justify-center relative text-slate-300 dark:text-slate-400 hover:bg-green-500 hover:text-green-900 dark:hover:bg-slate-700 rounded-full transition-colors duration-200">
                    <x-wb::icons.x class="w-5 h-5" stroke-width="2" />
                </button>
            </div>
        </header>
        <nav class="flex flex-auto flex-col inset-y-0 w-full h-full overflow-hidden z-10" x-data="dropdown">
            <div class="flex-auto overflow-y-auto touch-auto relative space-y-4">
                {{ $slot }}
            </div>
        </nav>
        <footer class="px-6 py-3 flex flex-shrink-0 items-center gap-3 border-t border-slate-600">
            <div class="relative w-11 h-11">
                <img src="assets/brian-hughes.jpg" class="rounded-full" alt="">
            </div>
            <div>
                <p class="text-slate-200">LiAn Dhas</p>
                <p class="text-xs text-slate-400 transition hover:text-slate-500">
                    <a href="">
                        Sign Out
                    </a>
                </p>
            </div>
        </footer>
    </div>
</div>
