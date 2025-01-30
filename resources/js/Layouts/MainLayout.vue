<script setup lang="ts">
import Navbar from "@/Components/webCompornents/Navbar.vue";
import WebFooter from "@/Components/webCompornents/webFooter.vue";
</script>
<template class="">
    <div class="flex h-screen flex-col">
        <div class="sticky top-0 z-50">
            <Navbar></Navbar>
        </div>
        <div class="sticky top-0 z-50 block xl:hidden"></div>
        <div class="grow flex flex-col items-center justify-center">
            <slot />
        </div>

        <WebFooter></WebFooter>
    </div>
</template>
