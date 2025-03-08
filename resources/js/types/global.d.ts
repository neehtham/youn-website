import { PageProps as InertiaPageProps } from "@inertiajs/core";
import { AxiosInstance } from "axios";
import { route as ziggyRoute } from "ziggy-js";
import { PageProps as AppPageProps } from "./";

declare global {
    interface Window {
        axios: AxiosInstance;
    }

    /* eslint-disable no-var */
    var route: typeof ziggyRoute;
}

declare module "vue" {
    interface ComponentCustomProperties {
        route: typeof ziggyRoute;
    }
}
declare module "@heroicons/vue/24/solid" {
    import { DefineComponent } from "vue";
    export const PhotoIcon: DefineComponent<{}, {}, any>;
    export const UserCircleIcon: DefineComponent<{}, {}, any>;
    export const ChevronDownIcon: DefineComponent<{}, {}, any>;
}

declare module "@inertiajs/core" {
    interface PageProps extends InertiaPageProps, AppPageProps {}
}
