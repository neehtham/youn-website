<script setup lang="ts">
import Navbar from "@/Components/webCompornents/Navbar.vue";
import WebFooter from "@/Components/webCompornents/webFooter.vue";
import { Head } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
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
                    String
                </h1>
                <!-- <button class="mttto--blue-600underline">Go Back</button> -->
            </div>

            <div class="mt-4">
                <h2 class="text-xl font-semibold">What is String?</h2>
                <p class="mt-2 text-gray-700">
                    <strong>String</strong> is an initiative designed to foster
                    connectivity and collaboration among youth. This event
                    serves as a platform for young individuals to share their
                    ideas, learn from experienced professionals, and work
                    together to enhance their communities.
                </p>
            </div>

            <div class="flex items-center justify-center">
                <img
                    src="/images/program_images/String1.png"
                    alt="Group Photo"
                    class="rounded-lg shadow-lg w-full"
                />
            </div>

            <div class="flex items-center justify-center">
                <img
                    src="/images/program_images/String2.jpg"
                    alt="Discussion"
                    class="rounded-lg shadow-lg w-full"
                />
            </div>
            <div class="mt-8 bg-blue-100 p-6 rounded-lg text-left">
                <ul class="list-disc pl-5 space-y-3">
                    <li>
                        <strong>Monthly Events:</strong> Hosted every month for
                        30+ participants aged 15-30.
                    </li>
                    <li>
                        <strong>Special Guests:</strong> Each event features a
                        guest speaker related to the theme.
                    </li>
                    <li>
                        <strong>Engagement:</strong> Opportunities for
                        discussions and learning from experts.
                    </li>
                    <li>
                        <strong>Interactive Activities:</strong> Includes
                        diverse outdoor activities for an engaging experience.
                    </li>
                </ul>
            </div>
        </div>
    </MainLayout>
</template>
