import Alpine from "alpinejs";
import collapse from "@alpinejs/collapse";

Alpine.plugin(collapse);

const breakpoint = 1024;

document.addEventListener("alpine:init", () => {
    Alpine.data("sidebar", () => ({
        notification: false,
        open: {
            above: true,
            below: false,
        },
        isAboveBreakpoint: window.innerWidth > breakpoint,

        handleResize() {
            this.isAboveBreakpoint = window.innerWidth > breakpoint;
        },

        isOpen() {
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

            this.activeTitle = tab;
        },
        close() {
            this.open = false;
            this.activeTitle = "";
        },
    }));
});

window.Alpine = Alpine;

Alpine.start();
