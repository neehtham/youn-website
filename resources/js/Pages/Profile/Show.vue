<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head } from "@inertiajs/vue3";
import Column from "primevue/column";
import { DataTable } from "primevue";
import { Button } from "primevue";
import { Link } from "@inertiajs/vue3";
import "primeicons/primeicons.css";
const props = defineProps<{
    users?: any;
}>();
</script>

<template>
    <Head title="Profile" />
    <AuthenticatedLayout>
        <div class="flex flex-row items-center justify-between w-full px-6">
            <div class="flex flex-col items-start">
                <h1 class="text-3xl font-bold">User Profile</h1>
                <p class="mt-2 text-gray-600">
                    Here you can view and manage your user profile.
                </p>
            </div>
            <Button>
                <Link href="/register" class="text-blue-500 hover:underline"
                    >Create New User</Link
                >
            </Button>
        </div>
        <div class="flex flex-col h-screen mt-3 items-center">
            <DataTable :value="props.users" tableStyle="min-width: 100rem">
                <Column field="name" header="Name"></Column>
                <Column field="email" header="Email"></Column>
                <Column>
                    <template #body="slotProps">
                        <Button
                            severity="warn"
                            @click.prevent="
                                () =>
                                    $inertia.get(
                                        route('profile.edit', {
                                            id: slotProps.data.id,
                                        })
                                    )
                            "
                            >Edit</Button
                        >
                    </template>
                </Column>
                <Column>
                    <template #body="slotProps">
                        <Button
                            severity="danger"
                            @click.prevent="
                                () =>
                                    $inertia.get(
                                        route('event.destroy', {
                                            id: slotProps.data.id,
                                        })
                                    )
                            "
                            >Delete</Button
                        >
                    </template>
                </Column>
            </DataTable>
        </div>
    </AuthenticatedLayout>
</template>
