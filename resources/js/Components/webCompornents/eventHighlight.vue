<script lang="ts">
const programes = [
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
    name: "eventHighlight",

    data() {
        return {
            programes,
        };
    },
};
</script>
<template>
    <div class="flex flex-col gap-5">
        <div
            v-for="event in programes"
            :key="event.name"
            class="flex flex-col xl:flex-row items-center"
        >
            <div class="flex flex-col gap-5 text-left xl:flex-row">
                <img class="w-full xl:w-64" :src="event.photo" alt="Logo" />
                <div class="flex flex-col gap-2 items-center pt-5">
                    <p class="text-3xl text-blue font-extrabold w-full">
                        {{ event.name }}
                    </p>
                    <p class="text-xl text-blue font-extrabold">
                        {{ event.description }}
                    </p>
                </div>
            </div>
        </div>
    </div>
</template>
