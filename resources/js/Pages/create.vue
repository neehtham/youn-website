<script setup lang="ts">
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, useForm } from "@inertiajs/vue3";
import { ref } from "vue";
import vueFilePond from "vue-filepond";

import "filepond/dist/filepond.min.css";
import "filepond-plugin-image-preview/dist/filepond-plugin-image-preview.min.css";

// Create component with plugins
const FilePond = vueFilePond();

const photo = ref();
const pond = ref(null);

// Get CSRF token at setup time
const csrfToken =
    document
        ?.querySelector('meta[name="csrf-token"]')
        ?.getAttribute("content") || "";

const handleFilePondInit = () => {
    console.log("FilePond has initialized");
};

const form = useForm({
    title: "",
    paragraph1: "",
    paragraph2: "",
    coverPhoto: null,
    Photo1: null,
    Photo2: null,
});

const handleProcessFile = (error: any, file: any, fieldName: string) => {
    if (!error) {
        switch (fieldName) {
            case "coverPhoto":
                form.coverPhoto = file.serverId;
                break;
            case "Photo1":
                form.Photo1 = file.serverId;
                break;
            case "Photo2":
                form.Photo2 = file.serverId;
                break;
        }
    }
};
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <form class="mx-32 mt-5" @submit.prevent="form.post('/uploads/save')">
            <div class="space-y-12">
                <div class="sm:col-span-4">
                    <label
                        for="event"
                        class="block text-sm/6 font-medium text-gray-900"
                        >Name of event</label
                    >
                    <div class="mt-2">
                        <input
                            type="text"
                            name="event"
                            id="event"
                            v-model="form.title"
                            class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6 rounded-lg"
                        />
                    </div>
                </div>
                <div class="col-span-full">
                    <label
                        for="pragraph1"
                        class="block text-sm/6 font-medium text-gray-900"
                        >First Pragraph</label
                    >
                    <div class="mt-2">
                        <textarea
                            name="pragraph1"
                            id="pragraph1"
                            rows="3"
                            v-model="form.paragraph1"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                        />
                    </div>
                </div>
                <div class="col-span-full">
                    <label
                        for="pragraph2"
                        class="block text-sm/6 font-medium text-gray-900"
                        >Second Pragraph</label
                    >
                    <div class="mt-2">
                        <textarea
                            name="pragraph2"
                            id="pragraph2"
                            rows="3"
                            v-model="form.paragraph2"
                            class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6"
                        />
                    </div>
                </div>

                <div class="col-span-full">
                    <label
                        for="cover-photo"
                        class="block text-sm/6 font-medium text-gray-900"
                        >Cover photo</label
                    >
                    <FilePond
                        ref="pond"
                        label-idle="Drop files here..."
                        :allow-multiple="false"
                        accepted-file-types="image/jpeg, image/png"
                        :server="{
                            url: '/uploads/process',
                            headers: {
                                'X-CSRF-TOKEN': csrfToken,
                            },
                        }"
                        @init="handleFilePondInit"
                        @processfile="
                            (error:any, file:any) =>
                                handleProcessFile(error, file, 'coverPhoto')
                        "
                    />
                </div>
                <div class="col-span-full">
                    <label
                        for="Photo1"
                        class="block text-sm/6 font-medium text-gray-900"
                        >Photo 1
                    </label>
                    <FilePond
                        ref="pond"
                        label-idle="Drop files here..."
                        :allow-multiple="false"
                        accepted-file-types="image/jpeg, image/png"
                        :server="{
                            url: '/uploads/process',
                            headers: {
                                'X-CSRF-TOKEN': csrfToken,
                            },
                        }"
                        @init="handleFilePondInit"
                        @processfile="
                            (error:any, file:any) =>
                                handleProcessFile(error, file, 'Photo1')
                        "
                    />
                </div>
                <div class="col-span-full">
                    <label
                        for="Photo2"
                        class="block text-sm/6 font-medium text-gray-900"
                        >Photo 2</label
                    >
                    <FilePond
                        ref="pond"
                        label-idle="Drop files here..."
                        :allow-multiple="false"
                        accepted-file-types="image/jpeg, image/png"
                        :server="{
                            url: '/uploads/process',
                            headers: {
                                'X-CSRF-TOKEN': csrfToken,
                            },
                        }"
                        @init="handleFilePondInit"
                        @processfile="
                            (error:any, file:any) =>
                                handleProcessFile(error, file, 'Photo2')
                        "
                    />
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <button
                    type="button"
                    class="text-sm/6 font-semibold text-gray-900"
                >
                    Cancel
                </button>
                <button
                    type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                >
                    Save
                </button>
            </div>
        </form>
    </AuthenticatedLayout>
</template>
