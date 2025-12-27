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
            <swiper-slide v-for="program in events" :key="program.slug">
                <a :href="'/Programes/' + program.slug">
                    <img
                        class="min-w-48 rounded-lg hover:opacity-85 transform transition-transform duration-400 hover:scale-110"
                        :src="`/storage/${program.coverPhoto}`"
                        :alt="program.title + ' logo'"
                    />
                </a>
            </swiper-slide>
        </swiper>
    </div>
</template>

<script setup lang="ts">
import { Autoplay, A11y } from "swiper/modules";
import { Swiper, SwiperSlide } from "swiper/vue";
import "swiper/css";
import "swiper/css/autoplay";

// Define props
const props = defineProps({
    events: {
        type: Object,
        required: true,
    },
});

// Define event handlers
const onSwiper = (swiper: any) => {
    console.log(swiper);
};

const onSlideChange = () => {
    console.log("slide change");
};

// Define modules
const modules = [Autoplay, A11y];
</script>
