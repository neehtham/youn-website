import "../css/app.css";
import "./bootstrap";
import "swiper/css";
import "primeicons/primeicons.css";

import { createInertiaApp } from "@inertiajs/vue3";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { createApp, DefineComponent, h } from "vue";
import { ZiggyVue } from "../../vendor/tightenco/ziggy";
import PrimeVue from "primevue/config";
import Aura from "@primevue/themes/aura";
import ToastService from "primevue/toastservice";
import Swiper from "swiper";
import { Navigation, Pagination } from "swiper/modules";

const appName = "Youth Union";
const swiper = new Swiper(".swiper", {
    modules: [Navigation, Pagination],
});

createInertiaApp({
    title: (title) => `${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.vue`,
            import.meta.glob<DefineComponent>("./Pages/**/*.vue")
        ),
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(PrimeVue, {
                theme: {
                    preset: Aura,
                    options: {
                        prefix: "p",
                        darkModeSelector: "light",
                        cssLayer: false,
                    },
                },
            })
            .use(ZiggyVue)
            .use(ToastService)
            .mount(el);
    },
});
