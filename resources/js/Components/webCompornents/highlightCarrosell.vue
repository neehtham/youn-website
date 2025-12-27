<script lang="ts">
import { Autoplay } from "swiper/modules";

// Import Swiper Vue.js components
import { Swiper, SwiperSlide } from "swiper/vue";

// Import Swiper styles
import "swiper/css";
import "swiper/css/autoplay";
import "swiper/css/pagination";

export default {
    components: {
        Swiper,
        SwiperSlide,
    },
    props: {
        events: {
            type: Array as () => any[],
            required: true,
        },
    },
    setup(props) {
        const onSwiper = (swiper: any) => {
            console.log(swiper);
        };
        const onSlideChange = () => {
            console.log("slide change");
        };

        const getPhoto = (slug: string) => {
            const logos: Record<string, string> = {
                string: "/images/program_logos/string.png",
                ykotr: "/images/program_logos/ykotr.png",
                syg: "/images/program_logos/syg.png",
            };
            return logos[slug] || "/images/events/placeholder.png";
        };

        return {
            onSwiper,
            onSlideChange,
            getPhoto,
            modules: [Autoplay],
        };
    },
};
</script>
<template>
    <div class="max-w-md xl:max-w-lg px-8">
        <swiper
            :modules="modules"
            :slides-per-view="1"
            :space-between="50"
            :scrollbar="{ draggable: true }"
            :autoplay="{ delay: 2000, disableOnInteraction: false }"
            @swiper="onSwiper"
            @slideChange="onSlideChange"
        >
            <swiper-slide v-for="event in events" :key="event.slug">
                <div class="flex flex-col gap-5 text-left xl:flex-row">
                    <a :href="'/Programes/' + event.slug">
                        <img
                            class="w-full rounded-lg xl:w-64"
                            :src="getPhoto(event.slug)"
                            alt="Logo"
                        />
                    </a>
                    <div class="flex flex-col gap-2 items-center pb-4">
                        <a :href="'/Programes/' + event.slug" class="w-full">
                            <p
                                class="text-3xl text-blue font-extrabold hover:underline"
                            >
                                {{ event.title || event.name }}
                            </p>
                        </a>
                        <p class="text-xl text-blue font-extrabold">
                            {{ event.excerpt || event.description }}
                        </p>
                    </div>
                </div>
            </swiper-slide>
        </swiper>
    </div>
</template>
