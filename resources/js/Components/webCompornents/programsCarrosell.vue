<template>
    <div class="max-w-lg p-8">
        <swiper
            :modules="modules"
            :slides-per-view="1"
            :space-between="50"
            :pagination="{ clickable: true }"
            :scrollbar="{ draggable: true }"
            :autoplay="{ delay: 2000, disableOnInteraction: false }"
            @swiper="onSwiper"
            @slideChange="onSlideChange"
        >
            <swiper-slide v-for="program in programes" :key="program.name">
                <a :href="'/Programes/' + program.id">
                    <img
                        class="min-w-48 rounded-lg hover:opacity-85 transform transition-transform duration-400 hover:scale-105"
                        :src="program.photo"
                        :alt="program.name + ' logo'"
                /></a>
            </swiper-slide>
        </swiper>
    </div>
</template>
<script>
import { Autoplay, Pagination, A11y } from "swiper/modules";

// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";
import "swiper/css/autoplay";
import "swiper/css/pagination";
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
export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    setup() {
        const onSwiper = (swiper) => {
            console.log(swiper);
        };
        const onSlideChange = () => {
            console.log("slide change");
        };
        return {
            onSwiper,
            onSlideChange,
            programes,
            modules: [Autoplay, Pagination, A11y],
        };
    },
};
</script>
