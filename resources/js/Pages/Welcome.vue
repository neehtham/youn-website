<script setup lang="ts">
import Navbar from "@/Components/webCompornents/Navbar.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";
import Button from "primevue/button";

import Menubar from "primevue/menubar";
import EventHighlight from "@/Components/webCompornents/eventHighlight.vue";
</script>

<template class="bg-white">
    <div>
        <Head>
            <title>Welcome</title>
        </Head>
        <Navbar></Navbar>
    </div>
    <div class="h-80"></div>
    <div class="mx-40">
        <div
            class="flex flex-col md:flex-row justify-around w-full font-hadings font-bold"
        >
            <p class="text-3xl text-blue">Our Programes</p>
            <a href="/Programes">
                <p class="text-2xl text-blue">View more >></p>
            </a>
        </div>
        <div class="ml-4 md:ml-48 max-w-full md:max-w-4xl">
            <EventHighlight></EventHighlight>
        </div>
    </div>
</template>
