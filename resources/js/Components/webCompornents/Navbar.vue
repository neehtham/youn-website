<script lang="ts">
const navItems = [
    {
        lable: "Home",
        route: "/",
    },
    {
        lable: "Our programes",
        route: "/Programes",
    },
    {
        lable: "About us",
        route: "/About",
    },
    {
        lable: "Donate",
        route: "/Donate",
    },
];
export default {
    name: "Navbar",

    data() {
        return {
            navItems,
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
                    <div class="flex">
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
