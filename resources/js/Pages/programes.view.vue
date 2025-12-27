<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { ref, onMounted } from "vue";
import Column from "primevue/column";
import { DataTable } from "primevue";
import { Button } from "primevue";
import { Link } from "@inertiajs/vue3";

const props = defineProps({
    events: {
        type: Array,
        required: true,
    },
});
console.log(props.events);
</script>

<template>
    <AuthenticatedLayout>
        <DataTable :value="props.events" tableStyle="min-width: 50rem">
            <Column field="title" header="Title"></Column>
            <Column header="Cover Photo">
                <template #body="slotProps">
                    <img
                        :src="`/storage/${slotProps.data.coverPhoto}`"
                        :alt="slotProps.data"
                        class="w-24 rounded"
                    />
                </template>
            </Column>
            <Column header="Photo1">
                <template #body="slotProps">
                    <img
                        :src="`/storage/${slotProps.data.Photo1}`"
                        :alt="slotProps.data"
                        class="w-24 rounded"
                    />
                </template>
            </Column>
            <Column header="Photo2">
                <template #body="slotProps">
                    <img
                        :src="`/storage/${slotProps.data.Photo2}`"
                        :alt="slotProps.data"
                        class="w-24 rounded"
                    />
                </template>
            </Column>
            <Column header="Button">
                <template #body="slotProps">
                    <Button
                        @click.prevent="
                            () =>
                                $inertia.get(
                                    route('event.edit', {
                                        id: slotProps.data.slug,
                                    })
                                )
                        "
                        >Edit</Button
                    >
                </template>
            </Column>
        </DataTable>
    </AuthenticatedLayout>
</template>
