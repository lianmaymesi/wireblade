<div
    class="visible ltr:ml-0 rtl:mr-0 bg-gray-800 dark:bg-slate-900 print:hidden transition-all transform duration-[400ms] sticky flex flex-col flex-grow shrink-0 basis-auto top-0 w-[280px] max-w-[280px] min-w-[280px] h-screen min-h-screen max-h-screen z-[200] shadow border-r border-slate-600">
    <div
        class="ltr:left-0 rtl:right-0 absolute flex flex-col transition-all transform duration-[400ms] inset-y-0 w-full h-full overflow-hidden z-10">
        <header class="flex-shrink-0 px-6 h-16 flex items-center justify-center border-b border-slate-600">
            <div class="flex items-center justify-center w-full">
                <div class="flex items-center justify-center">
                    <span class="text-xl text-white ltr:ml-2 rtl:mr-2 font-semibold">
                        wb::components
                    </span>
                </div>
            </div>
        </header>
        <nav class="flex flex-auto flex-col inset-y-0 w-full h-full overflow-hidden z-10">
            <div class="flex-auto overflow-y-auto touch-auto relative space-y-4">
                <x-wb::nav-item dropdown>
                    <x-wb::nav-help title="Dashboard" help-text="Analysis, Summary & Performance" />
                    <x-wb::nav-link title="Pages" route="" />
                    <x-slot name="dropdownMenus">
                        <x-wb::dropdown-link title="Add Page" route=""></x-wb::dropdown-link>
                    </x-slot>
                </x-wb::nav-item>
                <x-wb::nav-item dropdown>
                    <x-wb::nav-help title="Dashboard" help-text="Analysis, Summary & Performance" />
                    <x-wb::nav-link title="Pages" route="" />
                    <x-slot name="dropdownMenus">
                        <x-wb::dropdown-link title="Add Page" route=""></x-wb::dropdown-link>
                    </x-slot>
                </x-wb::nav-item>
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
