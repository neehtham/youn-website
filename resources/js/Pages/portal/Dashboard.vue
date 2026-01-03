<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import { Button } from "primevue";
import Toast from "primevue/toast";
import { useToast } from "primevue/usetoast";
import { onMounted } from "vue";
const toast = useToast();

interface FlashProps {
    flash: {
        success: string | null;
        error: string | null;
    };
}

const props = defineProps<FlashProps>();

onMounted(() => {
    if (props.flash.success) {
        toast.add({
            severity: "success",
            summary: "Success",
            detail: props.flash.success,
            life: 3000,
        });
    }

    if (props.flash.error) {
        toast.add({
            severity: "error",
            summary: "Error",
            detail: props.flash.error,
            life: 3000,
        });
    }
});
</script>

<template>
    <Head title="Dashboard" />
    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div>
            <Toast position="top-right" />
        </div>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <Button
                        @click.prevent="
                            () => $inertia.get(route('event.create'))
                        "
                        class="m-6"
                        >Create event</Button
                    >
                    <Button
                        @click.prevent="() => $inertia.get(route('event.view'))"
                        >Edit an event</Button
                    >
                    <Button
                        @click.prevent="
                            () => $inertia.get(route('profile.show'))
                        "
                        class="m-6"
                        >Users</Button
                    >
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
