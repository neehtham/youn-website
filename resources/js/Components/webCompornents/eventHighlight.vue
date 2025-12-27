<script lang="ts">
export default {
    name: "eventHighlight",

    props: {
        events: {
            type: Array as () => any[],
            required: true,
        },
    },

    methods: {
        getPhoto(slug: string) {
            // Mapping known slugs to their existing logos
            const logos: Record<string, string> = {
                string: "/images/program_logos/string.png",
                ykotr: "/images/program_logos/ykotr.png",
                syg: "/images/program_logos/syg.png",
            };
            return logos[slug] || "/images/events/placeholder.png";
        },
    },
};
</script>
<template>
    <div class="flex flex-col gap-5">
        <div
            v-for="event in events"
            :key="event.slug"
            class="flex flex-col xl:flex-row items-center"
        >
            <div class="flex flex-col gap-5 text-left xl:flex-row">
                <a :href="'/Programes/' + event.slug">
                    <img
                        class="w-full xl:w-64 hover:opacity-85 transform transition-transform duration-400 hover:scale-105"
                        :src="getPhoto(event.slug)"
                        alt="Logo"
                    />
                </a>
                <div class="flex flex-col gap-2 items-center pt-5">
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
        </div>
    </div>
</template>
