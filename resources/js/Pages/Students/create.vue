<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link, useForm } from "@inertiajs/vue3";

const form = useForm({
    name: null,
    image: null,
});

function storeStudents() {
    form.post("/students");
}
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
                        <Link href="/students">Back</Link>
                    </div>
                    <div class="lg:ml-40 ml-10 space-x-8"></div>
                    <div class="flex flex-col justify-center h-full">
                        <!-- Table -->
                        <!-- <div
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
                                                        Email
                                                    </div>
                                                </th>
                                                <th
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="font-semibold text-left"
                                                    >
                                                        Spent
                                                    </div>
                                                </th>
                                                <th
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="font-semibold text-center"
                                                    >
                                                        Country
                                                    </div>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody
                                            class="text-sm divide-y divide-gray-100"
                                        >
                                            <tr>
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
                                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-05.jpg"
                                                                width="40"
                                                                height="40"
                                                                alt="Alex Shatov"
                                                            />
                                                        </div>
                                                        <div
                                                            class="font-medium text-gray-800"
                                                        >
                                                            Alex Shatov
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div class="text-left">
                                                        alexshatov@gmail.com
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="text-left font-medium text-green-500"
                                                    >
                                                        $2,890.66
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
                                            <tr>
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
                                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-06.jpg"
                                                                width="40"
                                                                height="40"
                                                                alt="Philip Harbach"
                                                            />
                                                        </div>
                                                        <div
                                                            class="font-medium text-gray-800"
                                                        >
                                                            Philip Harbach
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div class="text-left">
                                                        philip.h@gmail.com
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="text-left font-medium text-green-500"
                                                    >
                                                        $2,767.04
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
                                            <tr>
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
                                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-07.jpg"
                                                                width="40"
                                                                height="40"
                                                                alt="Mirko Fisuk"
                                                            />
                                                        </div>
                                                        <div
                                                            class="font-medium text-gray-800"
                                                        >
                                                            Mirko Fisuk
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div class="text-left">
                                                        mirkofisuk@gmail.com
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="text-left font-medium text-green-500"
                                                    >
                                                        $2,996.00
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
                                            <tr>
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
                                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-08.jpg"
                                                                width="40"
                                                                height="40"
                                                                alt="Olga Semklo"
                                                            />
                                                        </div>
                                                        <div
                                                            class="font-medium text-gray-800"
                                                        >
                                                            Olga Semklo
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div class="text-left">
                                                        olga.s@cool.design
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="text-left font-medium text-green-500"
                                                    >
                                                        $1,220.66
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
                                            <tr>
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
                                                                src="https://raw.githubusercontent.com/cruip/vuejs-admin-dashboard-template/main/src/images/user-36-09.jpg"
                                                                width="40"
                                                                height="40"
                                                                alt="Burak Long"
                                                            />
                                                        </div>
                                                        <div
                                                            class="font-medium text-gray-800"
                                                        >
                                                            Burak Long
                                                        </div>
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div class="text-left">
                                                        longburak@gmail.com
                                                    </div>
                                                </td>
                                                <td
                                                    class="p-2 whitespace-nowrap"
                                                >
                                                    <div
                                                        class="text-left font-medium text-green-500"
                                                    >
                                                        $1,890.66
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
                        </div> -->

                        <form @submit.prevent="storeStudents">
                            <div class="mb-6">
                                <label
                                    for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Name</label
                                >
                                <input
                                    type="text"
                                    id="name"
                                    name="name"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required
                                />
                            </div>
                            <div class="mb-6">
                                <label
                                    for="image"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Image</label
                                >
                                <input
                                    type="file"
                                    id="image"
                                    wire:model="newImage"
                                    name="image"
                                    @input="form.image = $event.target.files[0]"
                                    class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5"
                                />
                            </div>
                            <div class="mb-6">
                                <label
                                    for="name"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Age</label
                                >
                                <input
                                    type="text"
                                    id="age"
                                    name="age"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                    required
                                />
                            </div>
                            <div class="mb-6">
                                <label
                                    for="status"
                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-white"
                                    >Status</label
                                >
                                <input
                                    class="relative float-left mt-[0.15rem] mr-[6px] -ml-[1.5rem] h-[1.125rem] w-[1.125rem] appearance-none rounded-[0.25rem] border-[0.125rem] border-solid border-neutral-300 dark:border-neutral-600 outline-none before:pointer-events-none before:absolute before:h-[0.875rem] before:w-[0.875rem] before:scale-0 before:rounded-full before:bg-transparent before:opacity-0 before:shadow-[0px_0px_0px_13px_transparent] before:content-[''] checked:border-primary dark:checked:border-primary checked:bg-primary dark:checked:bg-primary checked:before:opacity-[0.16] checked:after:absolute checked:after:ml-[0.25rem] checked:after:-mt-px checked:after:block checked:after:h-[0.8125rem] checked:after:w-[0.375rem] checked:after:rotate-45 checked:after:border-[0.125rem] checked:after:border-t-0 checked:after:border-l-0 checked:after:border-solid checked:after:border-white checked:after:bg-transparent checked:after:content-[''] hover:cursor-pointer hover:before:opacity-[0.04] hover:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:shadow-none focus:transition-[border-color_0.2s] focus:before:scale-100 focus:before:opacity-[0.12] focus:before:shadow-[0px_0px_0px_13px_rgba(0,0,0,0.6)] focus:before:transition-[box-shadow_0.2s,transform_0.2s] focus:after:absolute focus:after:z-[1] focus:after:block focus:after:h-[0.875rem] focus:after:w-[0.875rem] focus:after:rounded-[0.125rem] focus:after:content-[''] checked:focus:before:scale-100 checked:focus:before:shadow-[0px_0px_0px_13px_#3b71ca] checked:focus:before:transition-[box-shadow_0.2s,transform_0.2s] checked:focus:after:ml-[0.25rem] checked:focus:after:-mt-px checked:focus:after:h-[0.8125rem] checked:focus:after:w-[0.375rem] checked:focus:after:rotate-45 checked:focus:after:rounded-none checked:focus:after:border-[0.125rem] checked:focus:after:border-t-0 checked:focus:after:border-l-0 checked:focus:after:border-solid checked:focus:after:border-white checked:focus:after:bg-transparent"
                                    type="checkbox"
                                    name="status"
                                    value=""
                                    id="status"
                                />
                            </div>
                            <div class="flex items-start mb-6"></div>
                            <button type="submit">Submit</button>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
