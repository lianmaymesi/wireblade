<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr" class="scroll-smooth">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{--
    <link rel="stylesheet" href="{{ asset('wireblade/css/wireblade.css') }}"> --}}

    <link rel="stylesheet" href="http://wireblade.test\public\assets\css\wireblade.css">

    {{-- @wbstyles --}}

    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    @livewireStyles
</head>

<body class="antialiased bg-gray-50 dark:bg-slate-800 dark:text-slate-400">

    <div class="flex flex-auto w-full h-full">
        <div class="flex flex-auto w-full h-full">
            <div class="relative flex flex-auto w-full">
                <x-wb::navigation />
                <div class="flex flex-col flex-auto w-full relative">
                    <div
                        class="sticky top-0 flex items-center bg-green-400 dark:bg-slate-900 h-16 w-full z-[200] px-4 md:px-6 shadow border-b dark:border-slate-600">
                        <button
                            class="w-10 h-10 flex items-center justify-center relative hover:bg-green-500 dark:hover:bg-slate-700 rounded-full transition-colors duration-200">
                            <x-wb::icons.menu class="w-6 h-6 text-green-900 dark:text-slate-400" stroke-width="2" />
                        </button>
                        <div class="ltr:ml-auto rtl:mr-auto">
                            <div class="flex space-x-1">
                                <button
                                    class="w-8 h-8 flex items-center justify-center relative hover:bg-green-500 dark:hover:bg-slate-700 rounded-full transition-colors duration-200">
                                    <x-wb::icons.sun class="w-5 h-5 text-green-900 dark:text-slate-400"
                                        stroke-width="2" />
                                </button>
                                <button
                                    class="w-8 h-8 flex items-center justify-center relative hover:bg-green-500 dark:hover:bg-slate-700 rounded-full transition-colors duration-200">
                                    <x-wb::icons.moon class="w-5 h-5 text-green-900 dark:text-slate-400"
                                        stroke-width="2" />
                                </button>
                                <button
                                    class="w-8 h-8 flex items-center justify-center relative hover:bg-green-500 dark:hover:bg-slate-700 rounded-full transition-colors duration-200">
                                    <x-wb::icons.bell class="w-5 h-5 text-green-900 dark:text-slate-400"
                                        stroke-width="2" />
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex items-top justify-center sm:items-center py-2 md:py-4 px-4 z-[199]">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    @livewireScripts

    <link rel="stylesheet" href="http://wireblade.test\public\assets\js\wireblade.js">
</body>

</html>
