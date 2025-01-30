<script setup lang="ts">
import Navbar from "@/Components/webCompornents/Navbar.vue";
import WebFooter from "@/Components/webCompornents/webFooter.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";
import MainLayout from "@/Layouts/MainLayout.vue";
</script>

<template>
    <MainLayout>
        <div class="relative z-10 p-6 max-w-4xl mx-auto h-84">
            <h1
                class="text-6xl font-extrabold bg-gradient-to-r from-blue to-pink bg-clip-text text-transparent font-berlin w-48"
            >
                YOUN
            </h1>

            <section class="mt-6">
                <h2
                    class="text-3xl font-bold bg-gradient-to-r from-blue to-pink bg-clip-text text-transparent font-berlin w-48"
                >
                    ABOUT US
                </h2>
                <p class="text-blue font-bold mt-2 leading-relaxed">
                    Our organization aims to develop and shape the future of
                    youth, guiding them to hold honorable values, live a
                    responsible life, and be useful to the community. This
                    involves works targeted at promoting health mentally and
                    physically, establishing and elevating useful skills,
                    offering a platform to engage in community work, and
                    enjoying occasional fun activities both indoors and
                    outdoors.
                </p>
            </section>

            <section class="mt-6">
                <h2
                    class="text-3xl font-bold bg-gradient-to-r from-blue to-pink bg-clip-text text-transparent font-berlin w-36"
                >
                    VISION
                </h2>
                <p class="text-blue font-bold mt-2">
                    Shaping generations of responsible youth
                </p>
            </section>

            <section class="mt-6 pb-10">
                <h2
                    class="text-3xl font-bold bg-gradient-to-r from-blue to-pink bg-clip-text text-transparent font-berlin w-36"
                >
                    MISSION
                </h2>
                <p class="text-blue font-bold mt-2">
                    To become the platform for youth to grow, enjoy, and
                    succeed.
                </p>
            </section>
        </div>
    </MainLayout>
</template>
