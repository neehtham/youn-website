<template>
    <div class="max-w-lg p-8">
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
                <div class="flex flex-col gap-5 text-left xl:flex-row">
                    <img
                        class="w-full rounded-lg xl:w-64"
                        :src="event.photo"
                        alt="Logo"
                    />
                    <div class="flex flex-col gap-2 items-center pt-5">
                        <p class="text-3xl text-blue font-extrabold w-full">
                            {{ event.name }}
                        </p>
                        <p class="text-xl text-blue font-extrabold">
                            {{ event.description }}
                        </p>
                    </div>
                </div>
            </swiper-slide>
        </swiper>
    </div>
</template>
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
        name: "String",
        description:
            "Our very first own program launched in 2024 with a total of 1 event held and many more planned and ready to be held.",
        photo: "/images/program_logos/string.png",
    },
    {
        name: "YKOTR",
        description:
            "The physical activity held monthly to promote a healthy lifestyle and bonding within our volunteer group.",
        photo: "/images/program_logos/ykotr.png",
    },
    {
        name: "SYG",
        description:
            "An event started by a collaboration between YOUN and Al-Hijrah held every year in Ramadan.",
        photo: "/images/program_logos/syg.png",
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
