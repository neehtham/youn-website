<script setup lang="ts">
import MainLayout from "@/Layouts/MainLayout.vue";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import Carrosell from "@/Components/webCompornents/programsCarrosell.vue";

const props = defineProps({
    events: {
        type: Object,
        required: true,
    },
});
</script>

<template>
    <MainLayout>
        <div class="flex-col items-center mt-3 md:max-w-md">
            <div
                v-for="program in props.events"
                :key="program.title"
                class="relative m-3"
            >
                <a :href="'/Programes/' + program.id">
                    <img
                        class="min-w-48 rounded-lg hover:opacity-85 transform transition-transform duration-400 hover:scale-105"
                        :src="`/storage/${program.coverPhoto}`"
                        :alt="program.title + ' logo'"
                    />
                </a>
            </div>
        </div>
        <!-- <div class="flex-col items-center mt-3 xl:hidden">
            <Carrosell :events="props.events"></Carrosell>
        </div> -->
    </MainLayout>
</template>
