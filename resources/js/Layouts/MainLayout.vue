<script setup lang="ts">
import Navbar from "@/Components/webCompornents/Navbar.vue";
import WebFooter from "@/Components/webCompornents/webFooter.vue";
import { Head } from "@inertiajs/vue3";
import ProgressSpinner from "primevue/progressspinner";
import { Button } from "primevue";
import { onMounted, onUnmounted, computed, watch } from "vue";
import { usePage, router } from "@inertiajs/vue3";
import { ref } from "vue";

const page = usePage();
const isLoading = ref(false);

function testLoading() {
    isLoading.value = true;
    setTimeout(() => {
        isLoading.value = false;
    }, 3000);
}

onMounted(() => {
    testLoading();
});
</script>
<template>
    <Head>
        <link rel="icon" type="image/icon" href="/images/favicon.ico" />
    </Head>

    <div class="flex flex-col h-screen">
        <!-- Spinner overlay -->
        <div
            v-if="isLoading"
            class="fixed inset-0 flex items-center justify-center bg-white z-50"
        >
            <ProgressSpinner
                style="
                    width: 100px;
                    height: 100px;
                    --p-progress-spinner-color: linear-gradient(
                        90deg,
                        #c32f47 0%,
                        #193266 100%
                    );
                "
                strokeWidth="3"
                fill="transparent"
                animationDuration=".75s"
                aria-label="Custom ProgressSpinner"
            />
        </div>
        <div class="sticky top-0 z-50">
            <Navbar />
        </div>
        <div class="flex-1 flex flex-col items-center justify-center w-full">
            <slot />
        </div>
        <WebFooter />
    </div>
</template>

<style>
:deep(.p-progress-spinner-circle) {
    stroke: url(#custom-gradient);
}
</style>
