<script lang="ts">
const programes = [
    {
        name: "String",
        description:
            "Our very first own program launched in 2024 with a total of 1 event held and many more planned and ready to be held.",
        photo: "/images/program_images/string.png",
    },
    {
        name: "YKOTR",
        description:
            "The physical activity held monthly to promote a healthy lifestyle and bonding within our volunteer group.",
        photo: "/images/program_images/ykotr.png",
    },
    {
        name: "SYG",
        description:
            "An event started by a collaboration between YOUN and Al-Hijrah held every year in Ramadan.",
        photo: "/images/program_images/syg.png",
    },
];
export default {
    name: "Navbar",

    data() {
        return {
            programes,
        };
    },
};
</script>
<template>
    <div
        class="grid grid-cols-1 gap-8 mt-20 ml-4 sm:ml-8 md:ml-16 lg:ml-24 xl:ml-32 max-w-full md:max-w-4xl"
    >
        <div
            v-for="event in programes"
            :key="event.name"
            class="flex flex-col md:flex-row items-center"
        >
            <img
                class="w-32 sm:w-48 md:w-64 lg:w-80"
                :src="event.photo"
                alt="Logo"
            />
            <div
                class="ml-0 md:ml-6 lg:ml-12 mt-4 md:mt-0 text-center md:text-left"
            >
                <p class="text-3xl text-blue font-extrabold">
                    {{ event.name }}
                </p>
                <p class="text-xl text-blue font-extrabold">
                    {{ event.description }}
                </p>
            </div>
        </div>
    </div>
</template>
