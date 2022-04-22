<nav class="flex flex-auto flex-col inset-y-0 w-full h-full overflow-hidden z-10" x-data="{
    open: false,
    tab: '{{ $mainMenu }}',
    toggle(tab) {
        this.open = !this.open;

        this.tab != tab ? (this.tab = tab) : (this.tab = '');
    },
    close() {
        this.open = false;
        this.activeMenu = '';
    }
}">
    <div class="flex-auto overflow-y-auto touch-auto relative">
        {{ $slot }}
    </div>
</nav>
