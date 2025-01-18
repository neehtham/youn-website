<script setup lang="ts">
import Navbar from "@/Components/webCompornents/Navbar.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";
</script>

<template>
    <div>
        <Head>
            <title>Welcome</title>
        </Head>
        <Navbar></Navbar>
    </div>
    <div>
        <h1>Hello from About us</h1>
    </div>
</template>
