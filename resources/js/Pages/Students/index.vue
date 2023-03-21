<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
const prop = defineProps({
    studnet : Array
})
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <!-- <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">You're logged in!</div>
                </div> -->

                <!-- component -->
                <section
                    class="antialiased bg-gray-100 text-gray-600 h-screen px-4"
                >
                    <div class="flex justify-end m-2 p-2">
                        <Link href="/students/create">Create</Link>
                    </div>
                    <div class="lg:ml-40 ml-10 space-x-8"></div>
                    <div class="flex flex-col justify-center h-full">
                        <!-- Table -->
                        <div
                            class="w-full max-w-2xl mx-auto bg-white shadow-lg rounded-sm border border-gray-200"
                        >
                            <header class="px-5 py-4 border-b border-gray-100">
                                <h2 class="font-semibold text-gray-800">
                                    Customers
                                </h2>
                            </header>
                            <div class="p-3">
                                <div class="overflow-x-auto">
                                    <table class="table-auto w-full">
                                        <thead
                                            class="text-xs font-semibold uppercase text-gray-400 bg-gray-50"
                                        >
                                            <tr>
                                                <th
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="font-semibold text-left"
                                                    >
                                                        Name
                                                    </div>
                                                </th>
                                                <th
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="font-semibold text-left"
                                                    >
                                                        Image
                                                    </div>
                                                </th>
                                                <th
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="font-semibold text-left"
                                                    >
                                                        Age
                                                    </div>
                                                </th>
                                                <th
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="font-semibold text-center"
                                                    >
                                                        Status
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody
                                            class="text-sm divide-y divide-gray-100"
                                        >
                                            <tr v-for="stu in studnet"  :key="stu.id">
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="flex items-center"
                                                    >
                                                        <div
                                                            class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"
                                                        >
                                                            <img
                                                                class="rounded-full"
                                                               :src="stu.image"
                                                                width="40"
                                                                height="40"
                                                                alt="Alex Shatov"
                                                            />
                                                        </div>
                                                        <div
                                                            class="font-medium text-gray-800"
                                                        >
                                                           {{ stu.name }}
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div class="text-left">
                                                        {{ stu.age }}
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="text-left font-medium text-green-500"
                                                    >
                                                    {{ stu.status }}
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="text-lg text-center"
                                                    >
                                                        ??
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
