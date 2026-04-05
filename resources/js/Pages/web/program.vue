<script setup lang="ts">
import MainLayout from "@/Layouts/MainLayout.vue";
const props = defineProps({
    event: {
        type: Object,
        required: true,
    },
});

import { computed } from "vue";

const galleryImages = computed(() => {
    return props.event.media?.filter((m: any) => m.collection === 'gallery') || [];
});
</script>
<template>
    <MainLayout>
        <div
            class="hidden p-6 max-w-4xl mx-auto xl:grid grid-cols-1 md:grid-cols-2 gap-6"
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
            
            <div class="col-span-1 md:col-span-2 mt-8" v-if="galleryImages.length > 0">
                <h2 class="text-3xl font-bold mb-4 font-berlin text-blue">Gallery</h2>
                <div class="grid grid-cols-2 md:grid-cols-3 gap-4">
                    <div v-for="image in galleryImages" :key="image.id" class="relative group">
                        <img :src="`/${image.path}`" class="w-full h-48 object-cover rounded-lg shadow-md hover:scale-105 transition-transform duration-300" />
                    </div>
                </div>
            </div>
        </div>
        <div
            class="p-6 max-w-4xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 xl:hidden"
        >
            <div class="col-span-1 md:col-span-2">
                <h1
                    class="text-6xl font-extrabold bg-gradient-to-r from-blue to-pink bg-clip-text text-transparent pb-6 w-48 font-berlin"
                >
                    {{ props.event.title }}
                </h1>
            </div>

            <div class="flex items-center justify-center">
                <img
                    :src="`/storage/${props.event.Photo1}`"
                    alt="Group Photo"
                    class="rounded-lg shadow-lg w-full"
                />
            </div>

            <div class="mt-4">
                <p class="mt-2 text-gray-700">
                    {{ props.event.paragraph1 }}
                </p>
            </div>

            <div class="flex items-center justify-center">
                <img
                    :src="`/storage/${props.event.Photo2}`"
                    alt="Discussion"
                    class="rounded-lg shadow-lg w-full"
                />
            </div>
            <div class="mt-8 bg-blue-100 rounded-lg text-left">
                <p>
                    {{ props.event.paragraph2 }}
                </p>
            </div>

            <div class="col-span-1 md:col-span-2 mt-8" v-if="galleryImages.length > 0">
                <h2 class="text-3xl font-bold mb-4 font-berlin text-blue">Gallery</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div v-for="image in galleryImages" :key="image.id" class="relative group">
                        <img :src="`/${image.path}`" class="w-full h-32 object-cover rounded-lg shadow-md" />
                    </div>
                </div>
            </div>
        </div>
    </MainLayout>
</template>
