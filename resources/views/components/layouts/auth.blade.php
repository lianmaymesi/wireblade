<div class="h-full">
    <main class="flex lg:items-start lg:basis-full min-h-screen">
        <div class="relative flex w-full lg:flex-auto min-h-screen">
            <div class="lg:flex lg:items-start lg:justify-start lg:flex-auto mx-auto">
                <div class="relative flex items-center lg:justify-end w-full lg:w-1/2 h-full overflow-hidden lg:p-16">
                    <div
                        class="flex flex-col lg:mr-40 md:bg-white lg:bg-inherit md:px-16 md:py-8 md:rounded-lg md:shadow-sm lg:p-0 lg:rounded-none lg:shadow-none">

                        <div class="flex items-start space-x-2">
                            <div class="text-4xl font-semibold">
                                {{ $title }}
                            </div>
                        </div>

                        <div class="flex flex-col space-y-3 my-12">
                            {{ $page_content }}
                        </div>
                    </div>
                </div>
                @if($showGraphics)
                <div
                    class="relative hidden lg:flex flex-auto items-center justify-center lg:w-1/2 h-full overflow-hidden p-16 bg-[#4ADE80]">
                    <svg xmlns='http://www.w3.org/2000/svg' width='100%' height='100%' viewBox='0 0 1600 800'
                        class="absolute inset-0 pointer-events-none block align-middle">
                        <rect fill='#4ADE80' width='1600' height='800' />
                        <g stroke='#1F2937' stroke-width='78.5' stroke-opacity='0.05'>
                            <circle fill='#4ADE80' cx='0' cy='0' r='1800' />
                            <circle fill='#48d87d' cx='0' cy='0' r='1700' />
                            <circle fill='#46d17a' cx='0' cy='0' r='1600' />
                            <circle fill='#44ca76' cx='0' cy='0' r='1500' />
                            <circle fill='#42c373' cx='0' cy='0' r='1400' />
                            <circle fill='#40bc70' cx='0' cy='0' r='1300' />
                            <circle fill='#3eb46c' cx='0' cy='0' r='1200' />
                            <circle fill='#3cac68' cx='0' cy='0' r='1100' />
                            <circle fill='#3aa464' cx='0' cy='0' r='1000' />
                            <circle fill='#389b60' cx='0' cy='0' r='900' />
                            <circle fill='#35925c' cx='0' cy='0' r='800' />
                            <circle fill='#338858' cx='0' cy='0' r='700' />
                            <circle fill='#307d53' cx='0' cy='0' r='600' />
                            <circle fill='#2d714f' cx='0' cy='0' r='500' />
                            <circle fill='#2a6449' cx='0' cy='0' r='400' />
                            <circle fill='#275544' cx='0' cy='0' r='300' />
                            <circle fill='#23433e' cx='0' cy='0' r='200' />
                            <circle fill='#1F2937' cx='0' cy='0' r='100' />
                        </g>
                    </svg>
                    {{ $slot }}
                </div>
                @endif
            </div>
        </div>
    </main>
</div>
