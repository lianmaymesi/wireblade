import { defineConfig, splitVendorChunkPlugin } from "vite";
import laravel from "laravel-vite-plugin";

export default defineConfig({
    plugins: [
        laravel({
            hotFile: "public/vendor/wireblade/wireblade.hot", // Most important lines
            buildDirectory: "vendor/wireblade",
            input: ["resources/assets/css/app.css", "resources/assets/js/app.js"],
            refresh: true,
        }),
        splitVendorChunkPlugin(),
    ],
    build: {
        rollupOptions: {
            output: {
                manualChunks(id) {
                    if (id.includes("node_modules")) {
                        return id.toString().split("node_modules/")[1].split("/")[0].toString();
                    }
                },
            },
        },
    },
});
