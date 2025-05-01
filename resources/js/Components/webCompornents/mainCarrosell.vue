<script>
import { Autoplay } from "swiper/modules";

// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";
import "swiper/css/autoplay";
import "swiper/css/pagination";
const eventes = [
    {
        name: "String 2025",
        photo: "/images/program_images/string3.jpg",
    },
    {
        name: "Set Your Goal 2024",
        photo: "/images/program_images/syg4.png",
    },
    {
        name: "YKOTR 2024",
        photo: "/images/program_images/ykothr3.jpg",
    },
    {
        name: "YKOTR 2024",
        photo: "/images/program_images/ykothr2.jpg",
    },
    {
        name: "String 2024",
        photo: "/images/program_images/String1.jpg",
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
            eventes,
            modules: [Autoplay],
        };
    },
};
</script>
<template>
    <div class="w-full xl:max-w-7xl max-w-md p-8 items-center">
        <swiper
            :modules="modules"
            :slides-per-view="1"
            :space-between="50"
            :scrollbar="{ draggable: true }"
            :autoplay="{ delay: 2000, disableOnInteraction: false }"
            @swiper="onSwiper"
            @slideChange="onSlideChange"
        >
            <swiper-slide v-for="event in eventes" :key="event.name">
                <div
                    class="flex flex-col items-center justify-center gap-5 text-left"
                >
                    <div class="relative">
                        <img
                            class="w-90 rounded-lg"
                            :src="event.photo"
                            alt="Logo"
                        />
                        <p
                            class="absolute bottom-2 right-2 text-2xl sm:text-4xl font-hadings text-black font-bold drop-shadow-[0_0px_10px_rgba(255,255,255,1)]"
                        >
                            {{ event.name }}
                        </p>
                    </div>
                </div>
            </swiper-slide>
        </swiper>
    </div>
</template>
