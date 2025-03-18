<script setup lang="ts">
import MainLayout from "@/Layouts/MainLayout.vue";
const props = defineProps({
    event: {
        type: Object,
        required: true,
    },
});
</script>
<template>
    <MainLayout>
        <div
            class="p-6 max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6"
        >
            <div class="col-span-1 md:col-span-2">
                <h1
                    class="text-6xl font-extrabold bg-gradient-to-r from-blue to-pink bg-clip-text text-transparent pb-6 w-48 font-berlin"
                >
                    {{ props.event.title }}
                </h1>
            </div>

            <div class="mt-4">
                <p class="mt-2 text-gray-700">
                    {{ props.event.paragraph1 }}
                </p>
            </div>

            <div class="flex items-center justify-center">
                <img
                    :src="`/storage/${props.event.Photo1}`"
                    alt="Group Photo"
                    class="rounded-lg shadow-lg w-full"
                />
            </div>

            <div class="flex items-center justify-center">
                <img
                    :src="`/storage/${props.event.Photo2}`"
                    alt="Discussion"
                    class="rounded-lg shadow-lg w-full"
                />
            </div>
            <div class="mt-8 bg-blue-100 p-6 rounded-lg text-left">
                <p>
                    {{ props.event.paragraph2 }}
                </p>
            </div>
        </div>
    </MainLayout>
</template>
