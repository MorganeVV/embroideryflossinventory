import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import fs from "fs";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/scss/app.scss",
                "resources/js/app.js",
            ],
            refresh: true,
        }),
    ],
    server: {
        hmr: {
            host: "myinventory.git",
        },
        https: {
            key: fs.readFileSync(`./myinventory.git-key.pem`),
            cert: fs.readFileSync(`./myinventory.git.pem`),
        },
    },
});
