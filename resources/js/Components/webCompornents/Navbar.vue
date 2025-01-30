<script lang="ts">
import { icon } from "@fortawesome/fontawesome-svg-core";
import "primeicons/primeicons.css";
import { ref } from "vue";
const navItems = [
    {
        lable: "Home",
        route: "/",
        icon: "pi pi-home",
    },
    {
        lable: "Our Programes",
        route: "/Programes",
        icon: "pi pi-clipboard",
    },
    {
        lable: "About us",
        route: "/About",
        icon: "pi pi-info-circle",
    },
    {
        lable: "Donate",
        route: "/Donate",
        icon: "pi pi-money-bill",
    },
];
var isMenuOpen = ref(false);
export default {
    name: "Navbar",

    data() {
        return {
            navItems,
            isMenuOpen,
        };
    },
};
</script>

<template>
    <nav>
        <div class="bg-white shadow">
            <div class="px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <img
                        class="h-14 w-auto mt-1"
                        src="/images/logo.png"
                        alt="Logo"
                    />
                    <div class="xl:hidden">
                        <button
                            @click="isMenuOpen = !isMenuOpen"
                            class="p-4 focus:outline-none"
                        >
                            <i class="pi pi-bars" style="font-size: 2rem"></i>
                        </button>

                        <div
                            v-if="isMenuOpen"
                            class="absolute top-0 left-0 w-full bg-white shadow-md z-50"
                        >
                            <div
                                class="flex justify-between items-center px-4 py-2"
                            >
                                <img
                                    class="h-14 w-auto"
                                    src="/images/logo.png"
                                    alt="Logo"
                                />
                                <button
                                    @click="isMenuOpen = false"
                                    class="p-2 focus:outline-none"
                                >
                                    <i
                                        class="pi pi-times"
                                        style="font-size: 1.5rem"
                                    ></i>
                                </button>
                            </div>

                            <div class="px-4 py-2">
                                <a
                                    v-for="item in navItems"
                                    :href="item.route"
                                    class="flex items-center space-x-3 px-6 py-3 bg-lightPink text-blue font-hadings font-bold text-2xl gap-5 m-3 rounded-2xl shadow-lg"
                                >
                                    <i
                                        :class="item.icon"
                                        style="font-size: 2rem"
                                    />
                                    {{ item.lable }}
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="hidden xl:flex">
                        <div class="flex-shrink-0 flex items-center"></div>
                        <div
                            class="hidden sm:-my-px sm:ml-6 sm:flex sm:space-x-8"
                        >
                            <a
                                v-for="item in navItems"
                                :href="item.route"
                                class="border-transparent text-blue hover:text-lightBlue hover:border-gray-300 inline-flex items-center px-1 pt-1 border-b-2 text-sm font-medium"
                            >
                                {{ item.lable }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>
