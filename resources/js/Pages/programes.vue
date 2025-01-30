<script setup lang="ts">
import MainLayout from "@/Layouts/MainLayout.vue";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";
import Carrosell from "@/Components/webCompornents/programsCarrosell.vue";
</script>
<script lang="ts">
const programes = [
    {
        name: "String",
        photo: "/images/program_logos/string.png",
        id: 1,
    },
    {
        name: "YKOTR",
        photo: "/images/program_logos/ykotr.png",
        id: 2,
    },
    {
        name: "SYG",
        photo: "/images/program_logos/syg.png",
        id: 3,
    },
    {
        name: "Unified",
        photo: "/images/program_logos/unified.png",
        id: 4,
    },
];
</script>

<template>
    <MainLayout>
        <div class="hidden flex-col items-center mt-3 xl:flex">
            <div
                v-for="program in programes"
                :key="program.name"
                class="relative m-3"
            >
                <a :href="'/Programes/' + program.id">
                    <img
                        class="min-w-48 rounded-lg hover:opacity-85 transform transition-transform duration-400 hover:scale-105"
                        :src="program.photo"
                        :alt="program.name + ' logo'"
                    />
                </a>
            </div>
        </div>
        <div class="flex-col items-center mt-3 xl:hidden">
            <Carrosell></Carrosell>
        </div>
    </MainLayout>
</template>
