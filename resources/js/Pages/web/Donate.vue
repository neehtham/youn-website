<script setup lang="ts">
import Navbar from "@/Components/webCompornents/Navbar.vue";
import WebFooter from "@/Components/webCompornents/webFooter.vue";
import { Head } from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";
</script>
<script lang="ts">
function copyToClipboard(text: string, elementId: string) {
    navigator.clipboard.writeText(text).then(() => {
        const message = document.getElementById(elementId);
        message?.classList.remove("hidden");
        setTimeout(() => message?.classList.add("hidden"), 1500);
    });
}
</script>
<template>
    <MainLayout>
        <div class="relative z-10 max-w-4xl mx-auto p-6">
            <h1
                class="text-5xl font-extrabold text-blue font-berlin text-center"
            >
                BECOME A PART OF US
            </h1>

            <p
                class="text-3xl font-bold text-blue mt-6 flex items-center justify-center"
            >
                <span class="text-5xl text-blue mr-2">❝</span>
                Your Donation Fuels Youth Empowerment and Community Growth
            </p>

            <div class="text-lg text-blue items-center mt-6">
                <p
                    class="flex items-center justify-center"
                    onclick="copyToClipboard('90101555001461000', 'mvrCopied')"
                >
                    📄
                    <span class="ml-2 font-medium"
                        >MVR ACC:
                        <span class="font-mono hover:text-darkBlue"
                            >90101555001461000</span
                        ></span
                    >
                </p>
                <span id="mvrCopied" class="text-green-600 text-sm hidden"
                    >Copied!</span
                >

                <p
                    class="flex items-center justify-center mt-2"
                    onclick="copyToClipboard('90101555001462000', 'usdCopied')"
                >
                    📄
                    <span class="ml-2 font-medium"
                        >USD ACC:
                        <span class="font-mono hover:text-darkBlue"
                            >90101555001462000</span
                        ></span
                    >
                </p>
                <span id="usdCopied" class="text-green-600 text-sm hidden"
                    >Copied!</span
                >
            </div>

            <p class="text-blue mt-6 leading-relaxed text-xl font-medium">
                Your contribution directly supports events and initiatives that
                empower youth, enhance their skills, and foster a stronger sense
                of community. Every amount you donate helps us create
                opportunities for young individuals to grow, engage, and thrive.
                Here’s how your generosity can make a difference:
            </p>

            <ul class="mt-4 space-y-3 text-blue text-xl font-medium">
                <li>
                    • <span class="font-semibold">20/-</span>: Provides
                    resources for one youth participant in a skill-building
                    workshop (e.g., arts, technology, or entrepreneurship).
                </li>
                <li>
                    • <span class="font-semibold">50/-</span>: Funds materials
                    for community activities that promote teamwork and healthy
                    lifestyles.
                </li>
                <li>
                    • <span class="font-semibold">100/-</span>: Covers the cost
                    of hosting an educational session to guide youth away from
                    harmful ideologies and inspire positive change.
                </li>
                <li>
                    • <span class="font-semibold">250/-</span>: Sponsors a
                    large-scale community event, engaging dozens of young
                    participants in productive, fun, and impactful activities.
                </li>
            </ul>

            <p class="text-blue mt-6 leading-relaxed text-xl font-medium">
                With your support, we can build a brighter future by equipping
                our youth with the tools they need to succeed and contribute
                meaningfully to their communities.
            </p>
        </div>
    </MainLayout>
</template>
