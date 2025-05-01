<script setup lang="ts">
import EventHighlight from "@/Components/webCompornents/eventHighlight.vue";
import MainLayout from "@/Layouts/MainLayout.vue";
import HighlightCarrosell from "@/Components/webCompornents/highlightCarrosell.vue";
import mainCarrosell from "@/Components/webCompornents/mainCarrosell.vue";
</script>

<template class="">
    <MainLayout>
        <div class="hidden grow px-12 max-w-6xl pt-12 xl:block">
            <div class="flex justify-center items-center">
                <mainCarrosell></mainCarrosell>
            </div>
            <div
                class="flex pt-5 justify-between w-full font-hadings font-bold"
            >
                <p class="text-3xl text-blue">Our Programes</p>
                <a href="/Programes">
                    <p class="text-2xl text-blue hover:underline">
                        View more >>
                    </p>
                </a>
            </div>
            <div class="p-12 xl:block hidden justify-center items-center">
                <EventHighlight></EventHighlight>
            </div>
        </div>
        <div class="xl:hidden max-w-md">
            <div class="max-w-xl mx-auto w-full justify-center items-center">
                <div class="flex justify-center">
                    <mainCarrosell />
                </div>
                <div
                    class="flex justify-center pt-2 font-hadings font-bold max-w-s m-2"
                >
                    <p class="text-3xl text-blue">Our Programes</p>
                    <a href="/Programes"> </a>
                </div>
                <div class="flex xl:hidden justify-center items-center">
                    <HighlightCarrosell />
                </div>
            </div>
        </div>
    </MainLayout>
</template>
