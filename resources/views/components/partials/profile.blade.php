<footer class="px-6 py-3 flex flex-shrink-0 items-center gap-3 border-t border-slate-600">
    <div class="relative w-11 h-11">
        <img src="{{ $image }}" class="rounded-full" alt="{{ $name }}" />
    </div>
    <div>
        <p class="text-slate-200">{{ $name }}</p>
        <p class="text-xs text-slate-400 transition hover:text-slate-500">
            <a href="{{ $logout }}">
                Sign Out
            </a>
        </p>
    </div>
</footer>
