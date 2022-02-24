import Alpine from "alpinejs";

const breakpoint = 1280;

document.addEventListener("alpine:init", () => {
    Alpine.data("sidebar", () => ({
        active: "dashboard",
        open: {
            above: true,
            below: false,
        },
        isAboveBreakpoint: window.innerWidth > breakpoint,

        handleResize() {
            this.isAboveBreakpoint = window.innerWidth > breakpoint;
        },

        isOpen() {
            console.log(this.isAboveBreakpoint);
            if (this.isAboveBreakpoint) {
                return this.open.above;
            }
            return this.open.below;
        },
        handleOpen() {
            if (this.isAboveBreakpoint) {
                this.open.above = true;
            }
            this.open.below = true;
        },
        handleClose() {
            if (this.isAboveBreakpoint) {
                this.open.above = false;
            }
            this.open.below = false;
        },
        handleAway() {
            if (!this.isAboveBreakpoint) {
                this.open.below = false;
            }
        },
    }));

    Alpine.data("dropdown", () => ({
        open: false,
        tab: "",
        toggle(tab) {
            this.open = !this.open;

            this.tab != tab ? (this.tab = tab) : (this.tab = "");
        },
        close() {
            this.open = false;
        },
    }));

    // Alpine.data("themeSwitcher", () => ({
    //     darkMode: false,

    //     init() {},

    //     toggle() {
    //         this.darkMode = !this.darkMode;
    //     },
    // }));
});

window.Alpine = Alpine;

Alpine.start();
